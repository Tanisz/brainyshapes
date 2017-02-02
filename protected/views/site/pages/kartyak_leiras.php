

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
    <div class="container 75%">

        <!--<header class="major special">-->
        <!--<h2>Kártyák</h2>-->
        <!--<p>A játék során számos kártyát szerezhetsz meg:</p>-->
        <!--</header>-->

        <section>
            <h3>Normál kártyák</h3>
            <!--<h4>Fit</h4>-->
            <div class="box alt">
                <div class="row 50% uniform">
                    <div class="4u"><span class="image fit"><?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_thumb/k_alakzat_kirako_guru_thumb_hu.png'); ?></span></div>
                    <div class="4u$"><span class="image fit"><?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_thumb/k_palya_teljesito_langelme_thumb_hu.png'); ?></span></div>
                    <div class="4u$"><span class="image fit"><?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_thumb/k_bonuszjatek_virtuoz_thumb_hu.png'); ?></span></div>
                    <div class="4u"><span class="image fit"><?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_thumb/k_segito_bajnok_thumb_hu.png'); ?></span></div>
                    <div class="4u"><span class="image fit"><?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_thumb/k_alakzat_kivalto_varazslo_thumb_hu.png'); ?></span></div>
                    <div class="4u$"><span class="image fit"><?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_thumb/k_szorzoszam_szakerto_thumb_hu.png'); ?></span></div>
                    <div class="4u"><span class="image fit"><?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_thumb/k_pontgyujto_magus_thumb_hu.png'); ?></span></div>
                    <div class="4u"><span class="image fit"><?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_thumb/k_joker_kirako_muvesz_thumb_hu.png'); ?></span></div>
                    <div class="4u$"><span class="image fit"><?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_thumb/k_alakzat_sor_buvesz_thumb_hu.png'); ?></span></div>
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
                            <li><?php echo CHtml::link('Játékmester', array('site/jatekmester_leiras'), array('class' => 'button special big')); ?></li>   
                        </ul>                                                                        
                    </section>                                                                        
                    <?php
                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_nagy/k_jatekmester_hu.png');
                        echo CHtml::link($image, array('site/jatekmester_leiras'));
                    ?>                                             
                </div>

                <div class="image fit captioned">
                    <section id="szoveg">                                                                        
                        <ul class="actions">
                            <li><?php echo CHtml::link('Teljesítés géniusz', array('site/teljesites_geniusz_leiras'), array('class' => 'button special big')); ?></li>
                        </ul>                                                                        
                    </section>                                                                        
                    <?php
                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_nagy/k_teljesites_geniusz_hu.png');
                        echo CHtml::link($image, array('site/teljesites_geniusz_leiras'));
                    ?>
                </div>

                <div class="image fit captioned">
                    <section id="szoveg">                                                                        
                        <ul class="actions">
                            <li><?php echo CHtml::link('Pontszám specialista', array('site/pontszam_specialista_leiras'), array('class' => 'button special big')); ?></li>
                        </ul>                                                                        
                    </section>                                                                        
                    <?php
                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_nagy/k_pontszam_specialista_hu.png');
                        echo CHtml::link($image, array('site/pontszam_specialista_leiras'));
                    ?>
                </div>

                <div class="image fit captioned">
                    <section id="szoveg">                                                                        
                        <ul class="actions">
                            <li><?php echo CHtml::link('Eredmény talentum', array('site/eredmeny_talentum_leiras'), array('class' => 'button special big')); ?><a href="<?php echo Yii::app()->createUrl('site/eredmeny_talentum_leiras'); ?>" class="button special big">Eredmény talentum</a></li>
                        </ul>                                                                        
                    </section>                                                                        
                    <?php
                        $image = CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_nagy/k_eredmeny_talentum_hu.png');
                        echo CHtml::link($image, array('site/eredmeny_talentum_leiras'));
                    ?>
                </div>                                                    
            </div>
        </section>
    </div>
</section>
