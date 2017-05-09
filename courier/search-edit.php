<?php
session_start();
require_once('database.php');
require_once('library.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	

	




<title>Courier Management System</title>
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
<body><div class="container-fluid" style="margin: 0px; padding: 0px;">
	<img src="images/05.jpg"  width="100%"  style="margin: 0px; padding: 0px; ">
		<!-- <h1>Nwewsafaf</h1> -->
	</div>
	<?php include("header.php"); ?>
<script language="javascript">
function validate()
  {
 if (document.form1.track.value == "" )
		 {
			alert("Consignment No is required.");
			document.form1.track.focus( );
			return false;
		}
	}
</script>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr>
    
  <tr>
    <td ><table border="0" cellpadding="1" cellspacing="1" align="center" width="100%">
      <tbody><tr>
        <td class="Partext1">
</td>
      </tr>
      <tr>
        <td class="Partext1"><div align="center">
          <table cellpadding="4" cellspacing="0" align="center" width="70%">
            <form action="new_track_submit.php" method="post" name="form1" id="form1" onsubmit="return validate()"></form>
              <tbody><tr>
                <td colspan="2" class="TrackTitle" valign="top"><div class="newtext" align="center"><strong> <br>
                  <br>
                  Consignment Number <br>
                              </strong></div></td>
              </tr>
              <tr>
                <td colspan="2" class="bottom" valign="middle">&nbsp;</td>
              </tr>
              
              <tr >
                <td colspan="2" class="aalpha"  height="34" valign="top"><div class="gentxt" align="center"><strong>Key in the Shipment Number to FIND the data.</strong><br>
                  <br>
                </div></td>
              </tr>
              <tr >
                
              </tr>
              <tr >
			  <form action="search-courier.php" method="post">
                <td valign="top"><div align="right">Enter Consignment number   </div></td>
                <td valign="top"><div align="left">
                  <input name="Consignment" class="gentxt" id="track" maxlength="50" type="text">
                </div></td>
              </tr>
              <tr >
                <td height="41" valign="top">&nbsp;&nbsp;</td>
                <td valign="top"><div align="left">
                  <input name="Submit" class="gentxt" value="Submit" type="submit">
                </div></td>
              </form>
			  </tr>
              <tr>
                <td >&nbsp;</td>
              </tr>
            
          </tbody></table>
        </div></td>
      </tr>
      <tr>
        <td class="Partext1">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </tbody></table></td>
  </tr>
  <tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <td><table border="0" cellpadding="0" cellspacing="0" align="left" width="100%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <tbody><tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <br><br><br>
    <td bgcolor="#0065b3" height="50" width="100%"></td>
    <td bgcolor="#0065b3" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>

<?php include("footer.php"); ?>
</body></html>