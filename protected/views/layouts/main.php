
<!DOCTYPE HTML>
<html>
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <?php
            Yii::app()->clientScript->registerCoreScript('jquery');
            Yii::app()->clientScript->registerCoreScript('jquery.ui');
        ?>
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/bootstrap-mini.css'); ?>
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/main_spatial.css'); ?>
        <?php //Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.min.js', CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/bootstrap/js/bootstrap.min.js', CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/skel.min.js', CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/util.js', CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/main.js', CClientScript::POS_END); ?>


        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body class="landing">

        <!-- Header -->
        <?php $this->renderPartial('header'); ?>

        <!-- Banner -->
        <?php $this->renderPartial('banner'); ?>

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
                             <ul class="actions">
                                <li>
                                    <?php echo CHtml::link('Játékmester', array('site/jatekmester_leiras'), array('class' => 'button special big')); ?>
                                </li>    
                            </ul>
                            <?php
                                $image = CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_ajandekkal/jatekmester_ajandekkal.png');
                                echo CHtml::link($image, array('site/jatekmester_leiras'));
                            ?>
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
                            <ul class="actions">
                                <li>
                                    <?php echo CHtml::link('Teljesítés géniusz', array('site/teljesites_geniusz_leiras'), array('class' => 'button special big')); ?>
                                </li>
                            </ul>
                            <?php
                                $image = CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_ajandekkal/teljesites_geniusz_ajandekkal.png');
                                echo CHtml::link($image, array('site/teljesites_geniusz_leiras'));
                            ?>
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
                            <ul class="actions">
                                <li>
                                    <?php echo CHtml::link('Pontszám specialista', array('site/pontszam_specialista_leiras'), array('class' => 'button special big')); ?>

                                </li>
                            </ul>
                            <?php
                            $image = CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_ajandekkal/pontszam_specialista_ajandekkal.png');
                            echo CHtml::link($image, array('site/pontszam_specialista_leiras'));
                            ?>
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
                            <ul class="actions">
                                <li>
                                    <?php echo CHtml::link('Eredmény talentum', array('site/eredmeny_talentum_leiras'), array('class' => 'button special big')); ?>
                                </li>
                            </ul>
                            <?php
                                $image = CHtml::image(Yii::app()->request->baseUrl . '/images/kartyak_ajandekkal/eredmeny_talentum_ajandekkal.png');
                                echo CHtml::link($image, array('site/eredmeny_talentum_leiras'));
                            ?>
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
              
            </div>
        </section>

        <!-- Three -->
        <section id="three" class="wrapper style1">
            <div class="container">
                <header class="major special">
                    <h2>Milyen képességeidet fejleszti a játék?</h2>
                </header>
                <div class="feature-grid">
                    <div class="feature">
                        <div class="image rounded">
                            <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/kepessegek/agy.png'); ?>
                        </div>
                        <div class="content">
                            <header>
                                <h4>Memória</h4>
                            </header>
                            <p>Folyamatosan szükséged lesz a rövid távú memóriádra</p>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="image rounded">
                             <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/kepessegek/lampa.png'); ?>
                        </div>
                        <div class="content">
                            <header>
                                <h4>Problémamegoldás</h4>
                            </header>
                            <p>Előnyt szerzel, vagy hátrányt szenvedsz a különböző szituációkra való reagálásaidtól függően</p>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="image rounded">
                            <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/kepessegek/szem.png'); ?>                         
                        </div>
                        <div class="content">
                            <header>
                                <h4>Szín és alakfelismerés</h4>
                            </header>
                            <p>Különféle típusú, színű és formájú, előre kiszámítható, illetve meglepő alakzatokkal lesz dolgod</p>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="image rounded">
                            <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/kepessegek/fogaskerek.png'); ?>
                        </div>
                        <div class="content">
                            <header>
                                <h4>Kombinációs készség</h4>
                            </header>
                            <p>A rendelkezésedre álló eszközöket a lehető leghatékonyabban kombinálva kell felhasználnod</p>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="image rounded">
                            <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/kepessegek/mosoly.png'); ?>
                        </div>
                        <div class="content">
                            <header>
                                <h4>Stressz tűrés</h4>
                            </header>
                            <p>A játék időre megy, neked pedig méltó ellenfélnek kell lenned</p>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="image rounded">
                            <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/kepessegek/koncentracio.png'); ?>
                        </div>
                        <div class="content">
                            <header>
                                <h4>Koncentráció</h4>
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
        <?php $this->renderPartial('footer'); ?>


    </body>
</html>