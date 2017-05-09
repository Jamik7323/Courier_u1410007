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


<body>
<?php 
include("mainpage.php"); ?>
  
  
   <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr>
    <td width="900">
  
<!-- <table border="0" cellpadding="0" cellspacing="0" width="900">
<tbody><tr>

</tr>
<tr>
<td bgcolor="#FFCC00">&nbsp;</td>
</tr>
</tbody></table>
 -->  </td>
  </tr>
  
  <tr>
    <td style="background-image: url('images/background.gif');"><table border="0" cellpadding="1" cellspacing="1" align="center" width="98%">
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
           <div></div> 
              <tbody><tr>
                <td class="TrackTitle" valign="top"><div class="newtext" align="center"><strong> Track and Trace your Cargo/Courier <br>
                        </strong></div></td>
              </tr>
              <tr>
                <td class="bottom" valign="middle">&nbsp;</td>
              </tr>
              <tr >
                <td class="aalpha" valign="top"><div align="center">Enter the Consignment no </div></td>
              </tr>
              <tr >
                <td valign="top"><div align="center">
            <form action="track-result-for-shipper.php" method="post" name="form" id="form" >
            <input name="Consignment" class="gentxt" id="Consignment" maxlength="50" type="text"> 
                  <input name="Submit" type="submit" class="gentxt" onClick="MM_validateForm('Consignment','','R');return document.MM_returnValue" value="Track now">
            </form>
            <span class="gentxt">Ex: IXM53533553 </span> </div></td>
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
<div style="height: 250px;"></div>
<?php include("footer.php"); ?>

</body></html>