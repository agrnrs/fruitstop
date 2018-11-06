<?php 
//start html and page here
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

if (empty($_POST['prodid']))
	{
		$tell = "Fel.";
	}
	else
	{
		$id = $_POST['id'];
		include 'getspecific';
		//this does sql stuf, gets data for id
		// gets $type, $prod, and $idid currently
	}
	
	
	//temp for testing:
	$id = 4;
	include 'inc/getspecific.php';
	//later get this from product list page depending on edit button pressed
	
?>




<style>

</style>
</head>


<body>
<?php 
include 'inc/header.php'; // get header
//include 'inc/getproducts.php'; //get products
//do a get THIS PRODUCT function
?>



<form>
	<div class="form-group row">
		<label for="id" class="col-sm-2 col-form-label">id</label>
		<div class="col-sm-8">
			<input readonly type="text" class="form-control-sm .form-control-plaintext" id="id" value="<?php echo $id; ?>"><br>
		</div>
		</div>
	<div class="form-group row">
		<label for="product" class="col-sm-2 col-form-label">Product name</label>
		<div class="col-sm-8">
			<input type="text" class="form-control-sm" id="product" value="<?php echo $prod; ?>"><br>
		</div>
		</div>
	<div class="form-group row">
		<label for="type" class="col-sm-2 col-form-label">Type</label>
		<div class="col-sm-8">
			<input type="text" class="form-control-sm" id="type" value="<?php echo $type; ?>">
		</div>
		</div>
	</div>
</form>
<div>1 -- Fruit<br>2 -- Vegetable<br>3 -- Berry</div>




<?php 
//end page here
include 'inc/footer.php';
?>
</body>