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
    <div class="container 75%">

        <header class="major special">
            <h2>Eredmény Talentum kártya</h2>
            <p>Szerezd a legtöbb pontot a játék bevezető pályáin és nyerd el az Eredmény Talentum kártyát!</p>
        </header>
        
        <?php
            $image = CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_nagy/k_eredmeny_talentum_hu.png');
            echo CHtml::link($image, '#',array('class'=>'image fit'));
        ?> 

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
        <?php
            $image = CHtml::image(Yii::app()->request->baseUrl . '/images/ajandekok/eredmeny_talentum_ajandek.png');
            echo CHtml::link($image, '#',array('class'=>'image fit'));
        ?> 
    </div>
</section>