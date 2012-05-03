<?php
/*
 * FILE: choose.php
 * PURPOSE: Choose template to copy/paste from.
 */

# Get template name
$template = $_GET['template'];

?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	 
	<title>Beautician | Make any text look sexy</title>
	<meta name="description" content="Beautician takes plain old Markdown text and formats it beautifully. Perfect for resumes, project proposals, and more!" />
	<meta name="author" content="Bill Patrianakos" />
	<link rel="author" href="humans.txt" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="css/style.css?v=2" />
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700|PT+Sans' rel='stylesheet' type='text/css'>
	<script src="js/libs/respond.min.js" type="text/javascript"></script>
	
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--[if gte IE 9]>
	  <style type="text/css">
	    .gradient { filter: none; }
	  </style>
	<![endif]-->

</head>

<body>

	<header class="container">
		<section class="row">
			<article class="six">
				<h3>Beautician: <span class="tagline">make any text look sexy</span></h3>
			</article>
			<nav class="six last">
				<!-- Navigation will go here -->
			</nav>
		</section>
	</header>
	<section id="main-container" class="container">
		<section id="intro" class="row">
			<article class="twelve centered-text">
				<h1 class="huge">Copy-paste your test or just write in the box below</h1>
				<p>
					(Use Markdown for best results)
				</p>
			</article>
		</section>
		<section class="row ptop">
			<article class="two">
				<!-- EMPTY PADDING -->
			</article>
			<article class="eight centered-text">
				<fieldset>
					<form method="post" action="app/generate.php">
						<textarea name="content"></textarea>
						<br />
						<input type="hidden" name="template" value="<?php echo "$template"; ?>" />
						<input type="submit" value="Generate!" />
					</form>
				</fieldset>
			</article>
			<article class="two last">
				<!-- EMPTY PADDING -->
			</article>
		</section>
	</section>
	<footer class="container">
		<section class="row">
			<article class="twelve centered-text">
				<p>
					Copyright &copy; 2012 <a href="http://chooseclever.com">Clever Web Design</a>, <a href="http://cleverlabs.info">Clever Labs</a>, and <a href="http://billpatrianakos.me">Bill Patrianakos</a>
				</p>
			</article>
		</section>
	</footer>

	<!-- Your JavaScript should be at the bottom (with some exceptions) -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js">\x3C/script>')</script>
	<script src="js/plugins.js"></script>
	<script src="js/scripts.js"></script>

	<!-- Put your Analytics Snippet here -->

	<!--Promp old IE users to install Chrome Frame. Remove to support IE6 -->
	<!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]--> 


</body>
</html>