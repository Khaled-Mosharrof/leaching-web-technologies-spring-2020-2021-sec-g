<?php 
    if(isset($_POST['signup'])){
     $Name = $_POST['name'];
     $Id = $_POST['id'];
     $Password = $_POST['password'];
    
        if(empty($_POST['id']) || empty($_POST['password']) || empty($_POST['name']) || empty($_POST['usertype']) ){
            echo"Plaese fill out all the field";
        }
        ?>