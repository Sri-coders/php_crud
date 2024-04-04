
<?php
$Servername="localhost";
$Username="root";
$Password="";
$Database="tt";

$id=$_POST['name0'];
$name=$_POST["name1"];
$password=$_POST["name2"];


$con=new mysqli("$Servername","$Username","$Password","$Database");
$query="update student set Name='$name' , Password='$password' where id='$id'";

if(!$con->connect_errno){
    $con->query($query);
    echo "updated😍😍";
}
?>  