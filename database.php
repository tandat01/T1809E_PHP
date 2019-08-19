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

$sql="SELECT * FROM user";
$result=$conn->query($sql);

if ($result->num_rows>0){
    /*var_dump($result);*/
    while ($row=$result->fetch_assoc()){
        echo $row["id"]."-".$row["username"]."-".$row["email"]."-".$row["password"]."<br/>";
    }
}