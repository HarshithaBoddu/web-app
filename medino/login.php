<?php
/*
$a=Array();
$a["a"]=1;
$a["b"]=2;
$a["c"]=3;
$a["d"]=4;
$marks= Array();
$marks["M1"]=95;
$marks["M2"]=98;
$marks["phy"]=91;
$avg= ($marks["M1"]+$marks["M2"]+$marks["phy"])/3;
echo $avg."<br/>";

$a["e"]=5;
echo $a["b"]*$a["c"]/$a["e"];
foreach($a as $i)
{
    echo $i;
}

$uname = $_POST["Username"];
$upass = $_POST["Password"];
echo "Username is ".$uname;
echo "<br/>";
echo "Password is ".$upass;
*/
//echo file_put_contents("test.txt","this is a sample test");
//echo file_get_contents("test.txt");
$uname=$_POST["username"];
$upass=$_POST["password"];
$info=json_decode(file_get_contents("website.json"),true);
$valid=false;
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
{ //echo "Welcome ".$uname;
  //echo "Thank you for showing interest in this Noble cause";
  //echo "You will be contacted whenever there is a requirement";
  header("Location:http://localhost/excite/medino/index.html");
}
else if($data["name"]==$uname && $data["pass"]!=$upass)
{
    echo "Your password does not match the registered username </br> Please enter a valid password!!";
}

else
{
  echo "Invalid user</br>";
  echo "you are not registered!!!</br> Please register yourself with us before logging in. ";
}
?>