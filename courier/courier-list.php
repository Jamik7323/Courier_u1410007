<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();
// bu yerda username oldim va product list ni  POINTER qilyapman.
$men=$_SESSION['user_name'];
  
$sql = "SELECT cid, cons_no, ship_name, rev_name, pick_date,  status
		FROM tbl_courier 
		WHERE servedBy='$men' AND status != 'Delivered'  AND history!='Deleted'
		ORDER BY cid DESC 
		LIMIT 0, 20";
		
		if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin-role') {    // agar ADMIN true, hamma product SHOWING EXCEPT DELIVERED
		$sql = "SELECT cid, cons_no, ship_name, rev_name, pick_date,  status
		FROM tbl_courier 
		WHERE  status != 'Delivered'  AND history!='Deleted'
		ORDER BY cid DESC 
		LIMIT 0, 20";
		
		};
		
		
		
$result = dbQuery($sql);		

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
	

	




<title>Admin</title>

</head>
<body>
<div class="container-fluid" style="margin: 0px; padding: 0px;">
	<img src="images/05.jpg"  width="100%"  style="margin: 0px; padding: 0px; ">
		<!-- <h1>Nwewsafaf</h1> -->
	</div>

<?php include("header.php"); ?>
<!--  -->

<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td width="900">


	</td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF">
	<script language="JavaScript">
var checkflag = "false";

function check(field) {
if (checkflag == "false")
 {
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=true;	
	}
	}
	checkflag = "true";
}
else
{
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=false;
	}
	}
	checkflag = "false";
}

}
function confirmDel(field,msg)
{
	count=0;
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll" && field[i].checked==true)
	{
	count++;
	}
	}
	
	if(count == 0)
	{
		alert("Select any one record to delete!");
		return false;
	}
	else
	{
		return confirm(msg);
	}
}
</script>
<table border="0" align="center" width="80%">
    <tbody><tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left"><div class="Partext1" align="center"><strong>Update Shipment </strong></div></td>
    </tr>
  </tbody></table>

 
  <table border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody>
	<tr>
    <td>
	</td>
    </tr>
  </tbody></table>
  <table class="blackbox" border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody><tr class="BoldRED" bgcolor="#FFFFFF" style="height:20px;">
      <td class="newtext" bgcolor="#EDEDED" width="6%"><div align="center">Edit</div></td>
      <td class="newtext" bgcolor="#EDEDED" width="10%">Consignment No </td>
      <td class="newtext" bgcolor="#EDEDED" width="7%">Shipper</td>
      <td class="newtext" bgcolor="#EDEDED" width="11%">Receiver</td>
      <td class="newtext" bgcolor="#EDEDED" width="11%">Pickup Date</td>
      <td class="newtext" bgcolor="#EDEDED" width="9%">Status</td>
    </tr>
	<?php
	
	while($data = dbFetchAssoc($result)){
	extract($data);	
	?>
      <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">
	<?php 
	if(isset($_SESSION['user_type'])&&$_SESSION['user_type']!='admin-role')
	{
	?>
      <td class="gentxt" align="center">
	  <a href="edit-courier.php?cid=<?php echo $cid; ?>">
	  <img src="images/edit_icon.gif" border="0" height="20" width="20"></a>
	  </td>
	  
	<?php } ?>
      <td class="gentxt"><?php echo $cons_no; ?></td>
      <td class="gentxt"><?php echo $ship_name; ?></td>
      <td class="gentxt"><?php echo $rev_name; ?></td>
      <td class="gentxt"><?php echo $pick_date; ?></td>
      <td class="gentxt"><?php echo $status; ?></td>
    </tr>
    <?php
	}//while
	?>
	  </tbody></table>
  <br>
	
    </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>


</body></html>