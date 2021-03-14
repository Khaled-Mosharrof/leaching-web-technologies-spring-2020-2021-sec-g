<?php

	

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];
		$type     = $_POST['type'];
		
		$user = ['id'=> $id, 'password'=> $password, 'type' => $type];
		$formdata = array(
			'id'=> $_POST["id"],
			'password'=> $_POST["password"],
			'type' => $_POST['type']
			
		 );
         ?>