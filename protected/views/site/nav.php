
<nav id="nav">
    <?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => Yii::t('lang', 'Kezdőoldal'), 'url' => array('/site/index')),
            array('label' => Yii::t('lang', 'Kártyák'), 'url' => array('/site/kartyak_leiras')),
            array('label' => Yii::t('lang', 'Teljesítmények'), 'url' => array('/site/teljesites_jelzok_leiras')),
            array('label' => Yii::t('lang', 'Eredmények'), 'url' => array('/site/eredmenyek')),
            array('label' => Yii::t('lang', 'Paypal'), 'url' => array('/paypal/buy')),
            array('label' => Yii::t('lang', 'Belépés'),
                'url' => array('site/belepes'),
                'visible' => Yii::app()->user->isGuest),
            array('label' => Yii::app()->user->name .'<b class="caret"></b>', 'url' => '#',
                //'template' => '<span class="glyphicon glyphicon-user"></span> <b class="caret"></b>'. ' (' . Yii::app()->user->name . ')',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'items' => array(
                    array('label' => 'Beállítások',
                        'url' => array('users/updateuser'),
                        'visible' => !Yii::app()->user->isGuest),
                    array('label' => Yii::t('lang', 'Kilépés') ,
                        'url' => array('site/logout'),
                        'visible' => !Yii::app()->user->isGuest), 
                ),
                'itemOptions' => array('class' => 'dropdown pull-right'),
                'visible' => !Yii::app()->user->isGuest
            ),
        //array('label' => Yii::t('lang', 'Belépés'), 'url' => array('/site/belepes')),
        ),
        'htmlOptions' => array('class' => 'nav navbar-nav'),
        'encodeLabel' => false,
        //'activeCssClass' => 'active',
        'submenuHtmlOptions' => array('class' => 'dropdown-menu')
            )
    );
    ?>

</nav>
