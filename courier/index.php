<?php
session_start();
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
	<!-- <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/alpha.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title></title>
	 --><script language="javascript">
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
<body >
<?php include("mainpage.php") ?>
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
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=".navbar-inverse"><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">About <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="track-status-for-shipper.php">Check Status</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      
      </ul>
    </div>
  </div>
	</nav>
 -->
	<div class="container-fluid jumbotron">
		<h3>Our servicing types:</h3>
		</div>
	<div class="container-fluid jumbotron">
		<h4>1.By Road </h4>
		<br><img src="images/road.jpg"  width="250"  height="150" "></img>
	   
	  Some UK couriers offer next-day services to other European countries. FedEx offers next-day air delivery to many EU countries. Cheaper 'By-Road' options are also available, varying from 2 days delivery time (such as France), to up to a week (former USSR countries).

Large couriers often require an account to be held (and this can include daily scheduled collections). Senders are therefore primarily in the commercial/industrial sector (and not the general public); some couriers such as DHL do however allow public sending (at higher cost than regular senders).

In recent years, the increased popularity of Black Friday in the UK has placed some firms under operational stress </div>
	
	<div class="container-fluid jumbotron">
		<h4>2.By Air </h4>
		<br><img src="images/air.jpg"  width="250"  height="150" "></img>
	   International courier services in China include TNT, EMS International, DHL, FedEx and UPS. These companies provide nominal worldwide service for both inbound and outbound shipments, connecting China to countries such as the USA, Australia, United Kingdom, and New Zealand. Of the international courier services, the Dutch company TNT is considered to have the most capable local fluency and efficacy for third- and fourth- tiered cities. EMS International is a unit of China Post, and as such is not available for shipments originating outside of China.
	</div>
	<div class="container-fluid jumbotron">
	
		<h4>3.By Train </h4>
		<br><img src="images/train2.jpg"  width="250"  height="150" "></img>
	   <br>
	   The courier industry has long held an important place in United States commerce and has been involved in pivotal moments in the nation's history such as westward migration and the gold rush. Wells Fargo was founded in 1852 and rapidly became the preeminent package delivery company. The company specialised in shipping gold, packages and newspapers throughout the West, making a Wells Fargo office in every camp and settlement a necessity for commerce and connections to home. Shortly afterward, the Pony Express was established to move packages more quickly than the traditional stagecoach. It illustrated the demand for timely deliveries across the nation, a concept that continued to evolve with the railroads, automobiles and interstate highways and which has emerged into today's courier industry.
	   
	   
	   </br>
	</div>
	<br>
	<br>
	

	



	
	

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
	<?php include("footer.php"); ?>

</body>
</html>