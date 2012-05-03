<?php
/*
 * FILE: generate.php
 * PURPOSE: Generates and displays formatted text
 */

# Include the MarkdownPHP library
include '../libs/markdown.php';

# Get the template
$template 	= $_POST['template'];

# Store the content and sanitize it
$content 	= filter_var($_POST['content'], FILTER_SANITIZE_STRING);

# Store sanitized content into a variable and convert to HTML
$content2 	= Markdown($content);

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />	 
	<title>Formatting by Beautician | beautician.cleverlabs.info</title>
	<meta name="description" content="Beautician takes plain old Markdown text and formats it beautifully. Perfect for resumes, project proposals, and more!" />
	<meta name="author" content="Bill Patrianakos" />
	<link rel="author" href="../humans.txt" />

	<link rel="stylesheet" href="templates/<?php echo "$template"; ?>.css?v=2" />
	
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>
	<?php echo "$content2"; ?>
</body>
</html>