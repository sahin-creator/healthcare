<?php
$username = $_POST['$username'];
$Email = $_POST['$Email'];
$Password = $_POST['$Password'];


$con = mysqli_connect("localhost","root","","patient");
if(!$con){
    die("connection Error");
}
else{
   $stmt = $con->prepare("insert into admin(username,Email,Password) values(?,?,?)");
   $stmt->bind_param("ssi",$username,$Email,$Password);
   $stmt->execute();
   echo "Registration Successful....";
   $stmt->close();
   $con->close();
}
?>