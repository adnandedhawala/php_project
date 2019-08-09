<?php 
  include_once 'db_connect.php'; 
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FREE SMS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/form_style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png""></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact US</a>
            </li>

            <?php  
              if(!isset($_SESSION['log_name'])):
            ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login/Signup</a>
            </li>
            <?php  
              endif;
            ?>

            <?php  
              if(isset($_SESSION['log_name'])):
            ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo("WELCOME ".$_SESSION['log_name']); ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="logout.php">Logout</a>
                <a class="dropdown-item" href="change_password.php">Change Password</a>
              </div>
            </li>
            <?php  
              endif;
            ?>

          </ul>
        </div>
      </div>
    </nav>
	<!--<div class="block-menu">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<ul class="flexy-menu orange" style="list-style: none;">
    					<li><a href="">Library</a></li>
    					<li><a href="">Group</a></li>
    					<li><a href="">Create Message</a></li>
    					<li><a href="">Add Contact</a></li>
    					<li><a href="">Send SMS</a></li>
    					<li><a href="">Group SMS</a></li>
    					<li><a href="">Sent SMS</a></li>
    				</ul>
    			</div>
    		</div>
    	</div>
    </div> -->
    <?php  
      if(isset($_SESSION['log_name'])):
    ?>
    <nav class="navbar  navbar-expand-lg navbar-dark " style="background-color: #EC8F10;padding: 0;">
      <div class="container orange">
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav list">
            <li class="nav-item ">
              <a class="nav-link" href="add_library.php">Library</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_group.php">Group</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_message.php">Create Message</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_contact.php">Add Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="send_sms.php">Send SMS</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
   <?php  
      endif;
   ?>