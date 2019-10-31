<?php
include("connect.php");
$id = $_GET['id'];
mysqli_query($con,"delete from acara where id_acara ='$id'");
mysqli_query($con,"delete from detail_acara where id_acara='$id'");
?>