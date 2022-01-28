<!DOCTYPE html>
<html>
<head>
<title>UMPBCAS</title>
    <h1>SQL Injections</h1>
<style>
h1{  
    text-align: center; 
    color: white; 
    font-family:system-ui;


}
h3{  
    text-align: left;  
    color: white; 
    font-family:system-ui;

}
h2{  
    text-align: left;  
    color:black; 
    font-family:system-ui;

}
html {
  background-color: #27613b;
}

.button5 {
  background-color: grey;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
.button {
    border: none;
  color: white;
  padding: 30px 60px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 100px 50px;
  transition-duration: 0.2s;
  cursor: pointer;
  margin: 40px;
    width: 25%;
    padding-top:25px;
    top: 50%;
    left: 50%;
    margin-top: 40px ;
    margin-left: 880px ;

   
  
}
</style>
</head>
<body>

<h2>What is a SQL Injection Attack?</h2>

<h3>SQL Injection (SQLi) is a type of an injection attack that makes it possible to execute malicious SQL statements. These statements control a database server behind a web application. Attackers can use SQL Injection vulnerabilities to bypass application security measures. They can go around authentication and authorization of a web page or web application and retrieve the content of the entire SQL database. They can also use SQL Injection to add, modify, and delete records in the database.</h3> 

<h2>How does a SQL Injection Attack happen ?</h2>
<h3>
1.Attackers can use SQL Injections to find the credentials of other users in the database. They can then impersonate these users. The impersonated user may be a database administrator with all database privileges.
<br>
2.SQL lets you select and output data from the database. An SQL Injection vulnerability could allow the attacker to gain complete access to all data in a database server.
<br>
3.SQL also lets you alter data in a database and add new data. For example, in a financial application, an attacker could use SQL Injection to alter balances, void transactions, or transfer money to their account.
<br>
4.You can use SQL to delete records from a database, even drop tables. Even if the administrator makes database backups, deletion of data could affect application availability until the database is restored. Also, backups may not cover the most recent data.
<br>
5.In some database servers, you can access the operating system using the database server. This may be intentional or accidental. In such case, an attacker could use an SQL Injection as the initial vector and then attack the internal network behind a firewall.
</h3>

<h2>What is the best way to stop a DDoS attack?</h2>

<h3>
Step 1: Train and maintain awareness
To keep your web application safe, everyone involved in building the web application must be aware of the risks associated with SQL Injections. You should provide suitable security training to all your developers, QA staff, DevOps, and SysAdmins. You can start by referring them to this page.
<br>
Step 2: Don’t trust any user input
Treat all user input as untrusted. Any user input that is used in an SQL query introduces a risk of an SQL Injection. Treat input from authenticated and/or internal users the same way that you treat public input.
<br>
Step 3: Use whitelists, not blacklists
Don’t filter user input based on blacklists. A clever attacker will almost always find a way to circumvent your blacklist. If possible, verify and filter user input using strict whitelists only.
<br>
Step 4: Adopt the latest technologies
Older web development technologies don’t have SQLi protection. Use the latest version of the development environment and language and the latest technologies associated with that environment/language. For example, in PHP use PDO instead of MySQLi.
<br>
Step 5: Employ verified mechanisms
Don’t try to build SQLi protection from scratch. Most modern development technologies can offer you mechanisms to protect against SQLi. Use such mechanisms instead of trying to reinvent the wheel. For example, use parameterized queries or stored procedures.

</h3>
</body>
<div class="container">
<br>
<a href="http://localhost/umpbcas2/pages/recommendations.php"><button class="button button5">Back</button> </a>
</div>
</html>