<?php

include("database.php");   
$mysqli = new mysqli("localhost","root","","content");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Escape special characters, if any
$safe_articlecontent = $mysqli -> real_escape_string($articlecontent);
$safe_articletitle = $mysqli -> real_escape_string($articletitle);
try {  //inserts inputs to mysql
  
    $sql = "INSERT INTO article (article_topic , article_title, article_text)
    VALUES ('$articleselected', '$articletitle', '$safe_articlecontent')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
?> 