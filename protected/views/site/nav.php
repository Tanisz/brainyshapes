<nav id="nav">
    <?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => Yii::t('lang', 'Kezdőoldal'), 'url' => array('/site/index')),
            array('label' => Yii::t('lang', 'Kártyák'), 'url' => array('/site/kartyak_leiras')),   
            array('label' => Yii::t('lang', 'Teljesítmények'), 'url' => array('/site/teljesites_jelzok_leiras')),
            array('label' => Yii::t('lang', 'Eredmények'), 'url' => array('/site/eredmenyek')),
            array('label' => Yii::t('lang', 'Belépés'), 'url' => array('/site/belepes')),
        ),
       )
    );
    ?>
</nav>