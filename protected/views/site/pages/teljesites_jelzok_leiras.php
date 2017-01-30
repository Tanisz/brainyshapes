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
									<h2>Teljesítés jelzők</h2>
									<p>A teljesített teljesítés jelzők mutatják elért eredményed minőségét.</p>
                                                                        <br>
                                                                        <p>Teljesítsd mindet!</p>
								</header>
							</div>
							<div class="6u$ 12u$(medium)">
								<p>A játék során számos teljesítés jelzővel találkozhatsz.<br/>Vannak közöttük könnyen teljesíthetőek, de vannak nagyon kemény diók is.</p>
								<p>Minden eredményedhez kapcsolódik egy-egy teljesítés jelző lista.<br>Törekedj a lehető legtöbb teljesítés jelző megszerzésére, mert elért eredményeid minőségét mutatják!</p>
                                                                <p>A teljesítés jelzők szövegezése különböző színekkel rendelkezik - a színek mutatják a teljesítések nehézségét.</p>
                                                                <!--<p>-->
                                                                    <!--Különböző színű teljesítés jelzők vannak:-->
                                                                    <!--<br>-->
                                                                    <!--<span id="zold_szoveg_szin">Zöld: könnyen teljesíthetőek</span>-->
                                                                    <!--<br>-->
                                                                    <!--<span id="vilagoskek_szoveg_szin">Világoskék: koncentrálva könnyen átugorhatóak</span>-->
                                                                    <!--<br>-->
                                                                    <!--<span id="sarga_szoveg_szin">Sárga: tudatos játékmenettel oldhatóak fel</span>-->
                                                                    <!--<br>-->
                                                                    <!--<span id="narancssarga_szoveg_szin">Narancssárga: alapos rákészüléssel érinthetőek meg</span>-->
                                                                    <!--<br>-->
                                                                    <!--<span id="piros_szoveg_szin">Piros: rendkívül tudatos logikai felkészültséggel érhetőek el</span>-->
                                                                    <!--<br>-->
                                                                    <!--<span id="szurke_szoveg_szin">Szürke: játékmenetet közvetlenül nem befolyásoló jelzők</span>-->
                                                                    <!--<br>-->
                                                                    <!--<span id="fekete_szoveg_szin">Fekete: játékmenetet hátrányosan befolyásoló jelzők</span>-->
                                                                <!--</p>-->
							</div>
						</div>
					</div>
				</section>
                
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<!--<header class="major special">-->
						<!--<h2>Teljesítések</h2>-->
						<!--<p>A játék során számos teljesítés jelzőt teljesíthetsz:</p>-->
					<!--</header>-->
                                    
                			<section>
                                            <!--<h3>Speciális kártyák</h3>-->
						<!--<h4>Fit</h4>-->
						<div class="box alt">

                                                    <!----------------------------------------------------------------------->
                                                    <section>
                                                        <h3>Zöld teljesítés jelzők</h3>

                                                            <section id="szines_szoveg">
                                                                <span class="zold">Könnyen teljesíthető jelzők</span>
                                                            </section>   

                                                            <div class="box alt">
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_zo_alakzat_10_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_zo_jatekteri_segito_1_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_zo_alakzat_kirakas_forditott_sorrend_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_zo_alakzat_sor_1_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_zo_pont_1000_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_zo_bonuszjatek_10_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_zo_ket_alakzat_egyszerre_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_zo_alakzat_kereso_5_hu.png" alt="" /></a>
                                                            </div>

                                                        <h3>Világoskék teljesítés jelzők</h3>

                                                            <section id="szines_szoveg">
                                                                <span class="vilagoskek">Koncentrálva viszonylag könnyen elérhető jelzők</span>
                                                            </section>   

                                                            <div class="box alt">
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_ke_alakzat_elem_100_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_ke_alakzat_kirako_5_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_ke_joker_alakzat_1_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_ke_felhasznalt_segito_20_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_ke_memoria_5_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_ke_pont_10000_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_ke_osszes_alakzat_alakzat_kivaltassal_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_ke_ido_alakzat_5_hu.png" alt="" /></a>
                                                            </div>

                                                        <h3>Sárga teljesítés jelzők</h3>

                                                            <section id="szines_szoveg">
                                                                <span class="sarga">Tudatos játékmenettel feloldható jelzők</span>
                                                            </section>   

                                                            <div class="box alt">
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_sa_alakzat_krakas_csak_csillaggal_1_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_sa_parkereso_5_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_sa_osszes_alakzat_egy_szinnel_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_sa_golyo_atugralo_5_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_sa_szorzoszam_100_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_sa_pont_100000_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_sa_alakzat_kereso_alakzat_150_hu.png" alt="" /></a>
                                                                  <a class="image fit repetate"><img src="images/teljesites_jelzok/t_sa_ingyen_segito_30_hu.png" alt="" /></a>
                                                            </div>

                                                        <h3>Narancssárga teljesítés jelzők</h3>

                                                            <section id="szines_szoveg">
                                                                <span class="narancssarga">Alapos rákészüléssel teljesíthető jelzők</span>
                                                            </section>   

                                                            <div class="box alt">
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_na_osszes_alakzat_segitovel_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_na_bonuszjatek_50_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_na_osszes_alakzat_egyszerre_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_na_memoria_pontszam_100_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_na_alakzat_sor_10_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_na_palya_elso_helyezes_10_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_na_alakzat_kivaltas_30_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_na_palya_elso_helyezes_5_egymas_utan_hu.png" alt="" /></a>
                                                            </div>

                                                        <h3>Piros teljesítés jelzők</h3>

                                                            <section id="szines_szoveg">
                                                                <span class="piros">Rendkívül tudatos játékmenettel és logikai felkészültséggel elérhető jelzők</span>
                                                            </section>   

                                                            <div class="box alt">
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_pi_egymast_koveto_5_lepes_5_alakzat_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_pi_joker_alakzat_10_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_pi_alakzat_200_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_pi_osszes_bonuszjatek_egy_palyan_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_pi_pont_200000_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_pi_bonuszjatek_100_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_pi_ossz_telj_80_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_pi_palya_50_hu.png" alt="" /></a>
                                                            </div>

                                                        <h3>Szürke teljesítés jelzők</h3>

                                                            <section id="szines_szoveg">
                                                                <span class="szurke">Játékmenetet közvetlenül nem befolyásoló jelzők</span>
                                                            </section>   

                                                            <div class="box alt">
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_sz_minden_elem_ugyanolyan_szinu_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_sz_ures_jatekter_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_sz_kevero_hasznalat_10_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_sz_mindegyik_segitobol_egy_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_sz_teljes_meretu_jatekter_hu.png" alt="" /></a>
                                                            </div>

                                                        <h3>Fekete teljesítés jelzők</h3>

                                                            <section id="szines_szoveg">
                                                                <span class="fekete">Játékmenetet hátrányosan befolyásoló jelzők</span>
                                                            </section>   

                                                            <div class="box alt">
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_fe_palya_teljesites_lejart_idovel_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_fe_csak_1_cella_ures_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_fe_lepes_alakzat_kirakas_nelkul_10_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_fe_tiltott_alakzat_3_hu.png" alt="" /></a>
                                                                   <a class="image fit repetate"><img src="images/teljesites_jelzok/t_fe_szin_megjelenes_6_hu.png" alt="" /></a>                                                	
                                                            </div>

                                                    </section>
                                                    <!----------------------------------------------------------------------->

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