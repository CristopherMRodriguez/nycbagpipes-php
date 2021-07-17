<?php require "../head.php"?>
		<title>Bagpipe FAQ</title>
		<?php $content = "Info on how to hire a bagpiper and learn bagpipes. Frequently asked questions on hiring a bagpiper and to learn how to play the bagpipes. Learn now.";?>
		<meta name="description" content="<?php echo $content;?>">
		<meta property="og:description" content="<?php echo $content?>">
	</head>
  <body>
		<?php require "../googleTagBody.php";?>
		<?php require "../call.php";?>
		<?php require "../nav.php";?>
		<?php require "../head.php"?>
		<div class="landing-page-header">
			<h1 class="section-title">Bagpipe FAQ's</h1>
			<p class="landing-page-header-p">For your convenience we have provided commonly asked FAQ's for hiring a bagpiper 
				or learning the bagpipes.  Follow a section to find out more info.
			</p>
		</div>
		<div class="section-border"></div>
		<section class="section section-odd">
			<a class="pic-anchor"  class="button" href="<?php echo $Site . "/bagpipe-faq/hire-a-bagpiper";?>">
				<img src="../img/bagpiper-playing.jpg" alt="Hiring a Bagpipe FAQ's">
			</a>	
			<div class="section-div">
				<h1 class="section-title">Hiring a Bagpiper FAQ's</h1>
				<a class="landing-page-button-a" href="<?php echo $Site . "/bagpipe-faq/hire-a-bagpiper";?>">					
					<button class="landing-page-button">	
						<h2 class="section-subtitle">Hiring a Bagpiper Info</h2>
					</button>
				</a>  
				<p class="section-p">Learn more about about commonly asked questions about hiring a bagpiper.</p>
			</div>
		</section>
		<div class="section-border"></div>
		<section class="section bottom-section section-even">
			<div class="section-div">
				<h1 class="section-title">Learning Bagpipes FAQ's</h1>
				<a class="landing-page-button-a" href="<?php echo $Site . "/bagpipe-faq/learning-bagpipes";?>">					
					<button class="landing-page-button">
						<h2 class="section-subtitle">Online Bagpipe Lessons Info</h2>
					</button>
				</a>
				<p class="section-p">Learn more about about commonly asked questions about learning how to play the bagpipes</p>
			</div>
			<a class="pic-anchor"  class="button" href="<?php echo $Site . "/bagpipe-faq/learning-bagpipes";?>">
				<img class="online-bagpipes-img" src="../img/children-playing-bagpipes.jpg" alt="Learning How to Play Bagpipes FAQ's">
			</a>
		</section>		
		<?php require "../footer.php";?>
		<script src="index.js"></script>
	</body>
</html>