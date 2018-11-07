<?php
session_start();
// for use in login system

if (empty($_SESSION['login'])){
	header("Location: index.php"); //redir
	$status = "Not logged in";
} else {
	$status = "Logged in";
};

/*
if(!isset($_SESSION['login'])){ //if login in session is not set
    header("Location: index.php"); //redir
};
*/

?>