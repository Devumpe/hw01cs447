<?php

	session_start();

	include("connect.php");
	 $_REQUEST['nameproduct'];
	 $_REQUEST['description'];
 	$_REQUEST['price'];
 	$_REQUEST['countproduct'];
	$sql = "INSERT INTO `lpstore`(`nameproduct`, `description`, `price`, `countproduct`) VALUES ('".$_REQUEST['nameproduct']."', '".$_REQUEST['description']."' ,'".$_REQUEST['price']."','".$_REQUEST['countproduct']."');";
	

	if(!$conn->query($sql)) {

		echo "<script>
				alert('Please check !!');
			</script>";

	} else {

		header("location: main.php");

	}

?>