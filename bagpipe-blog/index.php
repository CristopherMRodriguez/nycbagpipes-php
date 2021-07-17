<?php require "../head.php"?>
		<title>Bagpipes Blog</title>
		<?php $content = "";?>
		<meta name="description" content="<?php echo $content;?>">
		<meta property="og:description" content="<?php echo $content?>">
	</head>
  <body>
		<?php require "../googleTagBody.php";?>
		<?php require "../call.php";?>
		<?php require "../nav.php";?>
    <h1>Bagpipes Blog</h1>
		<a href="<?php echo $Site . "/bagpipe-blog/blog1" ?>"><h2>Blog 1</a></h2>
		<a href="<?php echo $Site . "/bagpipe-blog/blog2" ?>"><h2>Blog 2</a></h2>
		<a href="<?php echo $Site . "/bagpipe-blog/blog3" ?>"><h2>Blog 3</a></h2>
		<a href="<?php echo $Site . "/bagpipe-blog/blog4" ?>"><h2>Blog 4</a></h2>
		<a href="<?php echo $Site . "/bagpipe-blog/blog5" ?>"><h2>Blog 5</a></h2>
		<a href="<?php echo $Site . "/bagpipe-blog/blog6" ?>"><h2>Blog 6</a></h2>
		<?php require "../footer.php";?>
		<script src="index.js"></script>
	</body>
</html>