<?php
session_start();
include 'includes/db.php';

if(isset($_POST['login'])){
	$sql = "SELECT password FROM cms WHERE password = '".$_POST['password']."' ";

	$result = $conn->query($sql);

			if($result->num_rows > 0 )
			{
				$_SESSION['loggedIn'] = true;
				header("location:cms.php");
			}
			else{
				header("Refresh:0");
			}
}
