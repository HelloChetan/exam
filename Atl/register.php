<?php
$conn = mysqli_connect('localhost','root','','authdb');
extract($_POST);
$password = md5($password);
$q = "insert into users (username,email,password) values ('$username','$email','$password')";
$res = mysqli_query($conn,$q);
if($res){
    echo "registration success";
}
?>