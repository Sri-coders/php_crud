<?php

$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","tt");
$query="delete from student where id='$id'";
if(mysqli_query($con,$query));

?>