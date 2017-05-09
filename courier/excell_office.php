<?php

$conn = new mysqli('localhost','root','');
mysqli_select_db($conn,'courier_db');

$setSql="SELECT id,off_name,address,city,ph_no,office_time,contact_person FROM  tbl_offices";

$setRec = mysqli_query($conn,$setSql);

$columnHeader='';
$columnHeader="id" . "\t" . "off_name" . "\t" . "address" . "\t" . "city" . "\t" . "phone_no" . "\t" . "office_time" . "\t" . "contact_person" . "\t";
$setData='';
while($rec=mysqli_fetch_row($setRec))
{
$rowData='';
foreach($rec as $value)
{
$value='"' . $value. '"' . "\t";
$rowData .=$value;
}
$setData.=trim($rowData) . "\n";
}
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=Report.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo ucwords($columnHeader). "\n" . $setData. "\n";

?>