<?php
  $servername = "localhost:3310";
  $username = "root";
  $password = "";
  $dbname = "foodordermanagement";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // sql to create table
  $sql = "CREATE TABLE orders (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    phone VARCHAR(12) NOT NULL,
    streetaddress VARCHAR(30) NOT NULL,
    city VARCHAR(30) NOT NULL,
    zip INT(5) NOT NULL,
    items JSON,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

  if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  $conn->close();
?> 