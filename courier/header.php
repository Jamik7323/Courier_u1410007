<?php 

require_once('database.php');
require_once('library.php');
$men=$_SESSION['user_name'];
isUser();
?>


<body style="background-image: url('images/background.gif');">
<div class="container-fluid" style="margin: 0px; padding: 0px;">
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
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       
        <?php
		if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'admin-role') { // ADMIN ni right ni olib tashlash
		?>
		<a class="navbar-brand" >Manager :<?= $men ?></a>
		 <li class="navbar-inverse"><a href="admin.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Shipment <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="add-courier.php">Add Shipment</a></li>
			
            <li><a href="courier-list.php">List Shipment</a></li>
            
          </ul>

        </li>
        <li class="navbar-inverse"><a href="report.php">Reports</a></li>
		<li class="navbar-inverse"><a href="search-edit.php">Search Details</a></li>
      </ul>
      	<?php 
		}
		?>

		
		
		
		
		
		
		<?php
		if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin-role') {
		?>
		<a class="navbar-brand" >Admin Menu</a>
		 <li class="navbar-inverse"><a href="admin.php">Home</a></li>
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Office <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="add-office.php">Add New Office</a></li>
            <li><a href="offices-list.php">Office Details</a></li>
            <li><a href="#">Page 1-3</a></li>



          </ul>
        </li>
		
		
		<li class="navbar-inverse"><a href="report.php">Reports</a></li>
		
		
		
		
       <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manager <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="add-new-officer.php">Add New Manager</a></li>
            <li><a href="manager-list.php">Manager Details</a></li>
            <li><a href="#">Page 1-3</a></li>


            
          </ul>
        </li>
      </ul>
		<?php 
		}
		?>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="process.php? action=logOut" class="glyphicon glyphicon-log-in"> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  	


</body>
	
</body>
</html>