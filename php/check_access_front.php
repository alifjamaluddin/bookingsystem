<?php

if (!isset($_SESSION)) {
  session_start();
}

if(isset($_SESSION['userid'])&&isset($_SESSION['role'])){
	switch($_SESSION['role']){
		case "user": 
			echo "<script>window.location='./user';</script>";
			// header("Location: ./user"); 
			break;
		case "admin": 
			echo "<script>window.location='./admin';</script>";
			// header("Location: ./admin"); 
			break;
	}
}

?> 