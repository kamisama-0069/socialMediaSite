<?php
import "connection.php";
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$c_password = $_POST["c_password"];
if($password = $c_password){
    die("Passwords dont match");
}
$sql = "insert into users values ($name ,$email,$password,$c_password)";
if($conn->query($sql)){
    echo "Account has been created sucessfully";
}
else{
    echo"Please recheck each column once again";
}

?>