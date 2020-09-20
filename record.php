<?php
$name=$_REQUEST["name"];
    $email= $_REQUEST["email"];
    $mobile= $_REQUEST["mobile"];
    $message= $_REQUEST["message"];
$host = "localhost";
$user = "id6276537_aditya";
$password = "adiManav1";
$database = "id6276537_clients";
$conn=mysqli_connect($host,$user,$password);
$db=mysqli_select_db($conn,$database);
$sql_query1=mysqli_query($conn,"insert into record(name,email,mobile,message) values ($name,$email,$mobile,$message);");
echo("Thank you yours message has been saved!.");
?>