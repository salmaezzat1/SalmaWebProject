<?php


$firstname=$_REQUEST['firstname'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];

if(isset($_POST['btn'])){


    $host="localhost";
    $user="root";
    $password="";
    $db="salma";
    
    $conn = mysqli_connect($host,$user,$password,$db);
    
    $insert = "insert into ezzat values ('$firstname','$email','$phone')";

    mysqli_query($conn,$insert);

    if($conn){
       header('location:project.php');
    }
    else{
        echo("login faild");
    }



}


?>