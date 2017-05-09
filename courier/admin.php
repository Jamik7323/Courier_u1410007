<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title>Admin</title>

<style>
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>

<body >


<div class="container-fluid" style="margin: 0px; padding: 0px;">
  <img src="images/05.jpg"  width="100%"  style="margin: 0px; padding: 0px; ">
    <!-- <h1>Nwewsafaf</h1> -->
  </div>
  	<!-- <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="margin-bottom: 0px;">
	  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
<?php  
//if(isset($_SESSION['user_type'])&&$_SESSION['user_type']!='admin-role')


{?>
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">SHipment <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="add-courier.php">Add</a></li>
            <li><a href="courier-list.php">Update</a></li>
            <li><a href="search-edit.php">Search-Edit</a></li>

          </ul>
        </li>
<?php } ?>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Report <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="delivered-list.php">Delivered</a></li>
            <li><a href="datewise-list.php">Datewise</a></li>
           
          </ul>
        </li>
        <li>

        </ul>
      <ul class="nav navbar-nav navbar-right">

        <li>
        <a href="process.php? action=logOut" class="glyphicon glyphicon-log-in"> Logout</a></li>
      
      </ul>
    </div>

  </div>
	</nav> -->
<?php
include("header.php");
?>
<div style="height: 370px;"></div>
<?php

include("footer.php");
?>


</body>
</html>