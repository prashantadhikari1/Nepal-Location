<?php
session_start();
require_once "../connection.php";

$title = $_POST['title'];
$link = $_POST['link'];
$added_date = date("Y/m/d h:i:sa");

$sqlUser = "SELECT username FROM users WHERE id='$_SESSION[userid]'";
$resultUser = mysqli_query($conn,$sqlUser);
$rowUser = mysqli_fetch_array($resultUser);

$createdBy = $rowUser['username'];

$sql = "INSERT INTO social_media (title,link,addeddate,createdBy) VALUES ('$title','$link','$added_date','$createdBy')";
$result = mysqli_query($conn,$sql);
if($result){
    header("location: index.php");
}
?>