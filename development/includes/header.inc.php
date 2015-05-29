<!-- Header include -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_title; ?></title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header>
	<a href="index.php"><img src="images/logo.png" alt="LULAC Logo"></a>
		<div class="heading-wrapper">
			<h1>League of United Latin American Citizens</h1>
			<h2>Southwest Washington Council #47013</h2>
		</div>
	<?php require_once "includes/nav.inc.php"; ?>
	</header>

<div class="content">
<?php
if (isset($page_heading))	echo "<h2>{$page_heading}</h2>";
 ?>