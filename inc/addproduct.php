<?php

if(isset($_POST)&& !empty($_POST)){
	$sql = "INSERT INTO fs_products (product, type, kgstock, price)
		VALUES(:product, :type, :kgstock, :price)";
	$results = $conn->prepare($sql);
	$res = $results->execute(
	array(
		':product' => $_POST['product'],
		':type' => $_POST['type'],
		':kgstock' => $_POST['kgstock'],
		':price' => $_POST['price']
		)
	);
	//if($res){$output = "Update received";} else {$output = "Error.";}
};


/*
// old query

*/
?>

