<?php 

include 'inc/head.php';
?>
<style>

</style>
</head>


<body>
<?php 
include 'inc/header.php';
?>

<div class="h2 text-center">Products</div>
<!-- ^ should cange based on page -->


<!-- 
content
needs a header for content.

divide list into grid divs somehow
https://getbootstrap.com/docs/4.0/layout/grid/
-->
<!--
<div class="d-flex p-2">
	<ul class="list-group">
		<li class="list-group-item-info list-group-item">Cras justo odio</li>
		<li class="list-group-item">Cras justo odio</li>
		<li class="list-group-item">Fruit: Watermelon</li>
		<li class="list-group-item">Morbi leo risus</li>
		<li class="list-group-item">Porta ac consectetur ac</li>
		<li class="list-group-item">Vestibulum at eros</li>
	</ul>
</div>
-->
<!-- fruit tag could be optional and only show in all products view -->
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


<div class="container">
<div class="row">
  <div class="col-sm-4"><table class="table table-sm">
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
  <div class="col-sm-4"><table class="table table-sm">
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
  <div class="col-sm-4"><table class="table table-sm">
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
</div>
</div>
<!--
<div class="container">
  <div class="row">
    <div class="col">
      Fruit
    </div>
    <div class="col-6">
      Bacon
    </div>
    <div class="col">
      Free!
    </div>
  </div>
</div>
-->
<!-- stuff to insert into col-sm -->


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