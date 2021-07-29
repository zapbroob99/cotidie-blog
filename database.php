<?php
$servername = "sql111.epizy.com";
$username = "epiz_29261661";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=epiz_29261661_content", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
} catch(PDOException $e) {
  echo "Connection failed!: " . $e->getMessage();
}
?> 