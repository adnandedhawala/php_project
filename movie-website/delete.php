<?php
	session_start();
	session_regenerate_id(true);
	unset($_SESSION['name']);
	session_destroy();
?>