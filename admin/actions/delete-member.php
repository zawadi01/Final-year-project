<?php

session_start();
//the isset function to check username is already loged in and stored on the session that is selected
if(!isset($_SESSION['user_id'])){
header('location:../index.php');	
}

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'dbcon.php';


$qry="delete from members where user_id=$id";
$result=mysqli_query($con,$qry);

if($result){
    echo"DELETED";
    header('Location:../remove-member.php');
}else{
    echo"ERROR!!";
}
}
?>