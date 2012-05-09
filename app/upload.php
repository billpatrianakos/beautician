<?php

// ERROR REPORTING
ini_set('display_errors', 1); 
error_reporting(E_ALL);

# Include the MarkdownPHP library
include '../libs/markdown.php';

$template = $_POST['template'];

$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['file']['name']); 

if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
	$file = file_get_contents($target_path);
	$output = Markdown($file);
}
else{
    $output = "There was an error processing your file.";
}
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
	<?php echo "$output"; ?>
</body>
</html>