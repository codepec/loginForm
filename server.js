const mysql = require("mysql2/promise");

const insertIntoDB = async () => {
    const connection = await mysql.createConnection({
        host: "sql11.freesqldatabase.com",
        user:"sql11445883",
        password:"bYQEI4DVwu",
        database:"sql11445883",
        port:3306,
    })

    try {
        await connection.query(
            "INSERT INTO login (username, password) VALUES ('CodePec', '1234')"
        )
        console.log("inserted")


    }catch (e){
        console.log(e)
    }
};

insertIntoDB();