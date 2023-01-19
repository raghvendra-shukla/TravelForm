<?php
if(isset($_POST["name"])){
$server="localhost";
$user="root";
$password="";
$db="trip";

$con=mysqli_connect($server,$user,$password,$db);

if(!$con){
    die("connection to the data base is failed due to ".mysqli_connect_error());
}
else{
    echo "succesfully connected to the database";
}

$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$other=$_POST["other"];

$sql="INSERT INTO `tripdata` (`name`, `age`, `gender`, `phone`, `email`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$phone', '$email', '$other',current_timestamp())";
// echo $sql;
if($result = mysqli_query($con,$sql)){
    echo "Successfully Saved Your Data";
}
else{
    echo "Error Cannot Able to Execute $sql".mysql_error($con);
}
mysqli_close($con);
}
?>