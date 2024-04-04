<?php
$con=mysqli_connect("localhost","root","","tt");
if(!$con){
    die("connected Error😒");
}
$query="select * from student";
$result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
        <label>Id</label><br><br>
        <input type="id" name="name0" placeholder="Enter your id"><br><br>
        <label>NAme</label><br><br>
        <input type="text" name="name1"  placeholder="Enter your Name"><br><br>
        <label>Password</label><br><br>
        <input type="password" name="name2"  placeholder="Enter your Password"><br><br><br>
        <button>Insert</button><br><br>
    </form>

    <table border="5px" cellpadding="10px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Operations</th>
        </tr>

        <tr>
             <?php
                   while($row=mysqli_fetch_assoc($result)){
             ?>
             <td><?php   echo $row['id']   ?></td>
             <td><?php  echo $row['Name'] ?></td>
             <td><?php  echo $row['Password']  ?></td>
             <td>
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a><br><br>
                <a href="update.php"> Update</a>
             </td>
        </tr>
        <tr>
            <?php
                   }
                   ?>
        </tr>
    </table>
</body>
</html>