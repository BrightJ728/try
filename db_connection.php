<?php
$SERVER= "localhost";
$username="root";
$password="";
$db_name = "fashion";

$conn =mysqli_connect($SERVER,$username,$password,$db_name);
if(mysqli_connect_errno($conn)){
    return false;

}else{
    return true;
}

?>