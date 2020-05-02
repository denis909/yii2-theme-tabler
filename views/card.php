<div class="card">
    <?php if($title || $menu):?>
    <div class="card-header">
        <?php if($title):?><h3 class="card-title"><?= $title;?></h3><?php endif;?>
        <?= $theme->cardMenu(['items' => $menu]);?>
    </div>
    <?php endif;?>
    <div class="card-body"><?= $content;?></div>
</div>