<?php

if(isset($_POST)&& !empty($_POST)){
	$sql = "INSERT INTO fs_products (product, type)
		VALUES(:product, :type)";
	$results = $conn->prepare($sql);
	$res = $results->execute(
	array(
		':product' => $_POST['product'],
		':type' => $_POST['type']
		)
	);
	//if($res){$output = "Update received";} else {$output = "Error.";}
};


/*
// old query

*/
?>

