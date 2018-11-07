<?php

$q = "SELECT * FROM fs_products INNER JOIN fs_types ON fs_products.type = fs_types.type_id ORDER BY type ASC";
	// ... WHERE //for specifying type in categorization function which doesn't currently matter
$count = $conn->query($q);


$typelist = array();
$prodlist = array();
$ididlist = array();

	//get the data
while ($row = $count->fetch(PDO::FETCH_ASSOC)){
		$type = $row['typename'];
		$prod = $row['product'];
		$idid = $row['id'];
		//add price and mby stock
		
		//$course = $row['price']; //not yet added, deal w that later
	//echo $fname . $lname . $course . "<br>";
		//sort the data
	array_push($typelist, $type);
	array_push($prodlist, $prod);
	array_push($ididlist, $idid);
		
};

?>
