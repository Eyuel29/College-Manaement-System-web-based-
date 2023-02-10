const express = require("express");

const mySql = require("mysql");

const app = express();

let connnection = mySql.createConnection({
    host: 'localhost',
    user : 'CMS',
    password : 'cms123456',
    database: 'cms'
});

connnection.connect((err)=>{
    if (!err) {
        console.log("DB connection successful!")
    }else{
        console.log("DB connection successful!\n" + "Error: " + JSON.stringify(err,undefined,2));
    }
});