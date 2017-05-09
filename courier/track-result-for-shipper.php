<?php
session_start();
require_once('database.php');
require_once('library.php');

$cons= $_POST['Consignment'];

$sql = "SELECT *
		FROM tbl_courier
		WHERE cons_no = '$cons'";





$result = dbQuery($sql);
$no = dbNumRows($result);





if($no == 1){
while($data = dbFetchAssoc($result)) {
extract($data);
?>

</head>

<body>
<?php include("mainpage.php"); ?>
  <!-- shuyerga -->
    <table border="0" cellpadding="0" cellspacing="0" align="center" width="900">

  
  <br>

  <table border="0" align="center" width="100%">

    <tbody><tr>

      <td align="center"><strong>RESULT </strong></td>

    </tr>

  </tbody></table>



  <br>

  <table bgcolor="#EEEEEE" cellpadding="0" cellspacing="0" align="center" width="40%"> 

    

    <tbody><tr>

      <td align="right"><div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <td ><div align="left" class="style3">Shipper Name : </div></td>

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

      <td >
    <div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <td width="55%" class="style3"><div align="left">Receiver Name : </div></td>

            <td width="45%" class="style3"><div align="left"><?php echo $rev_name; ?></div></td>

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

      <td  align="right">&nbsp;</td>

      <td >&nbsp;</td>
    </tr>

    <tr> 

      <td align="right" width="336">Consignment No  : </td> 

      <td width="394"><font color="#FF0000"><?php echo $cons_no; ?></font>&nbsp;</td> 
    </tr> 

    <tr>

      <td align="right">Ship Type  :</td>

      <td ><?php echo $type; ?>&nbsp;</td>
    </tr>

    <tr>

      <td  align="right">Weight :</td>

      <td ><?php echo $weight; ?>&nbsp;kg</td>
    </tr>

    

      <td class="style3" bgcolor="#F3F3F3" align="right">Booking Mode :</td>

      <td ><?php echo $book_mode; ?>&nbsp;</td>
    </tr>

    

      <td class="style3" bgcolor="#F3F3F3" align="right">Mode : </td>

      <td ><?php echo $mode; ?></td>
    </tr> 

    <tr> 

      <td align="right">Pickup Date :</td> 

      <td >

        <?php echo $pick_date; ?>
         </td> 
    </tr> 

    <tr> 

      <td align="right">Status :</td> 

      <td >&nbsp;<?php echo $status; ?></td> 
    </tr> 

     

    <tr> 

      <td  align="right" valign="top">Comments :</td> 

      <td >&nbsp;<?php echo $comments; ?></td> 
    </tr> 
  </tbody></table> 

  <p>&nbsp;</p></td>

  </tr>

  <tr>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br>
   

</tbody></table>





</body></html>
<?php }//while
}//if
else {

?>
<title>Courier Management System</title>
</head>

<body>

<?php 
include("mainpage.php"); ?>

<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">

  

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 

    

    <tbody><tr>

      <td align="right"><div align="center">

  <span class="Partext1"><br>

   
   </span>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">

     <tbody><tr>
<h3 style="font-family:Verdana; font-size:12px;">Consignment Number <font color="#FF0000"><?php echo $cons; ?></font> not found. Please verify the Number.<br/>
<a href="track-status-for-shipper.php">Go Back</a> to Search Again.</h3>
       </tr>

        </tbody></table>


</td>

  </tr>

  
</tbody></table>
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
  <br>
  <br>
  <br>
  <br>
  <br>
  <tr >


    

  </tr>

  


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


</body></html>


  <?php 
            }
          ?>
          <?php include("footer.php"); ?>