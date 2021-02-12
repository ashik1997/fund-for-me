<?php
	session_start();
	session_destroy();
	header("Location: loginReg.php");
?>