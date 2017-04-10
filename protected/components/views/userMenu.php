<ul>
    <li><?php echo CHtml::link('Create New Post',array('site/index')); ?></li>
    <li><?php echo CHtml::link('Manage Posts',array('site/index')); ?></li>
    <li><?php echo CHtml::link('Approve Comments',array('site/index'))
        . ' (' .')'; ?></li>
    <li><?php echo CHtml::link('Logout',array('site/logout')); ?></li>
</ul>