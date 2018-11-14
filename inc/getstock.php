<?php

$q = "SELECT * FROM fs_products INNER JOIN fs_types ON fs_products.type = fs_types.type_id ORDER BY kgstock DESC";
	// ... WHERE //for specifying type in categorization function which doesn't currently matter
$count = $conn->query($q);

include 'fetchproducts.php';

?>
