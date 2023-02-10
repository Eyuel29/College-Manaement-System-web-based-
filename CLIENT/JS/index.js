const db = openDatabase("personDB","1.0","personDB",65535);

$(()=>{

    $("#create-table").click(()=>{
        db.transaction((transaction)=>{
            let sql =  `
            CREATE TABLE person (
                ID INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
                FNAME VARCHAR(50) NOT NULL,
                LNAME VARCHAR(50) NOT NULL,
                EMAIL VARCHAR(50) NOT NULL,
                PHOTOURL VARCHAR(100) NOT NULL
            );
            `;
            transaction.executeSql(sql,undefined,
            () =>{
                alert("Table is crated successfully!");
            },
            () =>{
                alert("Table is already created!");
            }
            );
        });
    });

    $("#remove-table").click(()=>{

        if (confirm("Are you sure you want to delete this table?")){
            db.transaction((transaction) => {
                const sql = `
                DROP TABLE person
            `;
            transaction.executeSql(sql,undefined,
            () =>{
                alert("Table is deleted successfully");
            },
            () =>{
                alert("Table is already deleted!")
            }
            );            
            });
        }
    });

    $("#add").click(()=>{
        
        let fname = $("#inp-fname").val();
        let lname = $("#inp-lname").val();
        let email = $("#inp-email").val();
        let photoURL = $("#inp-photoURL").val();

        if (fname !== "" && lname !== "" && email !== "" && photoURL !== "") {
            
        db.transaction((transaction) =>{
            let sql = `
                INSERT INTO person(FNAME,LNAME,EMAIL,PHOTOURL)
                VALUES(?,?,?,?);
            `;

            transaction.executeSql(sql,[fname,lname,email,photoURL],
            
            () =>{
                alert("New person added successfully!");
            },

            () =>{
                alert("No table crated to add!");
            }   

            )
        });
        location.reload();
        }else{
            alert("Please provide full information!");
        }
    });

    $(document).ready(() =>{
            $("person-list").children().remove();
            db.transaction((transaction) =>{
                const sql = `SELECT * FROM person ORDER BY ID DESC`;
                transaction.executeSql(sql,undefined,
                
                (transaction,result) =>{
                    if (result.rows.length) {

                        for (let i = 0;  i < result.rows.length; i++) {
                        let row = result.rows.item(i);
                        let id = row.ID;
                        let fn = row.FNAME;
                        let ln = row.LNAME;
                        let em = row.EMAIL;
                        let pu = row.PHOTOURL

                        appendProfiles(id,fn,ln,em,pu);
                        }
                    }
                    else{
                        $("person-list").append(
                        `
                        <tr><td colspan="3" align="center" >NO DATA FOUND.</td></tr>
                        `);
                    }
                },
                () =>{
                    alert("No table to show data!");
                }
                
                )
            }) 
    }
    );
});

const appendProfiles = (id,fn,ln,em,pu) =>{
    document.getElementById("data-table").innerHTML += 
        `<tr><td>${id}</td>
            <td>${fn}</td>
            <td>${ln}</td>
            <td>${em}</td>
            <td><img class="table-img" src="${pu}"alt=""></td></tr>`;
}
