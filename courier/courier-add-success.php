<!DOCTYPE html>
<html lang="en">
<head>

  

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




<!--  -->
<?php include("admin.php"); ?>


<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
      
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
                <td class="TrackTitle" valign="top"><div class="newtext" align="center"></div></td>
              </tr>
              <tr>
                <td class="bottom" valign="middle">&nbsp;</td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td valign="top">Courier is added successfully.<br/>
				</td>
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

<?php include("footer.php"); ?>
</body></html>