<?php
include ("config/config.php");
$link = "http://" . $_SERVER['SERVER_NAME'] . '/portofoliu/camin/';

?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo $link; ?>css/style.css">
    <title>ChoreTime</title>
  </head>
  <body>

	<?php
		if(empty($_SESSION['email'])){
			header('Location: register_login.php');
		}
	?>
