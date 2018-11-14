<?php 
include 'inc/sessioncheck.php';
include 'inc/head.php';
?>
<style>

</style>
</head>


<body>
<?php 
include 'inc/header.php'; // get header
if (!empty($_GET["sort"])){
	if ($_GET["sort"] == 1) {
		include 'inc/gettypes.php';
	} else if ($_GET["sort"] == 2) {
		include 'inc/getproducts.php';
	} else if ($_GET["sort"] == 3) {
		include 'inc/getstock.php';
	} else if ($_GET["sort"] == 4) {
		include 'inc/getprice.php';
	} else {
		include 'inc/getproducts.php';
	};
} else {
	// if nothing else
	include 'inc/getproducts.php';
//get products sorted by product name
};
?>

<div class="h2 text-center">Products</div>
<div class="d-flex justify-content-center"><?php
	//good place for removal or other notification
?></div>

<?php 

$listsum = count($prodlist);
$outp1 = array();


	//actual code, which works WHEN CONNECTED TO DB
for ($a=0; $a<$listsum; $a++){

		$str = '
		<tr>
      <td>'.ucfirst($typelist[$a]).'</td>
      <td>'.ucfirst($prodlist[$a]).'</td>
      <td>'.ucfirst($kgstlist[$a]).'</td>
      <td>'.ucfirst($priclist[$a]).'</td>
	  <td>
	  <div class="form-check form-check-inline">
		<form action="edit.php" method="post" style="float: left;">
			<button type="submit" class="btn btn-link" id="do" name="do" value="edit">edit</button>
			<input type="hidden" id="id" name="id" value="' . $ididlist[$a] . '">
		</form>
		&nbsp;/&nbsp;
		<form action="edit.php" method="post">
			<button type="submit" class="btn btn-link" id="do" name="do" value="remove">remove</button>
			<input type="hidden" id="id" name="id" value="' . $ididlist[$a] . '">
		</form>
		</div>
		</td>
		</tr>';
		array_push($outp1, $str);
};

//echo "<div>".count($outp1)."</div>";

?>


<div class="container">
<div class="row">
  <div class="col">
  <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Product</th>
      <th scope="col">Stock kg</th>
      <th scope="col">Price/kg</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody><!-- inserting outp1 here -->
  <?php 
	for ($a = 0; $a < count($outp1); $a++) {
		echo $outp1[$a];
	};
  ?>
  </tbody>

</table>
</div>
</div>
</div>



<!--
sample items:
*verify correct categorization
*or correct later
fruits
	bacon
	banana
	apple
	citrus
	watermelon
	coconut
vegetables
	carrot
	lettuce
	tomato
	cucumber
	onion
	rhubarb
	paprika
berries
	strawberry
	cloudberry
	blueberry
	blackberry
-->



<?php 

include 'inc/footer.php';
?>
</body>

