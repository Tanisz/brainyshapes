<section id="one" class="wrapper style1">
    <div class="container 75%">
        <div class="row 200%">
            <div class="6u 12u$(medium)">
                <header class="major">
                    <h2>Játékmester</h2>
                    <p>A játék legmagasabb szintje.</p>                                                                        
                    <br>
                    <p>A cím tulajdonosa logikailag a felsőfokot képviseli.</p>
                    <br>
                    <p>Képes vagy elérni ezt a szintet?</p>
                </header>
            </div>
            <div class="6u$ 12u$(medium)">
                <p>A Játékmester rangot és az ehhez járó kártyát a játék során akkor nyered el, amikor az összes normál kártyalapot sikeresen megszerezted.<br/>A normál kártyák megszerzése nem könnyű feladat, a képességeid határaid kell feszegetned értük!</p>
                <p>A Játékmester rang elnyeréséért komoly jutalom jár - rendkívüli teljesítményhez ahhoz méltó jutalom illik!</p>
                <p>Legyél Te az első Játékmester!</p>
            </div>
        </div>
    </div>
</section>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container 75%">

        <header class="major special">
            <h2>Játékmester kártya</h2>
            <p>Szerezd meg az összes normál kártyát és tiéd a Játékmester kártya!</p>
        </header>
        <?php
            $image = CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_nagy/k_jatekmester_hu.png');
            echo CHtml::link($image, '#',array('class'=>'image fit'));
        ?>

        <div class="image fit captioned">
            <section id="szoveg">                                                                        
                <ul class="actions">
                    <li>
                        <?php echo CHtml::link('Kártyák', array('site/kartyak_leiras'), array('class'=>'button special big')); ?>
                    </li>
                </ul>                                                                        
            </section>                                                                        
        </div>

        <header class="major special">
            <h2>Jutalom</h2>
            <p>Aki a Játékmester kártyalapot elsőként szerzi meg, az alábbi jutalomban részesül:</p>
        </header>
        <?php
            $image = CHtml::image(Yii::app()->request->baseUrl . '/images/ajandekok/jatekmester_ajandek.png');
            echo CHtml::link($image, '#',array('class'=>'image fit'));
        ?>
    </div>
</section>