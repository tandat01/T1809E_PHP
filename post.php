<?php
session_start();
////$name=$_POST["username"];
//$name=$_GET["username"];
////$pass=$_POST["password"];
//$pass=$_GET["password"];
//echo "Vua dang nhap theo thong tin <br/>";
$_SESSION["user"]=[
    "username"=>$name,
    "password"=>$pass
];

$name=$_POST["username"];
$pass=$_POST["password"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$date=$_POST["date"];

echo "name: ".$name."<br/>";
echo "pass: ".$pass.'<br/>';
echo "pass: ".$email.'<br/>';
echo "pass: ".$phone.'<br/>';
echo "pass: ".$date.'<br/>';