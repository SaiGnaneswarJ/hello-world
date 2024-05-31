<?php
ini_set('display_errors',1);

// check date function -- returns true or false when the date in correct format or not
var_dump(checkdate(02,21,2024));
echo"<br>";
var_dump(checkdate(02,89,2024));
echo "<br><br>";
//date add -- adds some days,years,time,months to a date

$date = date_create("2024-01-09");
date_add($date,date_interval_create_from_date_string("2 months"));
echo date_format($date,"y-m-d");

echo "<br><br>";
//create from format --- it will create based n the format
$d = date_create_from_format("Y-M-d","2024-JAN-09");
echo date_format($d,"d-m-y");

echo "<br><br>";

//date create -- creating the date

$m = date_create("2024-11-09");
echo date_format($m,"d-m-y");

echo "<br><br>";
//date_date_set()-- to set the date

$date1 = date_create();
date_date_set($date1,2023,12,25);
echo date_format($date1,"y-m-d");

echo "<br><br>";
// get default time zone  ----     doubt
echo date_default_timezone_get();

echo "<br><br>";
// SET default time zone   

date_default_timezone_set("Asia/Tokyo");
echo date_default_timezone_get();
echo "<br><br>";
// date diiference

$d1 = date_create("2024-01-09");
$d2 = date_create("2024-01-12");
$diff = date_diff($d1,$d2);
echo $diff->format("%a days");

echo "<br><br>";

//date modify 

$s = date_create("2024-01-09");
date_modify($s,"- 2 days");
echo date_format($s,"d-m-y");

echo "<br><br>";
//date parse from format

print_r(date_parse_from_format("ddmmyyyy","09012024"));

echo "<br><br>";
// date parse

print_r(date_parse("2024-01-09 11:35:25"));

echo "<br><br>";
//date sub

$dat = date_create("2024-01-09");
date_sub($dat,date_interval_create_from_date_string("2 months"));
echo date_format($dat,"y-m-d");

echo "<br><br>";
// sun info

$sun = date_sun_info(strtotime("2024-01-09"),17.4065,78.4772);
foreach($sun as $key => $val)
{
    echo "$key : ".date("H.i.sa",$val)."<br>";
}


echo "<br><br>";
// time stamp get

$r = date_create();
echo date_timestamp_get($r);

echo "<br><br>";
// time stamp set

$u = date_create();
date_timestamp_set($u,"1704782358");
echo date_format($u,"d-M-Y H:m:ia");
echo "<br><br>";

//timezone get

$dat1=date_create(null,timezone_open("Asia/Kolkata"));
$tz=date_timezone_get($dat1);
echo timezone_name_get($tz);

echo "<br><br>";

// timezone set  

$dat2=date_create("2024-01-09",timezone_open("Asia/Kolkata"));
date_timezone_set($dat2,timezone_open("Asia/Kolkata"));
echo date_format($dat2,"Y-M-d h:i:sP");

echo "<br><br>";

echo (microtime());

echo "<br><br>";

print_r(localtime());

echo "<br><br>";

echo(strtotime("now"));

echo "<br><br>";

$tzone=timezone_open("Asia/Kolkata");
print_r(timezone_location_get($tzone));

echo "<br><br>";


echo timezone_version_get();







?>