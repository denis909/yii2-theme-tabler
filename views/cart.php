<div class="dropdown d-none d-md-flex">
    <a class="nav-link icon" data-toggle="dropdown">
        <i class="fe fe-shopping-cart"></i>
        <?php if(count($items) > 0):?><span class="nav-unread"></span><?php endif;?>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <?php if($items):?>
            <?php foreach($items as $item):?>
                <?= $theme->cartItem($item);?>
            <?php endforeach;?>
        <?php else:?>
            <?= $theme->cartItem(['description' => $emptyMessage]);?>
        <?php endif;?>
        <div class="dropdown-divider"></div>
        <?= $theme->cartMenu(['items' => $menu]);?>
    </div>
</div>