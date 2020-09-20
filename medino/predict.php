<?php
$uage = $_POST["Age"];
$ugender = $_POST["Gender"];
$utaste = $_POST["taste"];
$ucough = $_POST["cough"];
$ufatigue = $_POST["Fatigue"];
$umeals=$_POST["Meals"];
$ufever=$_POST["Fever"];
//$upass=$_POST["password"];
$info=json_decode(file_get_contents("predict.json"),true);
$p = -1.32-(0.01*$uage)+(0.44*$ugender)+(0.98*$utaste)+(1.75*$ufever)+(0.31*$ucough)+(0.49*$ufatigue)+(0.39*$umeals);
//$p=($p*100)/1.85;
echo $p ;
echo "%";
//echo file_put_contents("predict.json",json_encode($info));
/*$valid=false;
$dat=array();
foreach($info as $data)
{
if($data["name"]==$uname && $data["pass"]==$upass)
{
$valid=true;
//$dat["email"]=$data["email"];
//$dat["phone"]=$data["phone"];
break;
}

else
$valid=false;
}
if($valid)
echo "you are already registered......please login.";
//"<br/>Your email is ".$dat["email"]."<br/>Your phone number is ".$dat["phone"];
else
//echo "Invalid user</br>";
//echo "you are not registered!!!</br> Please register yourself with us before logging in. "

$info = json_decode(file_get_contents("website.json"),true);
$user= array();
$user["name"]=$uname;
$user["pass"]=$upass;
//$user["details"]["email"]=$uemail;
$user["phone"]=$uphone;
//$address=array();
//$address[]=$uaddress;
//$user["address"]=$address;
$info[]=$user;
echo file_put_contents("website.json",json_encode($info));
echo "</br>Registration successful!!";
*/

?>

