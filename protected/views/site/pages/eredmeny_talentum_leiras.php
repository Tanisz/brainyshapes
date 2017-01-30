<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/js/jquery.min.js'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/js/skel.min.js'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/js/util.js'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/js/main.js'); ?>

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
									<h2>Eredmény Talentum</h2>
									<p>15 pálya és maximális pontszám.</p>
                                                                        <br>
                                                                        <p>Mit tudsz kihozni a bevezető pályákból?</p>
								</header>
							</div>
							<div class="6u$ 12u$(medium)">								
                                                              <p>Hozd ki a maximumot a bevezető pályákból!</p>
                                                              <p>Gondolkodj és kombinálj gyorsan - élj minden felkínált lehetőséggel!</p>
							</div>
						</div>
					</div>
				</section>
                
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2>Eredmény Talentum kártya</h2>
						<p>Szerezd a legtöbb pontot a játék bevezető pályáin és nyerd el a Eredmény Talentum kártyát!</p>
					</header>

					<!--<a href="#" class="image fit"><img src="images/jatekmester_kartya_hu.png" alt="" /></a>-->                                        
                                        <a class="image fit"><img src="images/kartyak_nagy/k_eredmeny_talentum_hu.png" alt="" /></a>
                                        
                                                                            
                                        <!--<img src="images/jatekmester_kartya_hu.png" alt="" />-->
                                        
					<!--<p>-->
                                            <!--Ezt a kártyalapot a játék során akkor kapod meg, amikor az összes normál kártyalapot sikeresen megszerezted.-->
                                            <!--<br>-->
                                            <!--A kártyák megszerzése nem könnyű feladat, a képességeid határaid kell feszegetned értük!-->
                                        <!--</p>-->

					<div class="image fit captioned">
                                            <section id="szoveg">                                                                        
                                                <ul class="actions">
                                                <li><a href="<?php echo Yii::app()->createUrl('site/eredmenyek'); ?>" class="button special big">Eredmények</a></li>
                                                </ul>                                                                        
                                            </section>                                                                        
					</div>
                                        
					<header class="major special">
						<h2>Jutalom</h2>
						<p>Aki a Pontszám Specialista kártyalapot elsőként szerzi meg, az alábbi jutalomban részesül:</p>
					</header>
                                        
                                        <!--<a href="#" class="image fit"><img src="images/jatekmester_ajandek.png" alt="" /></a>-->
                                        <a class="image fit"><img src="images/ajandekok/eredmeny_talentum_ajandek.png" alt="" /></a>
					<!--<p>A játékmester kártya jutalma egy Play Station 4, amelyhez még szabadon választhatsz 3 játékot is!</p>-->

				</div>
			</section>

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