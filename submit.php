<?php
$server = "localhost";
$username = "root";
$password = "";

// Create a database connection
$con = mysqli_connect($server, $username, $password);
if ($con) {
    echo "succesfully";
} else {
    echo "not sucess";
}
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$age = $_POST['age'];
$sql = "insert into `reg`.`data`(`name`,`number`,`email`,`age`) values('$name','$number','$email','$age')";
if ($con->query($sql) == true) {
    echo "succesfully inseted";
} else {
    echo "not inserted";
}
?>