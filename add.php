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


<div class="d-flex justify-content-center" id="feedbackmessage">
<?php
if(empty($_POST['do'])){
	//do nothing
} else if ($_POST['do'] == "add") {
	include 'inc/addproduct.php';
	echo $_POST['product'] . " was added to the database as a type " . $_POST['type'] . " product, " . $_POST['kgstock'] . "kg in stock, and with a price of " . $_POST['price'] . ".";
};
?>
</div>

<div class="container col-md-8">
<form class="needs-validation" action="add.php" method="post" novalidate>
	<div class="form-group row">
		<label for="product" class="col-sm-2 col-form-label">Product name</label>
		<div class="col-sm-5">
			<input type="text" class="form-control-sm" id="product" name="product" value="" required><br>
		</div>
		<div class="invalid-feedback">
			Please enter a product name
		</div>
	</div>
	<div class="form-group row">
		<label for="type" class="col-sm-2 col-form-label">Type</label>
		<div class="col-sm-5">
			<input type="number" min="1" max="3" class="form-control-sm" id="type" aria-describedby="inputGroupPrepend" name="type" value="" required>
		</div>
		<div class="invalid-feedback">
			Please enter a valid product type
		</div>
	</div>
	<div class="form-group row">
		<label for="type" class="col-sm-2 col-form-label">Stock kg</label>
		<div class="col-sm-5">
			<input type="number" min="0" class="form-control-sm" id="kgstock" aria-describedby="inputGroupPrepend" name="kgstock" value="" required>
		</div>
		<div class="invalid-feedback">
			Please enter a valid stock amount
		</div>
	</div>
	<div class="form-group row">
		<label for="type" class="col-sm-2 col-form-label">Price/kg</label>
		<div class="col-sm-5">
			<input type="number" min="0" class="form-control-sm" id="price" aria-describedby="inputGroupPrepend" name="price" value="" required>
		</div>
		<div class="invalid-feedback">
			Please enter a valid product price
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