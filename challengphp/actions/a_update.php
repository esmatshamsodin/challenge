<?php

 

require_once 'db_connect.php';

 

if($_POST) {

    $id = $_POST['id'];

    $capacity = $_POST['capacity'];

    $reservation = $_POST['reservation'];

 

    $id = $_POST['id'];

 

    $sql = "UPDATE tables SET capacity = '$capacity', reservation = '$reservation' WHERE id = {$id}";

    if($connect->query($sql) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='../update.php?id=".$id."'><button type='button'>Back</button></a>";

        echo "<a href='../index.php'><button type='button'>Home</button></a>";

    } else {

        echo "Erorr while updating record : ". $connect->error;

    }

 

    $connect->close();

 

}

 

?>