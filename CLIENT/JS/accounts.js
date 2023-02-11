const db = openDatabase("accounts","1.0","accounts",65535);


const createTableAdminAccount = () =>{
    db.transaction((transaction)=>{
        let sql =  `
        CREATE TABLE accountAdmin (
            USERNAME VARCHAR(50) NOT NULL PRIMARY KEY,
            PASSWORD VARCHAR(100) NOT NULL
        );
        `;
        transaction.executeSql(sql,undefined,
        () =>{
            console.log("Table is crated successfully!");
        },
        () =>{
            console.log("Table is already created!");
        }
        );
    });
}

const authenticateAccount = () =>{
    let username = $("#login-input-username").val();
    let password = $("#login-input-password").val();

    db.transaction((transaction) =>{
        const sql = `SELECT * FROM accountAdmin`;
        transaction.executeSql(sql,undefined,
        
        (transaction,result) =>{
                let row = result.rows.item(0);
                let un = row.USERNAME;
                let pa = row.PASSWORD;

                if (un == username) {
                    if (pa == password) {
                        window.location.href = "./home.html";
                        alert("Login successful!");
                    }else{
                        alert("Invalid password try again");
                    }
                }else{
                    alert("Invalid username try again");
                }
        },
        () =>{
          console.log("No table to show data!");
        }
        );
    });
}

const createUserAccountsTable = () =>{
    db.transaction((transaction)=>{
        let sql =  `
        CREATE TABLE accountUser (
            ID INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
            FNAME VARCHAR(50) NOT NULL,
            LNAME VARCHAR(50) NOT NULL,
            ACCOUNTTYPE VARCHAR(50) NOT NULL,
            USERNAME VARCHAR(50) NOT NULL,
            PASSWORD VARCHAR(100) NOT NULL
        );
        `;
        transaction.executeSql(sql,undefined,
        () =>{
            console.log("USER Table is crated successfully!");
        },
        () =>{
            console.log("USER Table is already created!");
        }
        );
    });
}

const AddAccounts = () =>{
        let useranme = "Admin";
        let password = "admin1234";
            
        db.transaction((transaction) =>{
            let sql = `
                INSERT INTO accountAdmin(USERNAME,PASSWORD)
                VALUES(?,?);
            `;

            transaction.executeSql(sql,[useranme,password],
            
            () =>{
                console.log("New person added successfully!");
                console.log()
            },

            () =>{
                console.log("Account already created!");
            }   

            )
        });
}

const showAccounts = () =>{
                db.transaction((transaction) =>{
                const sql = `SELECT * FROM accountAdmin`;
                transaction.executeSql(sql,undefined,
                
                (transaction,result) =>{
                    console.log(result);
                },
                () =>{
                    console.log("No table to show data!");
                }
                )
            });
}

const deleteTable = () =>{
            db.transaction((transaction) => {
                const sql = `
                DROP TABLE accountAdmin
            `;
            transaction.executeSql(sql,undefined,
            () =>{
                console.log("Table is deleted successfully");
            },
            () =>{
                console.log("Table is already deleted!")
            }
            );            
            });
}

createTableAdminAccount();
AddAccounts();
showAccounts();

// deleteTable();