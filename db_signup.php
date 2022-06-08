<?php
include('db_connection.php');
if(isset($_POST['submit'])){
    $email =$_POST['email'];
    $phoneNumber =$_POST['phoneNumber'];
    $password =$_POST['password'];
    $password2=$_POST['password2'];
if($password==$password2){
    $password=md5($password);

}

$sql = "INSERT INTO fashion(`email`, `phoneNumber`,`password`) VAlUES('$email', '$phoneNumber' , '$password')";
   
$query = mysqli_query($conn, $sql);
if($query){
    header("location:./login.php");
}else{
    header("location:signUp.php");

}
}
?>