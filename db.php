<?php
$db = mysqli_connect("localhost","root","","crud_operation");
if($db){
   //echo "connected successfully";
}
else{
   die("mysqli connection failed" . mysqli_error($db));
}
?>