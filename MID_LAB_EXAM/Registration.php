<?php 
    if(isset($_POST['signup'])){
     $Name = $_POST['name'];
     $Id = $_POST['id'];
     $Password = $_POST['password'];
    
        if(empty($_POST['id']) || empty($_POST['password']) || empty($_POST['name']) || empty($_POST['usertype']) ){
            echo"Plaese fill out all the field";
        }
        else{
            //validation check

            if ($temp_id[0]>0) {
                echo"Please select year before 2015.";
            }
            else{

                $id= $_POST['id'];
                $password=$_POST['password'];
                $repass=$_POST['repass'];
                $name = $_POST['name'];
                $type=$_POST['type'];

                $user=['id'=> $id, 'password'=> $password, 'name' => $name, 'type' => $type ];
        ?>