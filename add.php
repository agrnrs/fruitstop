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
//include 'inc/getproducts.php'; //get products
//do a get THIS PRODUCT function

//echo $tell;
//prints "editing: id" when editing an entry
?>


<div class="h2 text-center">Add product</div>



<?php
if(empty($_POST['do'])){
	//do nothing
} else if ($_POST['do'] == "add") {
	include 'inc/addproduct.php';
	echo "added ".$_POST['product'];
	//then get the corresponding entry
	//then enter edit mode
};
?>

<div class="container col-md-8">
<form action="add.php" method="post">
	<div class="form-group row">
		<label for="product" class="col-sm-2 col-form-label">Product name</label>
		<div class="col-sm-8">
			<input type="text" class="form-control-sm" id="product" name="product" value=""><br>
		</div>
	</div>
	<div class="form-group row">
		<label for="type" class="col-sm-2 col-form-label">Type</label>
		<div class="col-sm-8">
			<input type="text" class="form-control-sm" id="type" name="type" value="">
		</div>
	</div>
	<div class="form-group row">
		<input type="hidden" id="do" name="do" value="add">
		<input class="btn btn-primary" type="submit" value="Add">
	</div>
</form>

<div>1 -- Fruit<br>2 -- Vegetable<br>3 -- Berry</div>
</div>


<?php 
//end page here
include 'inc/footer.php';
?>
</body>