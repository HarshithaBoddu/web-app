<?php 
$files =file_get_contents("website.json");
$files = json_decode($files);
echo "<b>LIST OF VOLUNTEERS ENROLLED</b></br></br>";
foreach($files as $file){
    echo '<li>' .$file->name. '       -       ' .$file->phone.   '</li>';
}
?>