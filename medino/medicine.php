<?php
/*$target_dir = "uploads/s";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

$uphone = $_POST["phone"];
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
break;
}
else
$valid=false;
}
if($valid)
echo "you are already registered......please login.";
else
$info = json_decode(file_get_contents("website.json"),true);
$user= array();
$user["name"]=$uname;
$user["pass"]=$upass;
$user["phone"]=$uphone;
$info[]=$user;
echo file_put_contents("website.json",json_encode($info));
header("location:http://localhost/excite/medino/elements.html");*/

$umediname = $_POST["mediname"];
$uquan = $_POST["quan"];
$uloc = $_POST["loc"];
$usearch = $_POST["search"];
if ( $umediname == "zincowit" && $uloc == "kukatpally" && $usearch >=2 && $usearch <= 5)
{
  if($uquan >= 1 && $uquan <= 15)
  include "pharmalist.html";
  else
  include "notavai.html";
}
else if ($umediname == "myospaz" && $uloc == "kavadiguda" && $usearch >= 2 && $usearch <= 6){
  if($uquan >= 1 && $uquan <= 10)
  include "pharmalist1.html";
  else
  include "notavai.html";
}

else if ($umediname == "isotroin"  && $uloc == "ashok nagar" && $usearch >= 2 && $usearch <= 6){
  if($uquan >= 1 && $uquan <= 30)
  include "pharmalist2.html";
  else
  include "notavai.html";

}

else if ($umediname == "limcee" && $uloc == "domalguda" && $usearch >= 2 &&$usearch <= 6)
{
  if($uquan >= 1 && $uquan <= 60)
  include "pharmalist3.html";
  else
  include "notavai.html";

}

else if ($umediname == "karval"  && $uloc == "barkatpura" && $usearch >= 1 && $usearch <= 7)
{
  if($uquan >= 1 && $uquan <= 5)
  include "pharmalist4.html";
  else
  include "notavai1.html";

}
else if ($umediname == "tazloc"&& $uloc == "khairatabad" && $usearch >= 2 && $usearch <= 8)
{
  if($uquan >= 1 && $uquan <= 15)
  include "pharmalist5.html";
  else
  include "notavai.html";

}
else if ($umediname == "metsmall"  && $uloc == "RTC X roads" && $usearch >= 1 && $usearch <= 8){
  if($uquan >= 1 && $uquan <= 20)
  include "pharmalist6.html";
  else
  include "notavai.html";
}

/*else if($uname == "living room")
include "livingroom.html";
else if($uname == "home decor")
include "homedecor.html";
else if($uname == "outdoor dining")
include "outdoor.html";
else if($uname == "study area")
include "study.html";*/
else 
echo 'Sorry!! medicines are not available in the medical shops of the specified search radius';
?>




