<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();
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
</head>

<body>
<div class="container-fluid" style="margin: 0px; padding: 0px;">
  <img src="images/05.jpg"  width="100%"  style="margin: 0px; padding: 0px; ">
    <!-- <h1>Nwewsafaf</h1> -->
  </div>


<!--  -->
<?php include("header.php"); ?>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="780">
  <tbody><tr>
    <td width="780">


	</td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF"><div align="center"> <br>
        <br>
        <table border="0" cellpadding="0" cellspacing="0" align="center" width="75%">
          <tbody><tr>
            <td width="18"><img src="images/boxtopleftcorner.gif" alt="" height="13" width="18"></td>
            <td background="report.php_files/boxtopBG.gif" width="734"></td>
            <td width="18"><img src="images/boxtoprightcorner.gif" alt="" height="13" width="18"></td>
          </tr>
          <tr>
            <td background="images/boxleftBG.gif"></td>
            <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="98%">
                <tbody><tr>
                  <td colspan="2" height="4"></td>
                </tr>
                <tr>
                  <td height="18"><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
                      <tbody>
                        <tr valign="top">
                          <td colspan="2" class="headtext13" height="25" valign="middle">Reports</td>
                          <td height="25" colspan="3">&nbsp;</td>
                          </tr>
                        <tr valign="top">
                          <td>&nbsp;</td>
                          <td class="smallpoints" valign="middle" width="41%">&nbsp;</td>
                          <td width="12%">&nbsp;</td>
                          <td colspan="2" class="smallpoints" valign="middle">&nbsp;</td>
                        </tr>
                        <tr valign="top">
                          <td width="11%"><div align="center"><span class="style110"><img src="images/12258.gif" border="0" height="32" width="30"></span> </div></td>
                          <td class="smallpoints" valign="middle"><a href="datewise-list.php" class="link">Datewise Report </a></td>
                          
                          </tr>
                        <tr valign="top">
                          <td><div align="center"></div></td>
                          <td>&nbsp;</td>
                          </tr>
                        <tr valign="top">
                          <td><div align="center"><span class="style110"><img src="images/12258.gif" border="0" height="32" width="30"></span></div></td>
                          <td class="smallpoints" valign="middle"><a href="delivered-list.php" class="link">Delivered Report </a></td>
                          </tr>
						  <?php 
						  if(isset($_SESSION['user_type'])&&$_SESSION['user_type']=='admin-role')
						  
				
						  {
							  
							  ?>
						   <td>&nbsp;</td>
						  
						  <tr valign="top">
                          <td><div align="center"><span class="style110"><img src="images/12258.gif" border="0" height="32" width="30"></span></div></td>
                          <td class="smallpoints" valign="middle"><a href="deleted-list.php" class="link">Deleted Report </a></td>
                          </tr>
						  
						  <?php }  ?>	 
						  
						  
						  
						  
                      </tbody>
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
            </tbody></table></td>
            <td background="report.php_files/boxrightBG.gif"></td>
          </tr>
          <tr>
            <td width="18"><img src="images/boxbtmleftcorner.gif" alt="" height="12" width="18"></td>
            <td background="report.php_files/boxbtmBG.gif" width="734"></td>
            <td width="18"><img src="images/boxbtmrightcorner.gif" alt="" height="12" width="18"></td>
          </tr>
        </tbody></table>
        <br>
          <br>
          <br>      
          <br>
    </div></td>
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