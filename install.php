<!-- Will be using PDO (PHP Data Objects) to connect to the db. Other option is MySQLi. MySQLi will only connect to MySQL db's whereas PDO to be used to connect to any number of db's -->
<?php 

require "config.php";

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("data/init.sql");
    $connection->exec($sql);

    echo "Database and table users created successfully";
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}



