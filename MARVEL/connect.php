<?php
$firstname= $_POST['firstname'];
$middlename= $_POST['middlename'];
$lastname= $_POST['lastname'];
$gender= $_POST['gender'];
$email= $_POST['email'];
$country= $_POST['country'];
$phone= $_POST['phone'];
$psw= $_POST['psw'];
$repeats= $_POST['repeats'];

$conn = new mysqli('localhost','root','','marvel');
if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into registration(firstname, middlename,lastname,gender,email,country,phone,psw,repeats)
    values(?,?,?,?,?,?,?,?,?))");
    $stmt->bind_param("sssssi",$firstname, $middlename,$lastname,$gender,$email,$country,$phone,$psw,$repeats);
    $stmt->execute();
    echo"registration successfull!!";
    $stmt->close();
    $conn->close();
    
}

?>
