<?php 
session_start();
include 'inc/head.php';
if (!isset($_SESSION['login'])) {
	$status ="Not logged in";
	} else if ($_SESSION['login'] == true) {
	$status = "Logged in";
	unset ($_SESSION['loginfail']);
	header("Location: products.php");
	}; // this could be done in a separate inc file instead of here AND in sessioncheck

?>
<style>
</style>
</head>

<body>


<?php 
include 'inc/header.php'; // get header

?>

<div class="h2 text-center">Fruit-stop Ab's internal product management system</div>
<div align="center" id="loginmsg"><?php
	if (empty($_POST['do'])) {
		echo "Please log in or go away";
	} else if (!isset($_SESSION['loginfail'])){
		echo "Please log in or go away";
	} else if ($_SESSION['loginfail'] == true) {
		echo "Wrong login";
	};
	?></div>
<?php
if (empty($_POST['do'])){
	//echo ("Nothing in post.");
} else if ($_POST['do'] == 'login'){
	$sql = "SELECT * FROM fs_users WHERE username=:user_name AND password=:user_password LIMIT 1";
	$row = [
	':user_name' => $_POST['username'],
	':user_password' => md5($_POST['password'])
	];
	
	$res = $conn->prepare($sql);
	$res->execute($row);
	if($res->fetchColumn() < 1)
	{
		$_SESSION['loginfail'] = true;
		//echo("Wrong login");
		//header('location: index.php');
	} else {
		$_SESSION['login'] = true;
		header('location: products.php');
		};
} else if ($_POST['do'] == 'logout'){
	unset($_SESSION['login']);
	session_destroy(); 
	//echo("LOGGING YOU OUT RIGHT NOW.");
	//header('location: index.php');
};



//logout functionality



include 'inc/footer.php';
?>
</body>

