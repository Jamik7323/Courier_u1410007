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
</head>

<body>
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
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="track-status.php">Check Status</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      
      </ul>
    </div>
  </div>
  </nav>
    <table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td width="900">
  
<table border="0" cellpadding="0" cellspacing="0" width="900">
<tbody><tr>

</tr>
<tr>
<td bgcolor="#FFCC00">&nbsp;</td>
</tr>
</tbody></table>
  </td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF"><table border="0" cellpadding="1" cellspacing="1" align="center" width="98%">
      <tbody><tr>
        <td class="Partext1">&nbsp;</td>
      </tr>
      
      <tr>
        <td class="Partext1"><div align="center">
          <table cellpadding="4" cellspacing="0" align="center" width="70%">
<script language="javascript">
function validate()
  {
 if (form.Consignment.value == "" )
     {
      alert("Consignment No is required.");
      form.track.focus( );
      return false;
    }
  }
</script>
            
              <tbody><tr>
                <td class="TrackTitle" valign="top"><div class="newtext" align="center"><strong> Track and Trace your Cargo/Courier <br>
                        </strong></div></td>
              </tr>
              <tr>
                <td class="bottom" valign="middle">&nbsp;</td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td class="aalpha" valign="top"><div align="center">Enter the Consignment no </div></td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td valign="top"><div align="center">
            <form action="track-result-for-shipper.php" method="post" name="form" id="form" >
            <input name="Consignment" class="gentxt" id="Consignment" maxlength="50" type="text"> 
                  <input name="Submit" type="submit" class="gentxt" onClick="MM_validateForm('Consignment','','R');return document.MM_returnValue" value="Track now">
            </form>
            <span class="gentxt">Ex: IXM53533553 </span> </div></td>
                </tr>
              <tr bgcolor="EFEFEF">
                <td valign="top">&nbsp;</td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td class="TrackNormalBlue" bgcolor="#FFFFFF" valign="top">&nbsp;</td>
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
    </tbody></table>      </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304">&nbsp;</td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>
  
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
<!-- 
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td width="900">
	
<table border="0" cellpadding="0" cellspacing="0" width="900">
<tbody><tr>

</tr>
<tr>
<td bgcolor="#FFCC00">&nbsp;</td>
</tr>
</tbody></table>
	</td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF"><table border="0" cellpadding="1" cellspacing="1" align="center" width="98%">
      <tbody><tr>
        <td class="Partext1">&nbsp;</td>
      </tr>
      
      <tr>
        <td class="Partext1"><div align="center">
          <table cellpadding="4" cellspacing="0" align="center" width="70%">
<script language="javascript">
function validate()
  {
 if (form.Consignment.value == "" )
		 {
			alert("Consignment No is required.");
			form.track.focus( );
			return false;
		}
	}
</script>
            
              <tbody><tr>
                <td class="TrackTitle" valign="top"><div class="newtext" align="center"><strong> Track and Trace your Cargo/Courier <br>
                        </strong></div></td>
              </tr>
              <tr>
                <td class="bottom" valign="middle">&nbsp;</td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td class="aalpha" valign="top"><div align="center">Enter the Consignment no </div></td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td valign="top"><div align="center">
            <form action="track-result.php" method="post" name="form" id="form" >
			      <input name="Consignment" class="gentxt" id="Consignment" maxlength="50" type="text"> 
                  <input name="Submit" type="submit" class="gentxt" onClick="MM_validateForm('Consignment','','R');return document.MM_returnValue" value="Track now">
            </form>
			      <span class="gentxt">Ex: IXM53533553 </span> </div></td>
                </tr>
              <tr bgcolor="EFEFEF">
                <td valign="top">&nbsp;</td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td class="TrackNormalBlue" bgcolor="#FFFFFF" valign="top">&nbsp;</td>
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
    </tbody></table>      </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304">&nbsp;</td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table> -->


</body></html>