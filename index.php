<?php 

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
//echo "<div>".$listsum."</div>";
$intarl = $listsum / 3;
$intarl = (int)$intarl;
if ($intarl < $listsum / 3) {
	$intarl = $intarl +1;
};

	// need add id to lists
$types1 = array();
$types2 = array();
$types3 = array();
$prods1 = array();
$prods2 = array();
$prods3 = array();
$outp1 = array();
$outp2 = array();
$outp3 = array();
$idid1 = array();
$idid2 = array();
$idid3 = array();
	// ^added id columns, to be used when identifying entries to be edited
	
	/*
	//for testing, code that adds example products to list
	array_push($types1, 1);
	array_push($prods1, "Squash");
	$str = "<tr>
      <td>"."ARGH!"."</td>
      <td>aaaaaaaaaaaaaa</td>
      <td>free!</td>
    </tr>";
	array_push($outp1, $str);
	*/

	//actual code, which works WHEN CONNECTED TO DB
for ($a=0; $a<$listsum; $a++){
	if ($a < $intarl){
		array_push($types1, $typelist[$a]);
		array_push($prods1, $prodlist[$a]);
		array_push($idid1, $ididlist[$a]);
		$str = '<tr>
      <td>'.ucfirst($typelist[$a]).'</td>
      <td>'.ucfirst($prodlist[$a])." id: ".$ididlist[$a].'</td>
      <td>free!</td>
	  <td>
		<form action="edit.php" method="post">
			<button type="submit" class="btn btn-link" id="do" name="do" value="edit">edit</button>
			<input type="hidden" id="id" name="id" value="' . $ididlist[$a] . '">
		</form>
		&nbsp;/&nbsp;
		<form action="edit.php" method="post">
			<button type="submit" class="btn btn-link" id="do" name="do" value="remove">remove</button>
			<input type="hidden" id="id" name="id" value="' . $ididlist[$a] . '">
		</form>
		</td>
		</tr>';
		array_push($outp1, $str);
	} else if ($a < $intarl*2) {
		array_push($types2, $typelist[$a]);
		array_push($prods2, $prodlist[$a]);
		array_push($idid2, $ididlist[$a]);
		$str = "<tr>
      <td>".ucfirst($typelist[$a])."</td>
      <td>".ucfirst($prodlist[$a])."</td>
      <td>free!</td>
	  <td>edit&nbsp;/&nbsp;remove</td>
    </tr>";
		array_push($outp2, $str);
	} else {
		array_push($types3, $typelist[$a]);
		array_push($prods3, $prodlist[$a]);
		array_push($idid3, $ididlist[$a]);
		$str = "<tr>
      <td>".ucfirst($typelist[$a])."</td>
      <td>".ucfirst($prodlist[$a])."</td>
      <td>free!</td>
	  <td>edit&nbsp;/&nbsp;remove.</td>
    </tr>";
	//add edit and remove links, creating a query where id is $a
		array_push($outp3, $str);
	};
};

//echo "<div>".count($outp1)."</div>";

?>


<!--
get list of items
get number of items of correct type incl all
divide number by 3 to get length of longest list of three
put things in array for list 1
put things in array for list 2
put things in aray for list 3
put arrays into page

eg
get items
get 8 items
divide by three get 2 (x3) + 2
use modulo?
if rest after modulo then add +1 to intended array length
put things into array 1 until array 1 is intended array length (3)
-,,- array 2 (3)
-,,- array 3 except stop short if list runs short (except, so 2)
put into page
-->


<div class="container">
<div class="row">
  <div class="col-xl-4 col-md-6">
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
  
  
<!--old example:    <tr>
      <td>Fruit</td>
      <td>Bacon</td>
      <td>free!</td>
    </tr>
    <tr>
      <td>Fruit</td>
      <td>Watermelon</td>
      <td>1</td>
    </tr> -->
  </tbody>
</table></div>
  <div class="col-xl-4 col-md-6">
  <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
	for ($a = 0; $a < count($outp2); $a++) {
		echo $outp2[$a];
	};
  
  ?>
  </tbody>
</table></div>
  <div class="col-xl-4 col-md-6">
  <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
	for ($a = 0; $a < count($outp3); $a++) {
		echo $outp3[$a];
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

