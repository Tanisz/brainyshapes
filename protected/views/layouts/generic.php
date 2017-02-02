<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php
            Yii::app()->clientScript->registerCoreScript('jquery');
            Yii::app()->clientScript->registerCoreScript('jquery.ui');
        ?>
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/main_spatial_generic.css'); ?>
        <?php //Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.min.js', CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/skel.min.js', CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/util.js', CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/main.js', CClientScript::POS_END); ?>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <body>
        <!-- Header -->
        <?php $this->renderPartial('header_generic'); ?>
        <!-- Main -->
        <section id="main" class="wrapper">
            <div class="container 75%">

                <?php echo $content; ?>

            </div>
        </section>
        <!-- Footer -->
        <?php $this->renderPartial('footer'); ?>
    </body>
</html>   
