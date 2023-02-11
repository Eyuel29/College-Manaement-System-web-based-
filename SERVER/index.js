const express = require('express');
const app = express();
const fs = require('fs');
const bodyParser = require('body-parser');
const pug = require('pug');

app.use(bodyParser.urlencoded({extended : false}));

app.set('view engine', 'pug')

const port = 3000;

app.use(express.static('../CLIENT'));

app.get('/', (req, res) => {
    res.sendFile('index.html',{ root : __dirname});
});


// app.post('/submit',(req,res)=>{
//     console.log(req.body);
//     if (req.body.username == "Admin" && req.body.password == "admin1234") {
//         console.log("login sucessesful!");
//     }else{
//         console.log('Enter a valid information!');
//         res.render('index',{title: "Data saved", message : "Data saved successfully"})
//     }
// })


app.listen(3000,(err)=>{
    if (!err) {
    console.log("server startred at port" + port);
    }else{
        console.log(JSON.stringify(err));
    }
});
