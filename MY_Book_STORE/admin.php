<?php
	$title = "Administration section";
	require_once "./template/header.php";
?>

	<form class="form-horizontal" method="post" action="admin_verify.php">
		<div class="form-group">
			<label style="color: #ffffff" for="name" class="control-label col-md-4">Name</label>
			<div class="col-md-4">
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label style="color: #ffffff" for="pass" class="control-label col-md-4">Password</label>
			<div class="col-md-4">
				<input type="password" name="pass" class="form-control">
			</div>
		</div>
		<input type="submit" name="submit" class="btn btn-success">
	</form>

<?php
	require_once "./template/footer.php";
?>