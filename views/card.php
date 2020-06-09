<div class="card">
    <?php if($title || $menu):?>
    <div class="card-header">
        <?php if($title):?><h3 class="card-title"><?= $title;?></h3><?php endif;?>
        <?php if($menu):?>
            <?= yii\base\Widget::widget($menu);?>
        <?php endif;?>
    </div>
    <?php endif;?>
    <div class="card-body"><?= $content;?></div>
</div>