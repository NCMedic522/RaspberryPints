<?php
session_start();
if(!isset( $_SESSION['myusername'] )){
header("location:index.php");
}
require 'includes/config.php';
require '../includes/config_names.php';


// Get values from form 
$header_text=$_POST['header_text'];




// update data in mysql database
$sql="UPDATE profile SET header_text='$header_text'";
$result=mysql_query($sql);

// if successfully updated.
if($result){
echo "Successful";
echo "<BR>";
echo "<script>location.href='personalize.php';</script>";
}

else {
echo "ERROR";
}

?> 
