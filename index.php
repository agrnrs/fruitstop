<?php 

include 'inc/head.php';
?>
<style>

</style>
</head>

<body>
<pre>
<?php
var_dump($_POST);
// display info from post
?>
</pre>


<?php 
include 'inc/header.php'; // get header

$output = "";

if(isset($_POST) && !empty($_POST)){
	$sql = "SELECT * FROM fs_users WHERE username=:user_name AND password=:user_password LIMIT 1";
	$row = [
	':user_name' => $_POST['username'],
	':user_password' => md5($_POST['password'])
	];
	
	$res = $conn->prepare($sql);
	$res->execute($row);
	if($res->fetchColumn() < 1)
	{
		//$output="Wrong login";
		//header('location: index.php');
	} else {
		//$output = "Användare ok";
		$_SESSION['login'] = true;
		header('location: products.php');
		};
};



//logout functionality
if (empty($_POST['do'])){
	echo ("Nothing in post.");
} else if ($_POST['do'] == 'logout'){
	unset($_SESSION['login']);
	session_destroy(); 
	header('location: index.php');
};


include 'inc/footer.php';
?>
</body>

