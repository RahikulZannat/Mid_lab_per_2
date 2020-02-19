<?php
	session_start();
	
		$uname =$_REQUEST['uname'];
		$email =$_REQUEST['email'];

		if(empty($uname))
		{	
			echo"not valid";
		}
		if(empty($email)&&strpos("$email","@")&&strpos("$email","."))
		{
			echo"email not valid";
		}
	
		
?>
