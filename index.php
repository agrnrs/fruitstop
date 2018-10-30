<!DOCTYPE html>
 
<head>
<meta charset="utf-8">
<title>Fruit-stop Ab</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>

</style>
</head>
  <!-- ^ to head.php -->

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<ul class="nav">
 <a class="navbar-brand" href="#">Fruit-stop Ab</a>
  <li class="nav-item">
    <a class="nav-link active" href="#">All products</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Fruits</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Vegetables</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Berries</a>
  </li>
  <!-- room for more categories, eg bacon, other -->
</ul>
</nav>
  <!-- ^ to header.php -->

<div class="h2 text-center">Products</div>



<!-- 
content
needs a header for content.

divide list into grid divs somehow
https://getbootstrap.com/docs/4.0/layout/grid/
-->

<div class="d-flex p-2">
	<ul class="list-group">
		<li class="list-group-item-info list-group-item">Cras justo odio</li>
		<li class="list-group-item">Cras justo odio</li>
		<li class="list-group-item">Dapibus ac facilisis in</li>
		<li class="list-group-item">Morbi leo risus</li>
		<li class="list-group-item">Porta ac consectetur ac</li>
		<li class="list-group-item">Vestibulum at eros</li>
	</ul>
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



  <!-- v to footer.php -->
<div class="d-flex p-2 fixed-bottom align-items-end d-flex justify-content-end">
  <div class="col-4 alert alert-secondary text-right ">Login link</div>
</div>

</body>