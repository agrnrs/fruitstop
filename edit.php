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
//nah, autoincrement handles that


$tell = "";
$tell = "No product associated";

if (empty($_POST['id'])){
		$tell = "Error, no product id associated.";
		if (empty($_POST['id'])){$tell = "no id";};
	} else if ($_POST['do'] == "edit") {
		$id = $_POST['id'];
		$tell = "Editing product with id " . $id;
		include 'inc/getspecific.php';
		//this does sql stuf, gets data for id
		// gets $type, $prod, and $idid currently
	} else if ($_POST['do'] == "update") {
		$id = $_POST['id'];
		$prod = $_POST['product'];
		$type = $_POST['type'];
		$kgst = $_POST['kgstock'];
		$pric = $_POST['price'];
		$tell = "Updated product with id " . $id;
		include 'inc/updatespecific.php';
		//this does sql stuf, gets data for id
		// gets $type, $prod, and $idid currently
	} else if ($_POST['do'] == "remove") {
		$id = $_POST['id'];
		$tell = "Removed product with id " . $id;
		include 'inc/removespecific.php';
		header("Location: products.php");
	};
	
?>
<style>

</style>
<title>Fruit-stop Ab -- Edit product</title>
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
<div class="d-flex justify-content-center" id="feedbackmessage"><?php echo $tell ?></div>


<div class="container col-md-8">
<form class="needs-validation" action="edit.php" method="post" novalidate>
	<div class="form-group row">
		<label for="product" class="col-sm-2 col-form-label">Product name</label>
		<div class="col-sm-5">
			<input type="text" class="form-control-sm" id="product" name="product" value="<?php echo $prod; ?>" required><br>
		</div>
		<div class="invalid-feedback">
			Please enter a product name
		</div>
	</div>
	<div class="form-group row">
		<label for="type" class="col-sm-2 col-form-label">Type</label>
		<div class="col-sm-5">
			<input type="number" min="1" max="3" class="form-control-sm" id="type" aria-describedby="inputGroupPrepend" name="type" value="<?php echo $type; ?>" required>
		</div>
		<div class="invalid-feedback">
			Please enter a valid product type
		</div>
	</div>
	<div class="form-group row">
		<label for="type" class="col-sm-2 col-form-label">Stock kg</label>
		<div class="col-sm-5">
			<input type="number" min="0" class="form-control-sm" id="kgstock" aria-describedby="inputGroupPrepend" name="kgstock" value="<?php echo $kgst; ?>" required>
		</div>
		<div class="invalid-feedback">
			Please enter a valid stock amount
		</div>
	</div>
	<div class="form-group row">
		<label for="type" class="col-sm-2 col-form-label">Price/kg</label>
		<div class="col-sm-5">
			<input type="number" min="0" class="form-control-sm" id="price" aria-describedby="inputGroupPrepend" name="price" value="<?php echo $pric; ?>" required>
		</div>
		<div class="invalid-feedback">
			Please enter a valid product price
		</div>
	</div>
	
	<div class="form-group row">
		<input type="hidden" id="do" name="do" value="update">
		<input type="hidden" id="id" name="id" value="<?php echo $id ?>">
		<input class="btn btn-primary" type="submit" value="Submit">
	</div>
</form>

<div>1 -- Fruit<br>2 -- Vegetable<br>3 -- Berry</div>
</div>


<?php 
//end page here
include 'inc/footer.php';
?>
</body>

<script>
// stolen directly from bootstrap's own example
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
		  document.getElementById("feedbackmessage").innerHTML = "All fields require valid inputs";
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
