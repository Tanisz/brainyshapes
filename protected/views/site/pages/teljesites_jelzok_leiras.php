<section id="one" class="wrapper style1">
    <div class="container 75%">
        <div class="row 200%">
            <div class="6u 12u$(medium)">
                <header class="major">
                    <h2>Teljesítmények</h2>
                    <p>A teljesítmények mutatják elért eredményed minőségét.</p>
                    <br>
                    <p>Teljesítsd mindet!</p>
                </header>
            </div>
            <div class="6u$ 12u$(medium)">
                <p>A játék során számos teljesítés jelzővel találkozhatsz.<br/>Vannak közöttük könnyen teljesíthetőek, de vannak nagyon kemény diók is.</p>
                <p>Minden eredményedhez kapcsolódik egy-egy teljesítés jelző lista.<br>Törekedj a lehető legtöbb teljesítés jelző megszerzésére, mert elért eredményeid minőségét mutatják!</p>
                <p>A teljesítmények szövegezése különböző színekkel rendelkezik - a színek mutatják a teljesítések nehézségét.</p>

            </div>
        </div>
    </div>
</section>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container 75%">
        <section>
            <div class="box alt">

                <!----------------------------------------------------------------------->
                <section>
                    <h3>Zöld teljesítmények</h3>

                    <section id="szines_szoveg">
                        <span class="zold">Könnyen elérhető teljesítmények</span>
                    </section>   

                    <div class="box alt">

                        <?php
                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_zo_alakzat_10_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_zo_jatekteri_segito_1_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_zo_alakzat_kirakas_forditott_sorrend_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_zo_alakzat_sor_1_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_zo_pont_1000_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_zo_bonuszjatek_10_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_zo_ket_alakzat_egyszerre_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_zo_alakzat_kereso_5_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));
                        ?>


                    </div>

                    <h3>Világoskék teljesítmények</h3>

                    <section id="szines_szoveg">
                        <span class="vilagoskek">Koncentrálva viszonylag könnyen elérhető teljesítmények</span>
                    </section>   

                    <div class="box alt">

                        <?php
                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_ke_alakzat_elem_100_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_ke_alakzat_kirako_5_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_ke_joker_alakzat_1_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_ke_felhasznalt_segito_20_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_ke_memoria_5_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_ke_pont_10000_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_ke_osszes_alakzat_alakzat_kivaltassal_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_ke_ido_alakzat_5_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));
                        ?>

                    </div>

                    <h3>Sárga teljesítmények</h3>

                    <section id="szines_szoveg">
                        <span class="sarga">Tudatos játékmenettel feloldható teljesítmények</span>
                    </section>   

                    <div class="box alt">

                        <?php
                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_sa_alakzat_krakas_csak_csillaggal_1_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_sa_parkereso_5_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_sa_osszes_alakzat_egy_szinnel_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_sa_golyo_atugralo_5_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_sa_szorzoszam_100_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_sa_pont_100000_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_sa_alakzat_kereso_alakzat_150_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_sa_ingyen_segito_30_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));
                        ?>

                    </div>

                    <h3>Narancssárga teljesítmények</h3>

                    <section id="szines_szoveg">
                        <span class="narancssarga">Alapos rákészüléssel teljesíthető teljesítmények</span>
                    </section>   

                    <div class="box alt">

                        <?php
                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_na_osszes_alakzat_segitovel_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_na_bonuszjatek_50_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_na_osszes_alakzat_egyszerre_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_na_memoria_pontszam_100_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_na_alakzat_sor_10_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_na_palya_elso_helyezes_10_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_na_alakzat_kivaltas_30_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_na_palya_elso_helyezes_5_egymas_utan_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));
                        ?>

                    </div>

                    <h3>Piros teljesítmények</h3>

                    <section id="szines_szoveg">
                        <span class="piros">Rendkívül tudatos játékmenettel és logikai felkészültséggel elérhető teljesítmények</span>
                    </section>   

                    <div class="box alt">

                        <?php
                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_pi_egymast_koveto_5_lepes_5_alakzat_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_pi_joker_alakzat_10_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_pi_alakzat_200_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_pi_osszes_bonuszjatek_egy_palyan_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_pi_pont_200000_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_pi_bonuszjatek_100_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_pi_ossz_telj_80_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_pi_palya_50_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));
                        ?>

                    </div>

                    <h3>Szürke teljesítmények</h3>

                    <section id="szines_szoveg">
                        <span class="szurke">Játékmenetet közvetlenül nem befolyásoló teljesítmények</span>
                    </section>   

                    <div class="box alt">
                        <?php
                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_sz_minden_elem_ugyanolyan_szinu_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_sz_ures_jatekter_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_sz_kevero_hasznalat_10_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_sz_mindegyik_segitobol_egy_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_sz_teljes_meretu_jatekter_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));
                        ?>

                    </div>

                    <h3>Fekete teljesítmények</h3>

                    <section id="szines_szoveg">
                        <span class="fekete">Játékmenetet hátrányosan befolyásoló teljesítmények</span>
                    </section>   

                    <div class="box alt">

                        <?php
                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_fe_palya_teljesites_lejart_idovel_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_fe_csak_1_cella_ures_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_fe_lepes_alakzat_kirakas_nelkul_10_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_fe_tiltott_alakzat_3_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));

                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/teljesites_jelzok/t_fe_szin_megjelenes_6_hu.png');
                        echo CHtml::link($image, '#', array('class' => 'image fit repetate'));
                        ?>

                    </div>

                </section>
                <!----------------------------------------------------------------------->

            </div>
        </section>

    </div>
</section>

