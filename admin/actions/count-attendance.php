<?php

$servername="localhost";
$uname="root";
$pass="zawadi2024";
$db="fitgym-db";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM attendance";
                $query = $conn->query($sql);

                echo "$query->num_rows";
?>