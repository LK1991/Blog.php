<?php
// Inserting the config file.
	require_once(__DIR__ . "/../model/config.php");
?>
<!--This is calling the $path tag so the post file can show up-->
<nav>
	<ul>
		<li><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>
	</ul>
</nav>