<?php 
session_start();

require_once('library.php');
isUser();
$rand = get_rand_id(8);

////////////////

$men=$_SESSION['user_name'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css2/mystyle1.css">
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


<!--  -->
<?php include("header.php"); ?>

	
<script type="text/javascript">
// <!-- <![CDATA[


var ds_i_date = new Date();
ds_c_month = ds_i_date.getMonth() + 1;
ds_c_year = ds_i_date.getFullYear();

// Get Element By Id
function ds_getel(id) {
	return document.getElementById(id);
}

// Get the left and the top of the element.
function ds_getleft(el) {
	var tmp = el.offsetLeft;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetLeft;
		el = el.offsetParent;
	}
	return tmp;
}
function ds_gettop(el) {
	var tmp = el.offsetTop;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetTop;
		el = el.offsetParent;
	}
	return tmp;
}

// Output Element
var ds_oe = ds_getel('ds_calclass');
// Container
var ds_ce = ds_getel('ds_conclass');

// Output Buffering
var ds_ob = ''; 
function ds_ob_clean() {
	ds_ob = '';
}
function ds_ob_flush() {
	ds_oe.innerHTML = ds_ob;
	ds_ob_clean();
}
function ds_echo(t) {
	ds_ob += t;
}

var ds_element; // Text Element...

var ds_monthnames = [
'January', 'February', 'March', 'April', 'May', 'June',
'July', 'August', 'September', 'October', 'November', 'December'
]; // You can translate it for your language.

var ds_daynames = [
'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
]; // You can translate it for your language.

// Calendar template
function ds_template_main_above(t) {
	return '<table cellpadding="3" cellspacing="1" class="ds_tbl">'
	     + '<tr>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_py();">&lt;&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_pm();">&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_hi();" colspan="3">[Close]</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_nm();">&gt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_ny();">&gt;&gt;</td>'
		 + '</tr>'
	     + '<tr>'
		 + '<td colspan="7" class="ds_head">' + t + '</td>'
		 + '</tr>'
		 + '<tr>';
}

function ds_template_day_row(t) {
	return '<td class="ds_subhead">' + t + '</td>';
	// Define width in CSS, XHTML 1.0 Strict doesn't have width property for it.
}

function ds_template_new_week() {
	return '</tr><tr>';
}

function ds_template_blank_cell(colspan) {
	return '<td colspan="' + colspan + '"></td>'
}

function ds_template_day(d, m, y) {
	return '<td class="ds_cell" onclick="ds_onclick(' + d + ',' + m + ',' + y + ')">' + d + '</td>';
	// Define width the day row.
}

function ds_template_main_below() {
	return '</tr>'
	     + '</table>';
}

// This one draws calendar...
function ds_draw_calendar(m, y) {
	// First clean the output buffer.
	ds_ob_clean();
	// Here we go, do the header
	ds_echo (ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));
	for (i = 0; i < 7; i ++) {
		ds_echo (ds_template_day_row(ds_daynames[i]));
	}
	// Make a date object.
	var ds_dc_date = new Date();
	ds_dc_date.setMonth(m - 1);
	ds_dc_date.setFullYear(y);
	ds_dc_date.setDate(1);
	if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
		days = 31;
	} else if (m == 4 || m == 6 || m == 9 || m == 11) {
		days = 30;
	} else {
		days = (y % 4 == 0) ? 29 : 28;
	}
	var first_day = ds_dc_date.getDay();
	var first_loop = 1;
	// Start the first week
	ds_echo (ds_template_new_week());
	// If sunday is not the first day of the month, make a blank cell...
	if (first_day != 0) {
		ds_echo (ds_template_blank_cell(first_day));
	}
	var j = first_day;
	for (i = 0; i < days; i ++) {
		// Today is sunday, make a new week.
		// If this sunday is the first day of the month,
		// we've made a new row for you already.
		if (j == 0 && !first_loop) {
			// New week!!
			ds_echo (ds_template_new_week());
		}
		// Make a row of that day!
		ds_echo (ds_template_day(i + 1, m, y));
		// This is not first loop anymore...
		first_loop = 0;
		// What is the next day?
		j ++;
		j %= 7;

	}
	// Do the footer
	ds_echo (ds_template_main_below());
	// And let's display..
	ds_ob_flush();
	// Scroll it into view.
	ds_ce.scrollIntoView();
}

