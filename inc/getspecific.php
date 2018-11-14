<?php

$q = "SELECT * FROM fs_products WHERE id = $id";
	// ... WHERE //for specifying type in categorization function which doesn't currently matter
$count = $conn->query($q);

	//get the data
	
while ($row = $count->fetch(PDO::FETCH_ASSOC)){
		$type = $row['type'];
		$prod = $row['product'];
		$kgst = $row['kgstock'];
		$pric = $row['price'];
		$idid = $row['id'];	
};


?>