<?php
require_once "../connection.php";
$id = $_GET['id'];

$sql = "DELETE FROM zone_district WHERE id=$id";
$result = mysqli_query($conn,$sql);

if($result){
    header("location: index.php");
}

?>