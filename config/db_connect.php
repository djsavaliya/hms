<?php 
$conn = mysqli_connect('localhost','darshil','djsavaliya','project_st3');

	if(!$conn){
		echo 'Connection Error : '.mysqli_connect_error();
	}
 ?>