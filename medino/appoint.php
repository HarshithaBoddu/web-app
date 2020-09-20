<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$uname = "";
$uphone = "";
$uemail = "";
$uaddress = "";
$udoc = "";
$udate = "";
$utime = "";
$flag = false;
if(isset($_POST['name']) || isset($_POST['date'])){
$uname = $_POST["name"];
$uphone = $_POST["phone"];
$uemail = $_POST["email"];
$uaddress = $_POST["address"];
$udoc=$_POST["doctor"];
$udate=$_POST["date"];
$utime=$_POST["time"];
}
$info=json_decode(file_get_contents("appoint.json"),true);
$valid=false;
$dat=array();
foreach($info as $data)
{
if(isset($_POST["name"])){
if($data["name"]==$uname && $data["phone"]==$uphone && $data["email"]==$uemail)
{
    $valid=true;
    break;
}
else
{   $valid=false;
}
}
if(isset($_POST["date"])){
if($data["date"]==$udate && $data["time"]==$utime && $data["doctor"]==$udoc)
{   $flag = "";
    $flag = true;
    break;
}
else 
{   $flag = false;
}
}
}
if ($valid==true && $flag == false)
header("Location:http://localhost/excite/medino/alreadybooked.html");
//echo "</br>Your appointment is already booked.</br> please check your mail for the date and timimg";
else if($valid==false && $flag == true)
header("Location:http://localhost/excite/medino/slotbooked.html");
//echo " </br> This slot is already booked. </br> Try choosing some other slot.";
else
{$info = json_decode(file_get_contents("appoint.json"),true);
$user= array();
$user["name"]=$uname;
$user["phone"]=$uphone;
$user["email"]=$uemail;
$user["address"]=$uaddress;
$user["doctor"]=$udoc;
$user["date"]=$udate;
$user["time"]=$utime;
$info[]=$user; 
echo file_put_contents("appoint.json",json_encode($info));
header("Location:http://localhost/excite/medino/appointsuccess.html");
//echo "</br>Your appointment is booked successful!!";
//echo "</br>You will be notified about the timing and date of the appointment via mail";
}
?>

