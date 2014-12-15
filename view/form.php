<?php
	// Requiring config.php
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ ."/../controller/login-verify.php");

	// If a user is authenticated, it will take you back to the blog page.
	if(!authenticateUser()) {
		header("Location: ". $path . "blog.php");
		die();
	}
?>

<!-- This is creating a form that you can submit to the project in phpMyAdmin -->
<h1>Create Blog Post</h1>

<!-- This is creating a path to create-post.php -->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
	<div>
		<label for="title">Title: </label>
		<input type="text" name="title" />	 
	</div>
	<div>
		<label for="post">Post: </label>
		<textarea name="post"></textarea>
	</div>
	<div>
		<button type="submit">Submit</button>
	</div>
</form>

