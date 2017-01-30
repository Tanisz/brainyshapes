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
									<h2>Kártyák</h2>
									<p>Már egy megszerzett kártya is nagy teljesítmény...</p>
                                                                        <br>
                                                                        <p>Hát még az összes!</p>
								</header>
							</div>
							<div class="6u$ 12u$(medium)">
								<p>A játék során számos kártyát szerezhetsz meg.<br/>Mindegyik kártyalap megszerzése más és más logikát kíván meg.</p>
								<p>Vannak normál (a játékmenet során megszerezhető) kártyák és vannak különleges kártyák, amelyek kizárólag különleges, rendkívüli teljesítésekért kaphatóak meg.</p>
							</div>
						</div>
					</div>
				</section>
                
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<!--<header class="major special">-->
						<!--<h2>Kártyák</h2>-->
						<!--<p>A játék során számos kártyát szerezhetsz meg:</p>-->
					<!--</header>-->
                                    
                			<section>
                                            <h3>Normál kártyák</h3>
						<!--<h4>Fit</h4>-->
						<div class="box alt">
							<div class="row 50% uniform">
								<div class="4u"><span class="image fit"><img src="images/kartyak_thumb/k_alakzat_kirako_guru_thumb_hu.png" alt="" /></span></div>
								<div class="4u$"><span class="image fit"><img src="images/kartyak_thumb/k_palya_teljesito_langelme_thumb_hu.png" alt="" /></span></div>
								<div class="4u$"><span class="image fit"><img src="images/kartyak_thumb/k_bonuszjatek_virtuoz_thumb_hu.png" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/kartyak_thumb/k_segito_bajnok_thumb_hu.png" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/kartyak_thumb/k_alakzat_kivalto_varazslo_thumb_hu.png" alt="" /></span></div>
								<div class="4u$"><span class="image fit"><img src="images/kartyak_thumb/k_szorzoszam_szakerto_thumb_hu.png" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/kartyak_thumb/k_pontgyujto_magus_thumb_hu.png" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/kartyak_thumb/k_joker_kirako_muvesz_thumb_hu.png" alt="" /></span></div>
								<div class="4u$"><span class="image fit"><img src="images/kartyak_thumb/k_alakzat_sor_buvesz_thumb_hu.png" alt="" /></span></div>
							</div>
						</div>
					</section>

                			<section>
                                            <h3>Speciális kártyák</h3>
						<!--<h4>Fit</h4>-->
						<div class="box alt">

                					<div class="image fit captioned">
                                                            <section id="szoveg">                                                                        
                                                                <ul class="actions">
                                                                <li><a href="<?php echo Yii::app()->createUrl('site/jatekmester_leiras'); ?>" class="button special big">Játékmester</a></li>
                                                                </ul>                                                                        
                                                            </section>                                                                        
                                            
                                                            <!--<a href="#" class="image fit"><img src="images/kartyak_nagy/k_jatekmester_hu.png" alt="" /></a>-->
                                                            <a href="<?php echo Yii::app()->createUrl('site/jatekmester_leiras'); ?>" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/kartyak_nagy/k_jatekmester_hu.png" alt=""></a>
                                                            <!--<a class="image fit"><img src="images/kartyak_nagy/k_jatekmester_hu.png" alt="" /></a>-->                                            
                                                	</div>
                                                                                                        
                					<div class="image fit captioned">
                                                            <section id="szoveg">                                                                        
                                                                <ul class="actions">
                                                                <li><a href="<?php echo Yii::app()->createUrl('site/teljesites_geniusz_leiras'); ?>" class="button special big">Teljesítés géniusz</a></li>
                                                                </ul>                                                                        
                                                            </section>                                                                        
                                                                        
                                                            <!--<a href="#" class="image fit"><img src="images/kartyak_nagy/k_teljesites_geniusz_hu.png" alt="" /></a>-->
                                                            <a href="<?php echo Yii::app()->createUrl('site/teljesites_geniusz_leiras'); ?>" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/kartyak_nagy/k_teljesites_geniusz_hu.png" alt=""></a>
                                                        </div>
                                                                                            
                					<div class="image fit captioned">
                                                            <section id="szoveg">                                                                        
                                                                <ul class="actions">
                                                                <li><a href="<?php echo Yii::app()->createUrl('site/pontszam_specialista_leiras'); ?>" class="button special big">Pontszám specialista</a></li>
                                                                </ul>                                                                        
                                                            </section>                                                                        
                                                                        
                                                            <!--<a href="#" class="image fit"><img src="images/kartyak_nagy/k_pontszam_specialista_hu.png" alt="" /></a>-->
                                                            <a href="<?php echo Yii::app()->createUrl('site/pontszam_specialista_leiras'); ?>" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/kartyak_nagy/k_pontszam_specialista_hu.png" alt=""></a>
                                                        </div>
                                                    
                					<div class="image fit captioned">
                                                            <section id="szoveg">                                                                        
                                                                <ul class="actions">
                                                                <li><a href="<?php echo Yii::app()->createUrl('site/eredmeny_talentum_leiras'); ?>" class="button special big">Eredmény talentum</a></li>
                                                                </ul>                                                                        
                                                            </section>                                                                        
                                                                        
                                                            <!--<a href="#" class="image fit"><img src="images/kartyak_nagy/k_eredmeny_talentum_hu.png" alt="" /></a>-->
                                                            <a href="<?php echo Yii::app()->createUrl('site/eredmeny_talentum_leiras'); ?>" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/kartyak_nagy/k_eredmeny_talentum_hu.png" alt=""></a>
                                                        </div>                                                    
                                                    
						</div>
					</section>
                                    
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