<?php 
require 'db.php';
session_start();

    $name=$_POST['fname'];
    $category=$_POST['category'];
    $amount=$_POST['amount'];
    $description=$_POST['description'];
    
    $sql="insert into cash(name,category,amount,description)values('$name','$category','$amount','$description')";
    
    if(!mysql_query($connect,$sql))
    
    {
    echo 'not inserted';
    }
    
    else{
    echo 'inserted'
    }
    header("refresh:2;ur=index.php");
?>