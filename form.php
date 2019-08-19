<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>From login</title>
</head>
<>
<?php
$server="localhost";
$userDB="root";
$passDB="";
$dbName="tandat";

$conn=new mysqli($server,$userDB,$passDB,$dbName);
if ($conn->connect_errno){
die("Connect Error");
}
$insert_sql="INSETR INTO USER (username,email,password) VALUES('abc zyx','asdhg@uasud','111132323')";
$conn->query($insert_sql);
?>

</body>
</html>