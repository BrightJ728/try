<?php
include('db_connection.php');
if(isset($_POST['submit'])){
    $email =$_POST['email'];
 
    $password =$_POST['password'];
    $password=md5($password);


$sql = "SELECT * FROM fashion where `email`='$email' AND `password` ='$password'";
   
$query = mysqli_query($conn, $sql);
$rows=mysqli_fetch_array($query);
$count=mysqli_num_rows($query);

if($count>0){
    header("location:./index.php");
}else{
    header("location:login.php");

}
}
?>