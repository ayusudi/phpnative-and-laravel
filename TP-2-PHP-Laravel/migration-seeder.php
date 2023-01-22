<?php 
// Migration to Database TP2-PHPNATIVE 
try {
  $conn = new PDO("mysql:host=127.0.0.1;dbname=TP2PHPNATIVE", "root", "");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $queryDDLRoles = "CREATE TABLE IF NOT EXISTS Roles (  
    id int AUTO_INCREMENT PRIMARY KEY,
    roleName VARCHAR(25) NOT NULL UNIQUE,   
    description TEXT NOT NULL
  );";
  $queryDDLUsers = "CREATE TABLE IF NOT EXISTS Users (
    id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(120) NOT NULL,
    phoneNumber VARCHAR(14) NOT NULL UNIQUE,
    email VARCHAR(64) NOT NULL UNIQUE,
    nik VARCHAR(16) NOT NULL UNIQUE,
    dateOfBirth DATE NOT NULL,
    RoleId INT NOT NULL,
    password VARCHAR(255) NOT NULL,
    remember_token VARCHAR(255),
    FOREIGN KEY (RoleId) REFERENCES Roles(id)
  );";
  $seederRoles = "INSERT INTO Roles (roleName, description)
  VALUE ('Admin', 'Able to modify any data in TP2 database'),
  ('Staff', 'Able to read and create data in TP2 database'),
  ('Staff Intern', 'Only able to read data in TP2 database');";
  $seederUsers = "INSERT INTO Users (name, phoneNumber, email, nik, dateOfBirth, password, RoleId)
  VALUE 
  ('Ayu Sudi', '+6212345678901', 'ayusudi.abc@companymail.com', '1234567890123456', '1998-06-24', 'qwerty124', 1),
  ('John Doe', '+6212345678902', 'johndoe@companymail.com', '1234567890123455', '1997-01-20', 'qwerty123', 2),
  ('Foo Bar', '+6212345678903', 'bar.foo@companymail.com', '1234567890123454', '1999-05-01', 'qwerty122', 2),
  ('Jane Doe', '+6212345678904', 'doejane@companymail.com', '1234567890123453', '2002-08-15', 'qwerty121', 3),
  ('Magoo Mixu', '+6212345678905', 'mmixu@companymail.com', '1234567890123452', '2003-10-28', 'qwerty120', 3);";

  $statement = $conn->prepare('SHOW TABLES;');
  $statement->execute(); 
  $listTable = $statement->fetchAll(PDO::FETCH_ASSOC);

  // Conditional for run migration & seeder
  if ( !count($listTable) ){
    $conn->exec($queryDDLRoles);
    $conn->exec($queryDDLUsers);
    $conn->exec($seederRoles);
    $conn->exec($seederUsers);
    echo "Table Roles & Users successfully created and inserted data";
  }

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>