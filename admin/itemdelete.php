<?php
$id = $_GET['id'];
//Connection

$con = mysqli_connect("localhost","root","","login_sample_db");
mysqli_query($con,"delete from item where item_id = '$id'");

//Afeter call to user view
header("location:itemview.php");
?>