<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$sql = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
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
  

  




<title>Courier Management System</title>

<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
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

<body>
<div class="container-fluid" style="margin: 0px; padding: 0px;">
  <img src="images/05.jpg"  width="100%"  style="margin: 0px; padding: 0px; ">
    <!-- <h1>Nwewsafaf</h1> -->
  </div>
<?php include("header.php"); ?>

	<br>
	<!--  -->
  <div class="container" style="background-color: #fff; border-radius: 10px;">
  <h2 align="center">Add New Office Manager</h2>
  <form action="process.php?action=add-manager" method="post" name="frmShipment"  class="form-horizontal"  > 
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Manager Name:</label>
      <div class="col-sm-10">
        <input name="ManagerName" type="TEXT" id="ManagerName" size="40"  maxlength="100" class="form-control"  placeholder="Enter manager name" >
      </div>
    </div>
    <!-- <div class="form-group">
      <label class="control-label col-sm-2" for="name">Address:</label>
      <div class="col-sm-10">
        <textarea name="OfficeAddress" cols="27" rows="2" id="OfficeAddress"></textarea>
      </div>
    </div> -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">City:</label>
      <div class="col-sm-10">
        <input name="Password" id="Password" maxlength="20" size="40" type="password" class="form-control"  placeholder="Enter city">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Address:</label>
      <div class="col-sm-10">
        <textarea name="OfficeAddress" cols="27" rows="2" id="OfficeAddress"></textarea>
      </div>
    </div> 
    <!--  -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Email Address:</label>
      <div class="col-sm-10">
        <input name="Email" id="Email" maxlength="40" size="40" type="TEXT" class="form-control" placeholder="Enter e-mail">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Phone No:</label>
      <div class="col-sm-10">
        <input name="PhoneNo" id="PhoneNo" maxlength="13" size="40" type="TEXT" class="form-control" placeholder="Enter phone">
      </div>
    </div>
    <!--  -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Office :</label>
      <div class="col-sm-10">
        <select class="form-control" name="OfficeName">
      <?php 
      while($data = dbFetchAssoc($result)){
      ?>
      <option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
      <?php 
      }//while
      ?>
      </select>
      </div>
    </div>
    <!--  -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Contact Person:</label>
      <div class="col-sm-10">
        <input name="ContactPerson" id="ContactPerson" maxlength="50" size="40" type="TEXT"  class="form-control"  placeholder="Enter contact person">
      </div>
    </div>
    <!--  -->
    <div class="form-group "  style="text-align: right; padding-right: 15px;">
      <input name="Submit" type="submit" onClick="MM_validateForm('ManagerName','','R','Password','','R','Email','','RisEmail','PhoneNo','','R','Address','','R');return document.MM_returnValue" value="Add New Office Manager" class="btn btn-info" >
    </div>
    </form>
 </div>


  <!--  -->
 <div style="height: 240px;"></div>
<?php include("footer.php"); ?>

</body></html>