<?php
session_start();
require_once('database.php');
require_once('library.php');

isUser();

$cons= $_POST['Consignment'];

$sql = "SELECT *
		FROM tbl_courier
		WHERE cons_no = '$cons'  AND history!='Deleted'"  ;
$result = dbQuery($sql);
$no = dbNumRows($result);
if($no == 1){
while($data = dbFetchAssoc($result)) {
extract($data);
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

<body>
<div class="container-fluid" style="margin: 0px; padding: 0px;">
	<img src="images/05.jpg"  width="100%"  style="margin: 0px; padding: 0px; ">
		<!-- <h1>Nwewsafaf</h1> -->
	</div>
	<?php include("header.php"); ?>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">

  <tbody><tr>

    
 



  <br>

  <table border="0" align="center" width="98%">

    <tbody><tr>

      <td align="center"><strong>Shipment Details</strong></td>

    </tr>

  </tbody></table>



  <br>

  <table  cellpadding="2" cellspacing="2" align="center" width="40%"> 

    

    <tbody><tr>

      <td align="right"><div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="65%">

          <tbody><tr>

            <td width="55%"><div align="left" class="style3">Shipper Name : </div></td>

            <td width="45%"><div align="left" class="style3">

              <?php echo $ship_name; ?>
            </div></td>

          </tr>

          <tr>

            <td><div align="left" class="style3">Shipper Phone : </div></td>

            <td><div align="left" class="style3">

              <?php echo $phone; ?>
            </div></td>
          </tr>

          <tr>

            <td><div align="left" class="style3">Shipper Address : </div></td>

            <td><div align="left" class="style3">
			<?php echo $s_add; ?>
			</div></td>
          </tr>
        </tbody></table>

      </div></td>

      <td class="Partext1" >
	  <div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <td width="40%" class="style3"><div align="left">Receiver Name : </div></td>

            <td width="40%" class="style3"><div align="left"><?php echo $rev_name; ?></div></td>

          </tr>

          <tr>

            <td class="style3"><div align="left">Receiver Phone : </div></td>

            <td class="style3"><div align="left">
			<?php echo $r_phone; ?>
            </div></td>
          </tr>

          <tr>

            <td class="style3"><div align="left">Receiver Address : </div></td>

            <td class="style3"><div align="left">
			<?php echo $r_add; ?>
            </div></td>
          </tr>
        </tbody></table>
      </div></td>

    </tr>

    <tr>

      <td align="right">&nbsp;</td>

      <td >&nbsp;</td>
    </tr>

    <tr> 

      <td  align="right" width="336">Consignment No  : </td> 

      <td  width="394"><font color="#FF0000"><?php echo $cons_no; ?></font>&nbsp;</td> 
    </tr> 

    <tr>

      <td  align="right">Ship Type  :</td>

      <td ><?php echo $type; ?>&nbsp;</td>
    </tr>

    <tr>

      <td  align="right">Weight :</td>

      <td ><?php echo $weight; ?>&nbsp;kg</td>
    </tr>

    

      <td  align="right">Booking Mode :</td>

      <td ><?php echo $book_mode; ?>&nbsp;</td>
    </tr>

    

      <td  align="right">Mode : </td>

      <td ><?php echo $mode; ?></td>
    </tr> 

    <tr> 

      <td  align="right">Pickup Date :</td> 

      <td >

        <?php echo $pick_date; ?>  </td> 
    </tr> 

    <tr> 

      <td align="right">Status :</td> 

      <td >&nbsp;<?php echo $status; ?></td> 
    </tr> 

     

    <tr> 

      <td align="right" valign="top">Comments :</td> 

      <td >&nbsp;<?php echo $comments; ?></td> 
    </tr> 
  </tbody></table> 

  <p>&nbsp;</p></td>

  </tr>

  <tr>

    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr><br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304">&nbsp;</td>
  </tr>
</tbody></table>
</td>

  </tr>

</tbody></table>





</body></html>
<?php }//while
}//if
else {

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
  
<style>
    
    .affix {
        top: 0;
        width: 100%;
    }

    .affix + .container-fluid {
        padding-top: 80px;
    }
    </style>
  




<title>Courier Management System</title></head>

<body>
<div class="container-fluid" style="margin: 0px; padding: 0px;">
  <img src="images/05.jpg"  width="100%"  style="margin: 0px; padding: 0px; ">
    <!-- <h1>Nwewsafaf</h1> -->
  </div>


<!--  -->
<?php include("header.php"); ?>


<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">

  <tbody><tr>

    

 

<table > 

  <tbody><tr> 

    <td > </td> 

  </tr> 

</tbody></table> 



  <br>




  <br>

  <table  align="center" width="100%"> 

    

    <tbody><tr>

      <td class="Partext1"  align="right"><div align="center">

  <span class="Partext1"><br>

   
   </span>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="100%">

     <tbody><tr>
<h3 style="font-family:Verdana; font-size:12px;">Consignment Number <font color="#FF0000"><?php echo $cons; ?></font> not found. Please verify the Number.<br/>
<a href="search-edit.php">Go Back</a> to Search Again.</h3>
       </tr>

        </tbody></table>


</td>

  </tr>

  <tr>

    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br><br>
  <br>
  <br>
  <br>
  <br>
    <td bgcolor="#2284d5" height="55" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>

  </tr>

</tbody></table>





</body></html>



<?php 
}//else
?>