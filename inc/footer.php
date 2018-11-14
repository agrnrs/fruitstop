  <!-- v to footer.php -->
  
<?php

if(!isset($_SESSION['login'])){
?>
	<div class="d-flex align-items-center justify-content-center p-3">
		<form action="index.php" method="post">
			<div class="form-row">
				<!-- put fields here -->
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Username and password</span>
					</div>
					<input type="text" id="username" name="username" class="form-control">
					<input type="password" id="password" name="password" class="form-control">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="submit" id="do" name="do" value="login">Login</button>
					</div>
				</div>
			</div>
		</form>
	</div>
 <?php

} else {
	
	//have logout button that does this: session_destroy(); 
	//the form can contain a "do" that says logout, and sessionhead can contain a kickout function
	?>
	<div class="d-flex p-2 align-items-end d-flex justify-content-end">
		<div class="col-4 text-center">
			<form action="index.php" method="post">
				<button type="submit" id="do" name="do" value="logout" class="btn btn-link alert alert-secondary">Logout</button>
				<!-- <input type="hidden" id="do" name="do" value="logout">  removed in case the button alone works -->
			</form>
		</div>
		
		
	</div>
	
	


<?php
};

//next: add functionality to login/out button

?>

	<div class="p-1 mb-2 bg-light text-secondary text-center font-weight-light">Contact information web tech support issues bugs stupid function problems debug regex !logic</div>
	
