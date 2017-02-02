<section id="one" class="wrapper style1">
    <div class="container 75%">
        <div class="row 200%">
            <div class="6u 12u$(medium)">
                <header class="major">
                    <h2>Teljesítés Géniusz</h2>
                    <p>A teljesítések mindentudója.</p>
                    <br>
                    <p>Birtokosát finomhangolt logika és összetett gondolkodás jellemzi.</p>
                </header>
            </div>
            <div class="6u$ 12u$(medium)">
                <p>A Teljesítés Géniusz titulus csak egy módon kapható meg: teljesítsd az összes teljesítés jelzőt!</p>
                <p>Elnyerése rendkívüli teljesítéssel jár, de hozzá mérhető az érte járó jutalom is!</p>
                <p>Legyen játék közben fél szemed mindig a teljesítés listán: szerezd meg a Teljesítés Géniusz címet!</p>
            </div>
        </div>
    </div>
</section>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container 75%">
        <header class="major special">
            <h2>Teljesítés Géniusz kártya</h2>
            <p>Teljesítsd az összes teljesítés jelzőt és birtokba veheted a Teljesítés Géniusz kártyát!</p>
        </header>
        <?php
            $image = CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_nagy/k_teljesites_geniusz_hu.png');
            echo CHtml::link($image, '#',array('class'=>'image fit'));
        ?> 
        <div class="image fit captioned">
            <section id="szoveg">                                                                        
                <ul class="actions">
                    <li><?php echo CHtml::link('Teljesítmények', array('site/teljesites_jelzok_leiras'), array('class' => 'button special big')); ?></li>
                </ul>                                                                        
            </section>                                                                        
        </div>
        <header class="major special">
            <h2>Jutalom</h2>
            <p>Aki a Teljesítés Géniusz kártyalapot elsőként szerzi meg, az alábbi jutalomban részesül:</p>
        </header>
        <?php
            $image = CHtml::image(Yii::app()->request->baseUrl . '/images/ajandekok/teljesites_geniusz_ajandek.png');
            echo CHtml::link($image, '#',array('class'=>'image fit'));
        ?> 
    </div>
</section>