<?php const Site = "http://localhost:3000"; ?>

	<?php require "head.php"?>
		<title>NYC Bagpipes - Hire a Bagpiper - Learn to Play Bagpipes</title>
		<?php $content = "Official homepage for NYC Bagpipes. The #1 Website for anything bagpipe related in the tri-state area. We offer piping for weddings, funerals, parties, and other events; and in-person and online lessons.  Call here to hire a professional bagpiper.";?>
		<meta name="description" content="<?php echo $content;?>">
		<meta property="og:description" content="<?php echo $content?>">
	</head>	
	<body>
		<?php require "googleTagBody.php";?>
		<?php require "call.php";?>
		<?php require "nav.php";?>
		<?php require "home.php";?>
		<?php require "footer.php";?>
	</body>
</html>