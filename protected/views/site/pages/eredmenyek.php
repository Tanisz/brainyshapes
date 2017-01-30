<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/js/jquery.min.js'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/js/skel.min.js'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/js/util.js'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/js/main.js'); ?>

<?php
//$cssUrl = Yii::app()->baseUrl . '/js/bootstrap/css/';
//$jsUrl = Yii::app()->baseUrl . '/js/bootstrap/js/';
//
//Yii::app()->clientScript->registerCssFile($cssUrl . 'bootstrap.css');
//Yii::app()->clientScript->registerCssFile($cssUrl . 'bootstrap.min.css');
//Yii::app()->clientScript->registerScriptFile($jsUrl . 'bootstrap.js', CClientScript::POS_HEAD);
//Yii::app()->clientScript->registerScriptFile($jsUrl . 'bootstrap.min.js', CClientScript::POS_HEAD);
//?>

<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<!--<title>Generic - Spatial by TEMPLATED</title>-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main_spatial.css" />
                <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
                <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	</head>
        
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<!--<h1><strong><a href="main.php">Spatial</a></strong> by Templated</h1>-->
				<nav id="nav">
					<ul>
                                                <li><a href=<?php echo Yii::app()->createUrl('site/index'); ?>>Kezdőoldal</a></li>
						<li><a href=<?php echo Yii::app()->createUrl('site/kartyak_leiras'); ?>>Kártyák</a></li>
						<li><a href=<?php echo Yii::app()->createUrl('site/teljesites_jelzok_leiras'); ?>>Teljesítés jelzők</a></li>
                                                <li><a href=<?php echo Yii::app()->createUrl('site/eredmenyek'); ?>>Eredmények</a></li>
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Banner -->
			<section id="banner">
				<h2>Brainy Shapes</h2>
				<p>Egyszerű kinézet. <br/>Könnyű kezelhetőség. <br/>Kőkemény logika.</p>
                                
				<ul class="actions">
					<li><a href="#" class="button special big">Mutasd meg, hogy mit tudsz!</a></li>
				</ul>
			</section>
                        
                
				<section id="one" class="wrapper style1">
					<div class="container 75%">
						<div class="row 200%">
							<div class="6u 12u$(medium)">
								<header class="major">
									<h2>Eredmények</h2>
									<p>Tekintsd meg feltöltött eredményeid és hasonlítsd össze mások eredményeivel!</p>
                                                                        <br>
                                                                        <p>Legyél Te a legjobb!</p>
								</header>
							</div>
							<div class="6u$ 12u$(medium)">
								<p>A fetöltött eredményed több szempontból is rangsorolva van.</p>
								<p>A különböző fülek mutatják, hogy melyik szempontról van szó és azon belül Te miként szerepeltél. </p>
							</div>
						</div>
					</div>
				</section>

		<!-- Main -->
                
                
                
<!--                                <div class="container">
                                  <h3>Tabs</h3>
                                  <ul class="nav nav-tabs">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="#">Menu 1</a></li>
                                    <li><a href="#">Menu 2</a></li>
                                    <li><a href="#">Menu 3</a></li>
                                  </ul>
                                  <br>
                                  <p><strong>Note:</strong> This example shows how to create a basic navigation tab. It is not toggleable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done.</p>
                                </div>                                -->
                

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<li><a href="#" class="icon fa-twitter"></a></li>
						<li><a href="#" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Our True Treasure Kft.</li>
						<!--<li>Design: <a href="http://templated.co">TEMPLATED</a></li>-->
						<!--<li>Images: <a href="http://unsplash.com">Unsplash</a></li>-->
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>