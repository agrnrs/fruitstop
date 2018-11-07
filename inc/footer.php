  <!-- v to footer.php -->
  
<?php

if(!isset($_SESSION['login'])){
//add login button, link to index which is (will be) also login
// add full login form, username, passw, connect to button
?>
	<div class="d-flex fixed-bottom align-items-end justify-content-end">
		<form action="/index.php" method="post">
			<div class="form-row">
				<div class="col-md-12  text-center">
					<button type="button" id="do" name="do" value="login" class="btn btn-link alert alert-secondary">Login</button>
					<!-- <input type="hidden" id="do" name="do" value="login">  removed in case the button alone works -->
				</div>
			</div>
		</form>
	</div>
 <?php

} else {
	
	//have logout button that does this: session_destroy(); 
	//the form can contain a "do" that says logoutm, and sessionhead can contain a kickout function
	?>
	<div class="d-flex p-2 fixed-bottom align-items-end d-flex justify-content-end">
		<form action="/index.php" method="post">
			<div class="col-4 alert alert-secondary text-center">
				<button type="button" id="do" name="do" value="logout" class="btn btn-link alert alert-secondary">Logout</button>
				<!-- <input type="hidden" id="do" name="do" value="logout">  removed in case the button alone works -->
			</div>
		</form>
	</div>
<?php
};

//next: add functionality to login/out button

?>