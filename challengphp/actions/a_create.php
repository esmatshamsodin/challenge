<?php

 

require_once 'db_connect.php';

 

if($_POST) {

    $id = $_POST['id'];

    $capacity = $_POST['capacity'];

    $reservation = $_POST['reservation'];

 

    $sql = "INSERT INTO tables (id, capacity, reservation) VALUES ('$id', '$capacity', '$reservation')";

    if($connect->query($sql) === TRUE) {

        echo "<p>New Record Successfully Created</p>";

        echo "<a href='../create.php'><button type='button'>Back</button></a>";

        echo "<a href='../home1.php'><button type='button'>Home</button></a>";

    } else {

        echo "Error " . $sql . ' ' . $connect->connect_error;

    }

 

    $connect->close();

}

 

?>