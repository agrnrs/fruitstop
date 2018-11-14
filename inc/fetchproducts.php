<?php 
$typelist = array();
$prodlist = array();
$kgstlist = array();
$priclist = array();
$ididlist = array();

	//get the data
while ($row = $count->fetch(PDO::FETCH_ASSOC)){
		$type = $row['typename'];
		$prod = $row['product'];
		$kgst = $row['kgstock'];
		$pric = $row['price'];
		$idid = $row['id'];
		//add price and mby stock
		
		//$course = $row['price']; //not yet added, deal w that later
	//echo $fname . $lname . $course . "<br>";
		//sort the data
	array_push($typelist, $type);
	array_push($prodlist, $prod);
	array_push($kgstlist, $kgst);
	if ($pric <= 0) {
		array_push($priclist, "free!");
		} else {
			array_push($priclist, $pric);
		};
	array_push($ididlist, $idid);
		
};
?>