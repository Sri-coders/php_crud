<?php
$Servername="localhost";
$Username="root";
$Password="";
$Database="tt";

$id=$_POST["name0"];
$name=$_POST["name1"];
$password=$_POST["name2"];

$con=new mysqli("$Servername","$Username","$Password","$Database");
$query="insert into student values ('$id','$name','$password')" ;

if(!$con->connect_errno){
    $con->query($query);
    echo "connected😍😍";
}
?>