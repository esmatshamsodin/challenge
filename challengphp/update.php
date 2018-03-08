<?php

 

require_once 'actions/db_connect.php';

 

if($_GET['id']) {

    $id = $_GET['id'];

 

    $sql = "SELECT * FROM tables WHERE id = {$id}";

    $result = $connect->query($sql);

 

    $data = $result->fetch_assoc();

 

    $connect->close();

 

?>

 

<!DOCTYPE html>

<html>

<head>

    <title>Edit User</title>

 

    <style type="text/css">

        fieldset {

            margin: auto;

            margin-top: 100px;

            width: 50%;

        }

 

        table tr th {

            padding-top: 20px;

        }

    </style>

 

</head>

<body>

 

<fieldset>

    <legend>Update user</legend>

 

    <form action="actions/a_update.php" method="post">

        <table cellspacing="0" cellpadding="0">

            <tr>

                <th>ID</th>

                <td><input type="text" name="id" placeholder="id" value="<?php echo $data['id'] ?>" /></td>

            </tr>     

            <tr>

                <th>capacity</th>

                <td><input type="text" name="capacity" placeholder="capacity" value="<?php echo $data['capacity'] ?>" /></td>

            </tr>

            <tr>

                <th>reservation</th>

                <td><input type="text" name="reservation" placeholder="0 or 1" value="<?php echo $data['reservation'] ?>" /></td>

            </tr>

            <tr>

                <input type="hidden" name="id" value="<?php echo $data['id']?>" />

                <td><button type="submit">Save Changes</button></td>

                <td><a href="home1.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

 

</body>

</html>

 

<?php

}

?>