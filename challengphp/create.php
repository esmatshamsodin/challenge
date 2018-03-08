<!DOCTYPE html>

<html>

<head>

    <title>PHP CRUD  |  Add Table</title>

 

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

    <legend>Add Table</legend>

 

    <form action="actions/a_create.php" method="post">

        <table cellspacing="0" cellpadding="0">

            <tr>

                <th>ID</th>

                <td><input type="text" name="id" placeholder="id" /></td>

            </tr>     

            <tr>

                <th>capacity</th>

                <td><input type="text" name="capacity" placeholder="capacity" /></td>

            </tr>

            <tr>

                <th>reservation</th>

                <td><input type="text" name="reservation" placeholder="0 or 1" /></td>

            </tr>

            <tr>

                <td><button type="submit">Insert Table</button></td>

                <td><a href="home1.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

 

</body>

</html>