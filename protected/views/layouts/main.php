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
		<!--<title>Spatial by TEMPLATED</title>-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
                <link rel="stylesheet" href="css/main_spatial.css" />                
	</head>
        
	<body class="landing">

		<!-- Header -->
			<?php $this->renderPartial('header');?>

		<!-- Banner -->
			<?php $this->renderPartial('banner');?>

			<!-- One -->
				<section id="one" class="wrapper style1">
					<div class="container 75%">
						<div class="row 200%">
							<div class="6u 12u$(medium)">
								<header class="major">
									<h2>Meddig jutsz el?</h2>
									<p>Hozd felszínre a legjobb képességeidet!</p>
								</header>
							</div>
							<div class="6u$ 12u$(medium)">
								<p>A Brainy Shapes egy logikai játék.<br/>Logikai képességfelmérőnek készült, tehát kiválóan alkalmas arra, hogy alaposan megmozgassa és összekuszálja az agytekervényeidet!</p>
								<p>Képes vagy átjutni a játék 50 pályáján és közben megmutatni számos bónuszjáték teljesítésével, hogy milyen logikai erő lakozik benned?</p>
                                                                <p>Töltsd fel legjobb eredményeidet, hogy mások is láthassák, mennyire ügyes vagy!</p>
							</div>
						</div>
					</div>
				</section>

			<!-- Two -->
				<section id="two" class="wrapper style2 special">
					<div class="container">
						<header class="major">
							<h2>Különleges teljesítések</h2>
							<p>A különleges teljesítések különleges díjakkal járnak!</p>
						</header>
						<div class="row 150%">
							<div class="6u 12u$(xsmall)">
								<div class="image fit captioned">
									<!--<img src="images/jatekmester.png" alt="" />-->
                                                                        <!--<h3>Játékmester</h3>-->
                                                                        
                                                                        <ul class="actions">
                                                                        <li><a href="<?php echo Yii::app()->createUrl('site/jatekmester_leiras'); ?>" class="button special big">Játékmester</a></li>
                                                                        </ul>
                                                                        
                                                                        <!--<img src="images/jatekmester_sziluett_ajandekkal.png" alt="" />-->
                                                                        <a href="<?php echo Yii::app()->createUrl('site/jatekmester_leiras'); ?>" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/kartyak_ajandekkal/jatekmester_ajandekkal.png" alt=""></a>

                                                                        <section id="szoveg">
                                                                        <p>
                                                                            Play Station 4
                                                                            <br>                                                                            
                                                                            <span id="szoveg_szin">A tökéletes játékélményért</span>
                                                                        </p>
                                                                        </section>                                                                        
								</div>
							</div>
							<div class="6u$ 12u$(xsmall)">
								<div class="image fit captioned">
                                                                        <!--<h3>Teljesítés géniusz</h3>-->
                                                                        
                                                                        <ul class="actions">
                                                                        <li><a href="<?php echo Yii::app()->createUrl('site/teljesites_geniusz_leiras'); ?>" class="button special big">Teljesítés géniusz</a></li>
                                                                        </ul>
                                                                        
									<!--<img src="images/kartyak_ajandekkal/teljesites_geniusz_ajandekkal.png" alt="" />-->
                                                                        <a href="<?php echo Yii::app()->createUrl('site/teljesites_geniusz_leiras'); ?>" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/kartyak_ajandekkal/teljesites_geniusz_ajandekkal.png" alt=""></a>
                                                                        
                                                                        <section id="szoveg">
                                                                        <p>
                                                                            SAMSUNG Ultra HD TV                                                                            
                                                                            <br>                                                                            
                                                                            <span id="szoveg_szin">A tökéletes látványért</span>
                                                                        </p>
                                                                        </section>
								</div>
							</div>
							<div class="6u$ 12u$(xsmall)">
								<div class="image fit captioned">
                                                                        <!--<h3>Pontszám specialista</h3>-->
                                                                        
                                                                        <ul class="actions">
                                                                        <li><a href="<?php echo Yii::app()->createUrl('site/pontszam_specialista_leiras'); ?>" class="button special big">Pontszám specialista</a></li>
                                                                        </ul>
                                                                        
									<!--<img src="images/kartyak_ajandekkal/pontszam_specialista_ajandekkal.png" alt="" />-->
                                                                        <a href="<?php echo Yii::app()->createUrl('site/pontszam_specialista_leiras'); ?>" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/kartyak_ajandekkal/pontszam_specialista_ajandekkal.png" alt=""></a>
                                                                        
                                                                        <section id="szoveg">
                                                                        <p>
                                                                            LG BlueRay 3D házimozi rendszer
                                                                            <br>                                                                            
                                                                            <span id="szoveg_szin">A tökéletes hangzásért</span>
                                                                        </p>
                                                                        </section>
								</div>
							</div>
							<div class="6u$ 12u$(xsmall)">
								<div class="image fit captioned">
                                                                        <!--<h3>Eredmény talentum</h3>-->
                                                                        
                                                                        <ul class="actions">
                                                                        <li><a href="<?php echo Yii::app()->createUrl('site/eredmeny_talentum_leiras'); ?>" class="button special big">Eredmény talentum</a></li>
                                                                        </ul>
                                                                        
									<!--<img src="images/kartyak_ajandekkal/eredmeny_talentum_ajandekkal.png" alt="" />-->
                                                                        <a href="<?php echo Yii::app()->createUrl('site/eredmeny_talentum_leiras'); ?>" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/kartyak_ajandekkal/eredmeny_talentum_ajandekkal.png" alt=""></a>

                                                                        <section id="szoveg">
                                                                        <p>
                                                                            Philips automata kávéfőző
                                                                            <br>                                                                            
                                                                            <span id="szoveg_szin">A tökéletes ízhatásért</span>
                                                                        </p>
                                                                        </section>
								</div>
							</div>
						</div>
						<!--<ul class="actions">-->
							<!--<li><a href="#" class="button special big">Nulla luctus</a></li>-->
							<!--<li><a href="#" class="button big">Sed vulputate</a></li>-->
						<!--</ul>-->
					</div>
				</section>

			<!-- Three -->
				<section id="three" class="wrapper style1">
					<div class="container">
						<header class="major special">
							<h2>Milyen képességeidet fejleszti a játék?</h2>
							<!--<p>Feugiat sed lorem ipsum magna</p>-->
						</header>
						<div class="feature-grid">
							<div class="feature">
								<div class="image rounded"><img src="images/kepessegek/agy.png" alt="" /></div>
								<div class="content">
									<header>
										<h4>Memória</h4>
										<!--<p>Lorem ipsum dolor sit</p>-->
									</header>
									<p>Folyamatosan szükséged lesz a rövid távú memóriádra</p>
								</div>
							</div>
							<div class="feature">
								<div class="image rounded"><img src="images/kepessegek/lampa.png" alt="" /></div>
								<div class="content">
									<header>
										<h4>Problémamegoldás</h4>
										<!--<p>Ratione maiores a, commodi</p>-->
									</header>
									<p>Előnyt szerzel, vagy hátrányt szenvedsz a különböző szituációkra való reagálásaidtól függően</p>
								</div>
							</div>
							<div class="feature">
								<div class="image rounded"><img src="images/kepessegek/szem.png" alt="" /></div>
								<div class="content">
									<header>
										<h4>Szín és alakfelismerés</h4>
										<!--<p>Possimus ex reprehenderit eaque</p>-->
									</header>
									<p>Különféle típusú, színű és formájú, előre kiszámítható, illetve meglepő alakzatokkal lesz dolgod</p>
								</div>
							</div>
							<div class="feature">
								<div class="image rounded"><img src="images/kepessegek/fogaskerek.png" alt="" /></div>
								<div class="content">
									<header>
										<h4>Kombinációs készség</h4>
										<!--<p>Quaerat, excepturi eveniet laboriosam</p>-->
									</header>
									<p>A rendelkezésedre álló eszközöket a lehető leghatékonyabban kombinálva kell felhasználnod</p>
								</div>
							</div>
							<div class="feature">
								<div class="image rounded"><img src="images/kepessegek/mosoly.png" alt="" /></div>
								<div class="content">
									<header>
										<h4>Stressz tűrés</h4>
										<!--<p>Quaerat, excepturi eveniet laboriosam</p>-->
									</header>
									<p>A játék időre megy, neked pedig méltó ellenfélnek kell lenned</p>
								</div>
							</div>
							<div class="feature">
								<div class="image rounded"><img src="images/kepessegek/koncentracio.png" alt="" /></div>
								<div class="content">
									<header>
										<h4>Koncentráció</h4>
										<!--<p>Quaerat, excepturi eveniet laboriosam</p>-->
									</header>
									<p>Folyamatosan koncentrálnod kell, ha csak a legjobb eredmény elfogadható számodra</p>
								</div>
							</div>
						</div>
					</div>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style3 special">
					<div class="container">
						<header class="major">
							<h2>Felkeltettük a kíváncsiságod?</h2>
							<p>Mutasd meg mindenkinek, hogy mire vagy képes!</p>
						</header>
						<ul class="actions">
							<li><a href="#" class="button special big">Legyél te a legjobb!</a></li>
						</ul>
					</div>
				</section>

		<!-- Footer -->
			<?php $this->renderPartial('footer');?>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>