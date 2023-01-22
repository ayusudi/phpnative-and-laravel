<?php 
  function readDataByQuerySelect($querySelect){
    try {
      $pdo = new PDO("mysql:host=127.0.0.1;dbname=TP2PHPNATIVE", "root", "");
      if ($pdo) {
        // Run query to database by code 
        $statement = $pdo->prepare($querySelect);
        $statement->execute(); 
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        // Output
        return $data;
      }
    } catch (PDOException $e) {
      die($e->getMessage());
    } finally {
      if ($pdo) {
        $pdo = null;
      }
    }
  }
  $querySelect = 'SELECT u.id, u.name, u.phoneNumber, u.dateOfBirth, u.email, u.nik, 
  r.roleName, r.description FROM Users u JOIN Roles r ON r.id = u.RoleId;';
  $dataKaryawan = readDataByQuerySelect($querySelect);
?>