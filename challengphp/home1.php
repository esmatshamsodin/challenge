<?php require_once 'actions/db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>CodeReview</title>

	<link href="bootstrap.css" rel="stylesheet" type="text/css">
	<link href="font-awesome.css" rel="stylesheet" type="text/css">
	<link href="animate.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="style.css" type="text/css">
	
	<link rel="stylesheet" href="mystyle.css" type="text/css">

	



</head>
<body>
<header class="header" id="header">
</header>
		<!--header-start-->
		<div class="container">
			


 
    <title>PHP CRUD</title>

 

    <style type="text/css">

        .manageUser {

            width: 50%;

            margin: auto;

        }

 

        table {

            width: 100%;

            margin-top: 20px;

        }

 

    </style>

 

</head>

<body>

 

<div class="manageUser">

    <a href="create.php"><button type="button">Add Table</button></a>

    <table border="1" cellspacing="0" cellpadding="0">

        <thead>

            <tr>

                <th>ID</th>

                <th>Capacity</th>

                <th>Reservation</th>

            </tr>

        </thead>

        <tbody>

             

        </tbody>

    </table>

</div>

 
<?php require_once 'actions/db_connect.php'; ?>

 


 

<div class="manageUser">

    <a href="create.php"><button type="button">Add Table</button></a>

    <table border="1" cellspacing="0" cellpadding="0">

        <thead>

            <tr>

                <th>ID</th>

                <th>Capacity</th>

                <th>Reservation</th>

            </tr>

        </thead>

        <tbody>


            <?php

            $sql = "SELECT * FROM tables WHERE reservation = 0";

            $result = $connect->query($sql);

 

            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "<tr>

                        <td>".$row['id']."</td>
                        <td>".$row['capacity']."</td>

                        <td>".$row['reservation']."</td>

                        <td>

                            <a href='update.php?id=".$row['id']."'><button type='button'>Edit</button></a>

                            <a href='delete.php?id=".$row['id']."'><button type='button'>Delete</button></a>

                        </td>

                    </tr>";

                }

            } else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

            }

            ?>


             

        </tbody>

    </table>

</div>

 


</body>

</html>