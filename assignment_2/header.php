<?php  
  require_once 'db_connect.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cinema World</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, .link1 span, .link1');</script>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="login_page">

  <div class="user_register">
    <h3>Sign up</h3>
    <form id="register_form">
      <!-- <label for="ho"></label> -->
      <input type="text" name="log_name" placeholder="Enter User  name">
      <!-- <label></label> -->
      <input type="text" name="log_mobile" placeholder="Enter mobile number">
      <input type="text" name="log_email" placeholder="Enter User email">
      <input type="password" name="log_pass" placeholder="Enter password">
      <input type="password" name="log_cpass" placeholder="Confirm password">
      <input type="button" id="register_button" value="Sign up" style="background-color: #d72a18; border: 0;">

      
    </form>
  </div>
  <div class="user_login">
    <h3>Login</h3>
    <form id="login_form" method="post" action="login_action.php">
      <!-- <label></label> -->
      <input type="text" name="log_email" placeholder="Enter User email">
      <input type="password" name="log_pass" placeholder="Enter password">
      <input type="submit" class="adn_buttton" value="Login" style="background-color: #d72a18; border: 0;">
    </form>
  </div>
</div>

<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="#">Cinema <span>World</span></a></div>
          <ul>

            <?php  
              if(isset($_SESSION['user_status'])&&$_SESSION['user_status']==0):
            ?>
            <li class="dropdown">
              <div class="drop_btn"><a href="#">User Panel </a><i class="fa fa-caret-down"></i></div>
              <div class="dropdown-content" id="myDropdown">
                <a href="add_area.php">add_area</a>
                <a href="add_cinema.php">add_cinemas</a>
                <a href="add_movie.php">add_movie</a>
                <a href="add_screen.php">add_screen</a>
                <a href="add_time.php">add_time</a>
                <a href="add_seat.php">add_seats</a>
                <a href="asssign_movie.php">assign_movie</a>

              </div>
            </li>
            <?php  
              endif;
            ?>
            <li><a href="#">Contact Us</a></li>

            <?php  
              if(!isset($_SESSION['user_name'])):
            ?>
            <li id="login_ref"><a href="#">login</a></li>
            <?php 
              endif;
            ?>
            <?php  
              if(isset($_SESSION['user_name'])):
            ?>
              <li class="dropdown">
                <div class="drop_btn_name"><a href="#"><?php echo($_SESSION['user_name']) ?> </a><i class="fa fa-caret-down"></i></div>
                <div class="dropdown-content_name" id="myDropdown">
                  <a href="change_password.php">Change Password</a>
                  <a href="logout.php">Logout</a>
                  

                </div>
              </li>
            <?php 
              endif;
            ?>

          </ul>
        </div>
        <div class="row-2">
          <ul>
            <li class="home_button active oone" for="home"><a href="index.php">Home</a></li>
            <li class="home_button" for="Movies"><a href="#">Movies</a></li>
            <li class="home_button" for="Events"><a href="#">Events</a></li>
            <li class="home_button" for="Plays"><a href="#">Plays</a></li>
            <li class="home_button last" for="Sports"><a href="#">Sports</a></li>

          </ul>
        </div>
      </div>
      <div id="content">
      <!--   <div id="slogan">
          <div class="image png"></div>
          <div class="inside">
            <h2>We are breaking<span>All Limitations</span></h2>
            <p>Lorem ipsum dolor consectetur adipisicing elit, sed do eiusmod tempor incididunt labore etolore magna aliqua enim minim veniam quis nostrud exercitation ullamco laboris.</p>
            <div class="wrapper"><a href="#" class="link1"><span><span>Learn More</span></span></a></div>
          </div>
        </div> -->
        <div class="box box_display" style="margin-top: 2%; display: none;">
          <div class="border-right">
            <div class="border-left">
              <div class="inner">
                <h4><b>Feature</b> <span id="in_dis">Movies</span></h4>
                
                <ul class="img-box1 movies_one">
                  <li >
                    <img src="images/1page-img1.jpg" alt=""  height="200" width="200" />
                    <p>Fauctororci cursuspendrerisque </p>
                    <button >Buy Tickets</button>
                  </li>
                  <li >
                    <img src="images/1page-img1.jpg" alt=""  height="200" width="200" />
                    <p>Fauctororci cursuspendrerisque </p>
                    <button >Buy Tickets</button>
                  </li>
                  <li >
                    <img src="images/1page-img1.jpg" alt=""  height="200" width="200" />
                    <p>Fauctororci cursuspendrerisque </p>
                    <button >Buy Tickets</button>
                  </li>
                  
                  <li class="clear">&nbsp;</li>
                 </ul>
              </div>
            </div>
          </div>
        </div>