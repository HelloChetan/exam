<?php
$conn = mysqli_connect('localhost','root','','authdb'); 
extract($_POST);
$password = md5($password);
$q = "select * from users where email='$email' and password = '$password'";
$res = mysqli_query($conn,$q);
if(mysqli_num_rows($res)==1){
    echo "login success";
}else{
    echo 'username or password is wrong';
}
?>