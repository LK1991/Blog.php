<?php
// Inserting the config file.
	require_once(__DIR__ . "/../model/config.php");
?>
<!--This is calling the post file and the $path tag -->
<nav>
	<ul>
		<li><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>
	</ul>
</nav>