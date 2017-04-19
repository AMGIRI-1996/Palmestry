<?php
require_once('connect_db.php');
session_start();
$_SESSION['topic']="Suggetion Form";
if(isset($_POST['suggestion'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$type = $_POST['group1'];
	$branch = $_POST['branch'];
	$roll = $_POST['roll'];
	$department = $_POST['department'];
	$designation = $_POST['designation'];
	$suggestion = $_POST['suggestion'];
	$query="INSERT INTO `suggetion`( `name`, `email`, `phone`, `type`, `branch`, `roll`, `department`, `designation`, `suggestion`) VALUES ('$name','$email','$phone','$type','$branch','$roll','$department','$designation','$suggestion')";
	if($type == 'student'){
		//echo $query;
		
		if(mysqli_query($mysqli,$query)){
			$_SESSION['msg']="Submitted Successfully!!!";
		}else{
			$_SESSION['msg']="Please Try Again(Error Occured)";
		}
		
	}else if($type == 'faculty'){
		//echo $query;
		if(mysqli_query($mysqli,$query)){
			$_SESSION['msg']="Submitted Successfully!!!";
		}else{
			$_SESSION['msg']="Please Try Again(Error Occured)";
		}
		
	}else{
		if(mysqli_query($mysqli,$query)){
			$_SESSION['msg']="Submitted Successfully!!!";
		}else{
			$_SESSION['msg']="Please Try Again(Error Occured)";
		}
	}
	header('Location: index.php');
	
}

?>