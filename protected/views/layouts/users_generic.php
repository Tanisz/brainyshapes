<?php /* @var $this Controller */ ?>
<?php /* $this->beginContent('//layouts/main'); ?>
  <div class="span-19">
  <div id="content">
  <?php echo $content; ?>
  </div><!-- content -->
  </div>
  <div class="span-5 last">
  <div id="sidebar">
  <?php if(!Yii::app()->user->isGuest) $this->widget('UserMenu'); ?>
  </div>
  </div>
  <?php $this->endContent(); ?> */
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php
        Yii::app()->clientScript->registerCoreScript('jquery');
        Yii::app()->clientScript->registerCoreScript('jquery.ui');
        ?>
        <?php //Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/bootstrap/css/bootstrap.min.css'); ?>
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/bootstrap-mini.css'); ?>
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/main_spatial_generic.css'); ?>
        <?php //Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.min.js', CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/bootstrap/js/bootstrap.min.js', CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/skel.min.js', CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/util.js', CClientScript::POS_END); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/main.js', CClientScript::POS_END); ?>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <body>
        <!-- Header -->
        <?php $this->renderPartial('/site/header_generic'); ?>
        <!-- Main -->
        <section id="main" class="wrapper">
            <div class="container 75%">

                <?php echo $content; ?>

            </div>

            
<!--                <div id="sidebar">
                    <?php //if (!Yii::app()->user->isGuest) $this->widget('UserMenu'); ?>
                </div>-->
            </div
        </section>
        <!-- Footer -->
        <?php $this->renderPartial('/site/footer'); ?>
    </body>
</html>   
