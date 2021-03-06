<?php

header( 'HTTP/1.1 503 Service Unavailable' );
header( 'Expires: Mon, 26 Jul 1997 05:00:00 GMT' );
header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' );
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', false );
header( 'Pragma: no-cache' );

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=1000px; initial-scale=1.0; maximum-scale=1.0;" />
		<!--[if IE]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<!--[if lte IE 7]><script src="/javascripts/IE8.js" type="text/javascript"></script><![endif]-->

		<title>Learnable - the way learning should be </title>

		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="maintenance.css" type="text/css" />
	</head>

	<body>

		<section id="toolbar">
		</section>

		<header id="header" style="position: relative;">
			<section class="clearfix">
				<h1><a href="http://blog.learnable.com/">learnable</a></h1>
			</section>
			<section style="position: absolute; top: 40px; right: 20px;">
				<a class="facebookbutton" href="http://www.facebook.com/learnable">Follow Learnable on Facebook</a>
				<a class="twitterbutton" href="http://www.twitter.com/learnablehq">Follow Learnable on Twitter</a>
			</section>
		</header>

		<nav id="header">
		</nav>

		<section id="container" class="clearfix">
			<h1>We're moving!</h1>
			<p>Learnable is moving to some shiny new servers - we'll be back shortly.</p>
			<p>
				Check out
				<a href="http://blog.learnable.com/">our blog</a>
				or
				<a href="http://twitter.com/learnablehq">@learnablehq</a>
				on Twitter to see where we're at.
			</p>
		</section>

		<footer id="footer">
			<section class="clearfix">
				<aside id="blackboard">
					<a class="twitter hoverable" href="http://www.twitter.com/learnablehq">Twitter</a>
					<a class="facebook hoverable" href="http://www.facebook.com/learnable">Facebook</a>
				</aside>

			</section>
		</footer>

	</body>
</html>
