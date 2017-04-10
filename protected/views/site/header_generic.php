

<header id="header">

    <h1><strong>
            <?php  echo CHtml::link(CHtml::encode($this->pageTitle), array('site/index'));   ?>
        </strong>

    </h1>
    <?php $this->renderPartial('/site/nav')?>
</header>

<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>