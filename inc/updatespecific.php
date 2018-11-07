<?php

if(isset($_POST)&& !empty($_POST)){
	$sql = "UPDATE fs_products
SET id=:id, product=:product, type=:type
WHERE id = :id";
	$results = $conn->prepare($sql);
	$res = $results->execute(
	array(
		':id' => $_POST['id'],
		':product' => $_POST['product'],
		':type' => $_POST['type']
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

