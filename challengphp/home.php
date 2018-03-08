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
		<!--header-start-->
		<div class="container">
			<h1 class="animated fadeInDown delay-07s">Welcome To Cafe Source Code</h1>

				<?php
				 ob_start();
				 session_start();

				 require_once 'dbconnect.php';

				 // if session is not set this will redirect to login page
				 if( !isset($_SESSION['user']) ) {
				  header("Location: index.php");
				  exit;
				 }

				 // select logged-in users detail
				 $res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
				 $userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);


				  //number of free table,every table that amount of reservation is 0 would be take as a free table
				   $sql = "SELECT count(*) as 'conny' FROM `tables` WHERE reservation = 0";
    			   $result = $conn->query($sql);

    			  $data = $result->fetch_assoc();



				?>


				           <h2 id="text">Hi <?php echo $userRow['userName']; ?> It's nice to have you here.</h2>
				 

               <a class="btn btn-primary btn-md" href="logout.php?logout">Sign Out</a>
		</div>
	</header>	



  <div class="container">

    <h1>We have <?php echo $data["conny"]; ?> free Tables!</h1>
    	<h2>
    		do you want to make a reservation?

    	</h2>
    	<p>call us with 6889600112</p>
    	<p>or find us here:</p>
    	<iframe width="100%" height="500px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2659.5278999347515!2d16.357221450980955!3d48.1964469549363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d0786715af1b5%3A0xeb42ce721183b4!2sKettenbr%C3%BCckengasse+23%2C+1050+Wien!5e0!3m2!1sen!2sat!4v1520358635972" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    
  </div>

</body>
</html>
<?php ob_end_flush(); ?>