// A function to show the calendar.
// When user click on the date, it will set the content of t.
function ds_sh(t) {
	// Set the element to set...
	ds_element = t;
	// Make a new date, and set the current month and year.
	var ds_sh_date = new Date();
	ds_c_month = ds_sh_date.getMonth() + 1;
	ds_c_year = ds_sh_date.getFullYear();
	// Draw the calendar
	ds_draw_calendar(ds_c_month, ds_c_year);
	// To change the position properly, we must show it first.
	ds_ce.style.display = '';
	// Move the calendar container!
	the_left = ds_getleft(t);
	the_top = ds_gettop(t) + t.offsetHeight;
	ds_ce.style.left = the_left + 'px';
	ds_ce.style.top = the_top + 'px';
	// Scroll it into view.
	ds_ce.scrollIntoView();
}

// Hide the calendar.
function ds_hi() {
	ds_ce.style.display = 'none';
}

// Moves to the next month...
function ds_nm() {
	// Increase the current month.
	ds_c_month ++;
	// We have passed December, let's go to the next year.
	// Increase the current year, and set the current month to January.
	if (ds_c_month > 12) {
		ds_c_month = 1; 
		ds_c_year++;
	}
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the previous month...
function ds_pm() {
	ds_c_month = ds_c_month - 1; // Can't use dash-dash here, it will make the page invalid.
	// We have passed January, let's go back to the previous year.
	// Decrease the current year, and set the current month to December.
	if (ds_c_month < 1) {
		ds_c_month = 12; 
		ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
	}
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the next year...
function ds_ny() {
	// Increase the current year.
	ds_c_year++;
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the previous year...
function ds_py() {
	// Decrease the current year.
	ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Format the date to output.
function ds_format_date(d, m, y) {
	// 2 digits month.
	m2 = '00' + m;
	m2 = m2.substr(m2.length - 2);
	// 2 digits day.
	d2 = '00' + d;
	d2 = d2.substr(d2.length - 2);
	// YYYY-MM-DD
	return d2 + '/' + m2 + '/'+ y;
}

// When the user clicks the day.
function ds_onclick(d, m, y) {
	// Hide the calendar.
	ds_hi();
	// Set the value of it, if we can.
	if (typeof(ds_element.value) != 'undefined') {
		ds_element.value = ds_format_date(d, m, y);
	// Maybe we want to set the HTML in it.
	} else if (typeof(ds_element.innerHTML) != 'undefined') {
		ds_element.innerHTML = ds_format_date(d, m, y);
	// I don't know how should we display it, just alert it to user.
	} else {
		alert (ds_format_date(d, m, y));
	}
}

function getSelected(opt)
 {
 
 	var opt=document.frmExport.opt;
            for (var intLoop = 0; intLoop < opt.length; intLoop++)
			 {
			  if (!(opt.options[intLoop].selected))
			   {
			   		alert("Select any one field!");
					return false;
               }
		    }
			return true;           
  }

// And here is the end.

// ]]> -->
</script>
 <br/>
<!-- new design -->
 <!--  -->
 <div class="container" style="background-color: #fff; border-radius: 10px;">
  <h2 align="center">Add New Shipment</h2>
  <form action="process.php?action=add-cons" method="post" name="frmShipment"   class="form-horizontal"  > 
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Shipper Name:</label>
      <div class="col-sm-10">
        <input name="Shippername"  maxlength="100" size="40" type="TEXT" class="form-control"  placeholder="Enter manager name" >
      </div>
    </div>
    <!--  -->

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Phone No:</label>
      <div class="col-sm-10">
        <input name="Shipperphone" id="Shipperphone" maxlength="13" size="40" type="TEXT" class="form-control" placeholder="Enter phone">
      </div>
    </div>
    <!--  -->
     <div class="form-group">
      <label class="control-label col-sm-2" for="name">Address:</label>
      <div class="col-sm-10">
        <textarea name="Shipperaddress" cols="27" rows="2" id="Shipperaddress"></textarea>
      </div>
    </div> 

    <!--  -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Receiver Name:</label>
      <div class="col-sm-10">
        <input name="Receivername" id="Receivername" maxlength="100" size="40" type="TEXT" class="form-control"  placeholder="Enter name" >
      </div>
    </div>
    <!--  -->

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Phone No:</label>
      <div class="col-sm-10">
        <input name="Receiverphone" id="Receiverphone" maxlength="13" size="40" type="TEXT" class="form-control" placeholder="Enter phone">
      </div>
    </div>
    <!--  -->
     <div class="form-group">
      <label class="control-label col-sm-2" for="name">Address:</label>
      <div class="col-sm-10">
        <textarea name="Receiveraddress" cols="27" rows="2" id="Receiveraddress"></textarea>
      </div>
    </div> 
    <!--  -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Consignment No:</label>
      <div class="col-sm-10">
        <input name="ConsignmentNo"  value="<?php echo strtoupper($rand); ?>" id="ConsignmentNo"  readonly="true" maxlength="13" size="40"  type="TEXT" class="form-control"   >
      </div>
    </div>
    <!--  -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Type Of Shipment:</label>
      <div class="col-sm-10">
        <select class="form-control" id="Shiptype" name="Shiptype">
                <option value="Documents" selected="selected">Documents</option>
                <option value="Parcel">Parcel</option>
                <option value="Sentiments">Sentiments</option>
            </select>
      </div>
    </div>
    <!-- weight -->
     <div class="form-group">
      <label class="control-label col-sm-2" for="name">Weight:
      </label>
      <div class="col-sm-10">
        <input id="Weight" size="10" maxlength="10" name="Weight" class="form-control" placeholder="Enter weight in kg"  >
      </div>
    </div>    
    <!--  Book mode-->

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Booking Mode:
      </label>
      <div class="col-sm-10">
        <select class="form-control" name="Bookingmode" id="Bookingmode">
                <option selected="selected" value="Paid">Paid</option>
                <option value="ToPay">ToPay</option>
                <option value="TBB">TBB</option>
            </select>
      </div>
    </div>    
    <!-- mode -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Mode:
      </label>
      <div class="col-sm-10">
        <select class="form-control" name="Mode" id="Mode">
                <option selected="selected" value="Air">Air</option>
                <option value="Road">Road</option>
                <option value="Train">Train</option>
				<option value="Sea">Sea</option>
            </select>
      </div>
    </div>    
    <!-- Dept time -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Dept Time:
      </label>
      <div class="col-sm-10">
        <input name="Depttime" id="Depttime" maxlength="50" size="20" type="TEXT" class="form-control" placeholder="Enter date"  >
      </div>
    </div>    
    <!-- destination office -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Destination Office:
      </label>
      <div class="col-sm-10">
        <input name="Destination" id="Destination" maxlength="50" size="40" type="TEXT" class="form-control" placeholder="Enter office"  >
      </div>
    </div>    
    <!-- pickup date -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">PickUp Date:
      </label>
      <div class="col-sm-10">
        <input name="Packupdate" id="Packupdate"  style="cursor: text;" onClick="ds_sh(this);" maxlength="15" type="TEXT" class="form-control" placeholder="Enter Date"  >
      </div>
    </div>    
    <!-- status -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Status:
      </label>
      <div class="col-sm-10">
        <select class="form-control" name="status" id="status">
                <option selected="selected" value="In Transit">In Transit</option>
            </select>
      </div>
    </div>    
    <!-- comments -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Comments:
      </label>
      <div class="col-sm-10">
        <textarea name="Comments" cols="40" rows="4" id="Comments"></textarea>
      </div>
    </div> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Served by :<?= $men ?></label>
      
    </div> 
    <div class="form-group" style="text-align: right; padding: 15px;">
      <input  name="Submit" type="submit" onClick="MM_validateForm('Shippername','','R','Shipperphone','','R','Receivername','','R','Receiverphone','','R','ConsignmentNo','','R','Weight','','R','','R','Qnty','','RisNum','','R','Shipperaddress','','R','Comments','','R','Weight','','RisNum','R');return document.MM_returnValue" value="Add Courier"  class="form-control btn-info" >
    </div>    






    </form>
 </div>


  <!--  -->
 <div style="height: 240px;"></div>
<?php include("footer.php"); ?>
 <!--  -->
  

</body></html>