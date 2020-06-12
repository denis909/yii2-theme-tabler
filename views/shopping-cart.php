<div class="dropdown d-none d-md-flex">
    <a class="nav-link icon" data-toggle="dropdown">
        <i class="fe fe-shopping-cart"></i>
        <?php if(count($items) > 0):?><span class="nav-unread"></span><?php endif;?>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <?php foreach($items as $item):?>
            <?= $itemClass::widget($item);?>
        <?php endforeach;?>
        <?php if($items && $menu):?>
            <div class="dropdown-divider"></div>
        <?php endif;?>
        <?= $menu;?>
    </div>
</div>