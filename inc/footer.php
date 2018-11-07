  <!-- v to footer.php -->
  
<?php

if(!isset($_SESSION['login'])){
//add login button, link to index which is (will be) also login
?><div class="d-flex p-2 fixed-bottom align-items-end d-flex justify-content-end">
  <div class="col-4 alert alert-secondary text-center">Login</div>
</div> <?php
} else {
	//have logout button that does this: session_destroy(); 
	?>
	<div class="d-flex p-2 fixed-bottom align-items-end d-flex justify-content-end">
  <div class="col-4 alert alert-secondary text-center">Logout</div>
</div>
<?php
};

//next: add functionality to login/out button

?>