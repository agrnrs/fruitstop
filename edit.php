<?php 
include 'inc/sessioncheck.php';
include 'inc/head.php';
?>

<?php



//has fields
//populates fields with data from query
//has save/send/something button to update fields
//can also have a delete button here

//edit page could also be used for add, if no id is set
//might need a brand new id number then, which must be fetched from db, +1


$tell = "";

if (empty($_POST['id']))
	{
		$tell = "Fel.";
		if (empty($_POST['id'])){$tell = "no id";};
	} else if ($_POST['do'] == "edit") {
		$id = $_POST['id'];
		$tell = "Editing: " . $id;
		include 'inc/getspecific.php';
		//this does sql stuf, gets data for id
		// gets $type, $prod, and $idid currently
	} else if ($_POST['do'] == "update") {
		$id = $_POST['id'];
		$prod = $_POST['product'];
		$type = $_POST['type'];
		$tell = "Updating: " . $id;
		include 'inc/updatespecific.php';
		//this does sql stuf, gets data for id
		// gets $type, $prod, and $idid currently
	} else if ($_POST['do'] == "remove") {
		$id = $_POST['id'];
		$tell = "Removing: " . $id;
		
		include 'inc/removespecific.php';
		header("Location: products.php");
	};
	
?>
<style>

</style>
</head>


<body>



<?php 
include 'inc/header.php'; // get header
//include 'inc/getproducts.php'; //get products
//do a get THIS PRODUCT function

// echo $tell; // wrong place for it.
//prints "editing: id" when editing an entry
?>

<div class="h2 text-center">Edit products</div>
<div class="d-flex justify-content-center">Editing product with id <?php echo $id; ?></div>


<div class="container col-md-8">
<form action="edit.php" method="post">
	<div class="form-group row">
		<label for="product" class="col-sm-2 col-form-label">Product name</label>
		<div class="col-sm-2">
			<input type="text" class="form-control-sm" id="product" name="product" value="<?php echo $prod; ?>"><br>
		</div>
		</div>
	<div class="form-group row">
		<label for="type" class="col-sm-2 col-form-label">Type</label>
		<div class="col-sm-2">
			<input type="text" class="form-control-sm" id="type" name="type" value="<?php echo $type; ?>">
		</div>
		
	</div>
	<div class="form-group row">
		<input type="hidden" id="do" name="do" value="update">
		<input class="btn btn-primary" type="submit" value="Submit">
	</div>
</form>
</div>

<div class="container col-md-4">1 -- Fruit<br>2 -- Vegetable<br>3 -- Berry</div>





<?php 
//end page here
include 'inc/footer.php';
?>
</body>