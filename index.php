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
  <div class="col-sm-4">
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
</table></div>
  <div class="col-sm-4">
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
</table></div>
  <div class="col-sm-4">
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