<?php
	// You insert the files you need with require_once.
	require_once(__DIR__ . "/view/header.php");
	require_once(__DIR__ . "/view/navigation.php");
	require_once(__DIR__ . "/controller/create-db.php");
	require_once(__DIR__ . "/view/footer.php");
	require_once(__DIR__ . "/controller/read-posts.php");

	$date = new DateTime('today');
?>

<p>	The output date is: <?php echo $date->format("m.d.y"); ?></p>