<Doctype Html>
	<html>
		<head>
			<title>TutorialMela.com -- Home</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="style.css">
			<script type="text/javascript" src="js/jquery.js"></script>
			
		</head>
		<body id="home">
			<section class="container">
				<div class="row">
					<?php include "components/header.php"; ?>
					<?php include "components/carousel.php"; ?>

					<section class=" col col-lg-8">
						<?php include "components/article_intro.php"; ?>
					</section>

					<section class="col col-lg-4">
						<?php include "components/aside-register.php"; ?>
						<?php include "components/aside-pics.php"; ?>
					</section>
				</div>
				<?php include "components/footer.php"; ?>
			</section>
			<script type="text/javascript" src="js/bootstrap.js"></script>
			<script type="text/javascript" src="js/myScript.js"></script>
			<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img class="img-thumbnail" src="img/img1.jpg">
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img class="img-thumbnail" src="img/img2.jpg">
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img class="img-thumbnail" src="img/img3.jpg">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img class="img-thumbnail" src="img/img4.jpg">
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img class="img-thumbnail" src="img/img5.jpg">
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<applet class="img-thumbnail" code="DigitalClock" height="500" width="500"></applet>
					</div>
				</div>
			</div>
		</div>
			
		</body>
	</html>