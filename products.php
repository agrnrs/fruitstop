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
include 'inc/getproducts.php'; //get products
?>

<div class="h2 text-center">Products</div>
<!-- ^ should change based on page -->

<!-- type tag could be optional and only show in all products view -->

<!--
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Fruit</td>
      <td>Bacon</td>
      <td>free!</td>
    </tr>
    <tr>
      <td>Fruit</td>
      <td>Watermelon</td>
      <td>1</td>
    </tr>
  </tbody>
</table>
-->

<?php 

$listsum = count($prodlist);
$outp1 = array();
//echo "<div>".$listsum."</div>";

	
	//actual code, which works WHEN CONNECTED TO DB
for ($a=0; $a<$listsum; $a++){

		$str = '
		<tr>
      <td>'.ucfirst($typelist[$a]).'</td>
      <td>'.ucfirst($prodlist[$a]).'</td>
      <td>free!</td>
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
      <th scope="col">Price</th>
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

