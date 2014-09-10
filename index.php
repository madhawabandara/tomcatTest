<?php

    include ('connection.php');

    $connection = new createConnection(); //created a new object

    $connection->connectToDatabase(); // connected to the database

    echo "<br />"; // putting a html break

    $connection->selectDatabase();// closed connection

    echo "<br />";

    $connection->closeConnection();
?>
