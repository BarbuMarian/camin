<?php
$abs = $_SERVER['DOCUMENT_ROOT'] . '/portofoliu/camin/';
include $abs. "/header.php";
include ("handlers/add_post_handler.php");

	$user_logged =  $_SESSION['email'];
	$pic = $_SESSION['pic'];
	$user_id = 	$_SESSION['id'];
	include ("menu.php");
?>


	<div class="container">
		<form method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label for="institute">Text</label>
				<textarea rows="4" cols="50" name="textpost"></textarea>
			</div>

			<div class="form-group">
				<label for="pic">Picture</label>
				<input type="file" class="form-control" id="picpost" name="picpost">
			</div>

			<button type="submit" class="btn btn-primary" name="post">Post</button>

		</form>
	</div>

<?php
	include ("footer.php");
?>
