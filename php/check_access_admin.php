<?php

if (!isset($_SESSION)) {
  session_start();
}

if(!isset($_SESSION['userid'])&&!isset($_SESSION['role'])){
  echo "
    <script>
    alert('Please login');
    window.location = '../';
    </script>
  ";
}else{
	if($_SESSION['role']!="admin"){
	echo "
    <script>
    alert('You are not authorized to access this panel');
    window.location = '../';
    </script>
  ";
}
}



?> 