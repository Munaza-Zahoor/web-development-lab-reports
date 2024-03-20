<?php
$serverName = 'localhost';
$username = 'root';
$password = '';
$database = 'student';
$conn = new mysqli($serverName,$username,$password,$database);
if($conn->connect_error)
{
    die("connection Failled : ".$conn->connect_error);
}
// getting data from form
$name = $_POST["name"];
$rollNo = $_POST["roll_number"];
$subject = $_POST["subject"];
$marks = $_POST["marks"];
 
//  Sql to get user data 

$sql = "INSERT into SE (name,roll_number,subject,marks) VALUES ('$name','$rollNo','$subject','$marks')";

if($conn->query($sql) == true) {
    echo "new record added succesfully";
}
else {
        echo "erorr";
}
?>