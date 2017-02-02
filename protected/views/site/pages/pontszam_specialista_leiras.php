<section id="one" class="wrapper style1">
    <div class="container 75%">
        <div class="row 200%">
            <div class="6u 12u$(medium)">
                <header class="major">
                    <h2>Pontszám specialista</h2>
                    <p>Csak a pontszám számít. Semmi más.</p>
                    <br>
                    <p>Összpontosítás és a lehetőségek maximális kiaknázása.</p>                                                                        
                    <br>
                    <p>Tulajdonosát ezek és a maximalizus jellemzi.</p>
                </header>
            </div>
            <div class="6u$ 12u$(medium)">
                <p>
                    A cím Megszerzése "egyszerű". 
                    <br>
                    Szerezd meg a kártyán álló pontszámot!
                <p>
                    Talán könnyűnek tűnik a feladat, de nem veheted félvállról.
                    <br>
                    Minden pontot be kell zsebelned, a kis pontok is számítanak!
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container 75%">

        <header class="major special">
            <h2>Pontszám Specialista kártya</h2>
            <p>Szerezd meg a kártyán álló pontszámt és tulajdonosa leszel a Pontszám Specialista kártyának!</p>
        </header>
        
        <?php
            $image = CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_nagy/k_pontszam_specialista_hu.png');
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
            $image = CHtml::image(Yii::app()->request->baseUrl . '/images/ajandekok/pontszam_specialista_ajandek.png');
            echo CHtml::link($image, '#',array('class'=>'image fit'));
        ?> 
    </div>
</section>
