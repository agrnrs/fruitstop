<?php

if(isset($_POST)&& !empty($_POST)){
	$sql = "UPDATE fs_products
SET id=:id, product=:product, type=:type, kgstock=:kgstock, price=:price
WHERE id = :id";
	$results = $conn->prepare($sql);
	$res = $results->execute(
	array(
		':id' => $_POST['id'],
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
"INSERT INTO fs_products (id, product, type)
		VALUES(:id, :product, :type)"
*/
?>

