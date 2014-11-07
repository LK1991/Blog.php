<?php
// There are filtering the input, getting it from a post that we are submitting, make it so we're getting it from title and post, and it's filtering it making sure it's a string.
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	echo "<p>Title: $title</p>";
	echo "<p>Post: $post</p>";