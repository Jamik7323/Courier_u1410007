<?php
//session_start();
require_once('database.php');
require_once('library.php');

$error = "";
if(isset($_POST['txtusername'])){
	$error = checkUser($_POST['txtusername'],$_POST['txtpassword'],$_POST['OfficeName']);
}//if

require_once('database.php');
$sql = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result = dbQuery($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/alpha.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title></title>
	<script language="javascript">
<!--
function memloginvalidate()
{
   if(document.form1.txtusername.value == "")
     {
        alert("Please enter admin UserName.");
        document.form1.txtusername.focus();
        return false;
     }
   if(document.form1.txtpassword.value == "")
     {
        alert("Please enter admin Password.");
        document.form1.txtpassword.focus();
        return false;
     }
   }

//-->
</script>
	<style>
	  
	  .affix {
	      top: 0;
	      width: 100%;
	  }

	  .affix + .container-fluid {
	      padding-top: 80px;
	  }
	  </style>
</head>
<body style="background-image: url('images/background.gif');
" >
	<div class="container-fluid" style="margin: 0px; padding: 0px;">
	<img src="images/05.jpg"  width="100%"  style="margin: 0px; padding: 0px; ">
		<!-- <h1>Nwewsafaf</h1> -->
	</div>
	<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="margin-bottom: 0px;">
	  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <!-- <a class="navbar-brand" href="index.php">Courier Management System</a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=".navbar-inverse"><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">About <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Contact Us</a></li>
      
          </ul>
        </li>
        <li><a href="track-status-for-shipper.php">Check Status</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      
      </ul>
    </div>
  </div>
	</nav>

	
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-body">
			  <h2>Login</h2>
			  <form name="form1" id="form1" method="post" onSubmit="return memloginvalidate()">
			    <div class="form-group">
			      <label for="name">Username:</label>
			      <input type="text" class="form-control" id="Username" id="txtusername" maxlength="20" placeholder="Enter Your Username" name="txtusername">
			    </div>
			    <div class="form-group">
			      <label for="pwd">Password:</label>
			      <input id="txtpassword" maxlength="20" type="password" class="form-control" placeholder="Enter password" name="txtpassword">
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" name="remember"> Remember me</label>
			    </div>
			    <label for="Office">Office</label> 
			    <select name="OfficeName" id="">
				    <?php 
						while($data = dbFetchAssoc($result)){
						?>
						<option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
						<?php 
						}
					?>
				</select>
				<font color="#FF0000" style="font-size:12px;">
					<?php echo $error; ?>
				</font>
			    <input name="Submit" class="btn btn-default" value="Login Now" type="submit" style="padding:5px 10px;font-weight:bold;">
			
			  </form>
			 
			</div>
	      </div>
	    </div>
	  </div>
	</div>
<style>
	
</style>	


</body>
</html>
