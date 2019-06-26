<?php 
$conn = mysqli_connect('localhost', 'root', '', 'cld');
if(!$conn){
	echo "Unable to connect to database";
}