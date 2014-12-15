<?php
// Inserting the config file.
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ ."/../controller/login-verify.php");

	//If a user is authenticated, it will take you back to the blog page.
	if(!authenticateUser()) {
		header("Location: ". $path . "blog.php");
		die();
	}
?>
<!--This is calling creating a path to post.php-->
<nav>
	<ul>
		<li><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>
	</ul>
</nav>