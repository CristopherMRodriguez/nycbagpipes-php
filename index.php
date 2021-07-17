<?php const Site = "http://localhost:3000"; ?>

	<?php require "head.php"?>
		<title>Hire a Bagpiper - Learn to Play Bagpipes - NYC Bagpipes</title>
		<?php $content = "Hire the best bagpiper in NYC, New York, New Jersey, Long Island, Connecticut, and Pennsylvania. Want to learn how to play the bagpipes? We teach bagpipes. We offer bagpiping for weddings, funerals, parties, and other events; and in-person and online lessons. Call to hire a professional bagpiper.";?>
		<meta name="description" content="<?php echo $content;?>">
		<meta property="og:description" content="<?php echo $content;?>">
	</head>	
	<body>
		<?php require "googleTagBody.php";?>
		<?php require "call.php";?>
		<?php require "nav.php";?>
		<?php require "home.php";?>
		<?php require "footer.php";?>
		<script src="index.js"></script>
	</body>
</html>