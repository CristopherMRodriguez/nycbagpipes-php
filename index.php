	<?php require "./components/head.php"?>
		<title>Hire a Bagpiper - Learn to Play Bagpipes - NYC Bagpipes</title>
		<?php $content = "Hire the best bagpiper in NYC, New York, New Jersey, Long Island, Connecticut, and Pennsylvania. Want to learn how to play the bagpipes? We teach bagpipes. We offer bagpiping for weddings, funerals, parties, and other events; and in-person and online lessons. Call to hire a professional bagpiper.";?>
		<meta name="description" content="<?php echo $content;?>">
		<meta property="og:description" content="<?php echo $content;?>">
	</head>	
	<body>
		<?php require "./components/googleTagBody.php";?>
		<?php require "./components/call.php";?>
		<?php require "./components/nav.php";?>
		<section class="home">
			<div class="hero">
				<div class="hero-title-container">
					<h1 class="hero-title">NYC Bagpipes</h1>
					<h2 class="hero-subtitle">Hire a Bagpiper in NYC | New York | New Jersey | Pennsylvania | Connecticut</h2>
				</div>
			</div>
		</section>
		<section class="section section-odd">
			<a class="pic-anchor"  class="button" href="<?php echo "/hire-a-bagpiper";?>">
				<img src="./img/bagpiper-playing.jpg" alt="Button to Hire a Bagpiper">  
			</a>
			<div class="section-div">
				<h1 class="section-title">Hire a Bagpiper</h1>
					<a class="landing-page-button-a"  class="button" href="<?php echo "/hire-a-bagpiper";?>">
						<button class="landing-page-button">
							<h2 class="section-subtitle">Click to learn more about hiring a bagpiper.</h2>
						</button>
					</a>  
				<p class="section-p">Our bagpipers are the best in the area. They will add magic to your special event.</p>
			</div>
		</section>
		<div class="section-border"></div>
		<section class="section section-even">
			<div class="section-div">
				<h1 class="section-title">Learn to Play Bagpipes</h1>
				<a class="landing-page-button-a"  class="button" href="<?php echo "/learn-to-play-the-bagpipes";?>">
					<button class="landing-page-button">
						<h2 class="section-subtitle">Click here to learn the bagpipes.</h2>
					</button>
				</a>
				<p class="section-p">Want to learn to play the bagpipes? Our instructors will teach you to play the bagpipes!</p>
			</div>
			<a class="pic-anchor"  class="button" href="<?php echo "/learn-to-play-the-bagpipes";?>">
				<img src="./img/children-playing-bagpipes.jpg" alt="Button to Learn How to Play Bagpipes">
			</a>
		</section>
		<div class="section-border"></div>
		<section class="section section-odd">
			<a class="pic-anchor"  class="button" href="<?php echo "/bagpipe-faq";?>">
				<img src="./img/bagpipes-faq.jpeg" alt="Button for Bagpipes FAQ's">
			</a>
			<div class="section-div">
				<h2 class="section-title">NYC Bagpipes FAQ's</h2>
				<a class="landing-page-button-a"  class="button" href="<?php echo "/bagpipe-faq";?>">
					<button class="landing-page-button">
						<h3 class="section-subtitle">Click here to read frequently asked questions about bagpiping.</h3>
					</button>
				</a>
				<p class="section-p">Click here to read our bagpipe FAQ.</p>
			</div>
		</section>
		<div class="section-border"></div>
		<section class="section section-even bottom-home">
			<div class="section-div">
				<h2 class="section-title">NYC Bagpipes Blog</h2>
				<a class="landing-page-button-a"  class="button" href="<?php echo "/bagpipe-blog";?>">
					<button class="landing-page-button">
						<h3 class="section-subtitle">Click here to read the bagpipe blog.</h3>
					</button>
				</a>
				<a class="home-blog-links" href="./bagpipe-faq/learn-to-play-bagpipes/is-it-hard-to-learn-the-bagpipes.php">Is it Hard to Learn the Bagpipes?</a> 
				<a class="home-blog-links" href="./bagpipe-blog/donald-lindsay-history-of-the-bagpipes.php">Donald Lindsay Interview - History of the Bagpipes</a> 
				<a class="home-blog-links" href="./bagpipe-blog/how-to-hire-a-bagpiper.php">How to Hire a Bagpiper</a> 
				<a class="home-blog-links" href="./bagpipe-blog/learn-to-play-the-bagpipes-blog.php">How to Learn the Bagpipes (the right way)</a> 
			</div>
			<a class="pic-anchor"  class="button" href="<?php echo "/bagpipe-blog";?>">
				<img src="./img/bagpipes-blog.jpeg" alt="Button for Bagpipes Blog">  
			</a>
		</section>		
		<?php require "./components/footer.php";?>
		<script src="script.js"></script>
	</body>
</html>