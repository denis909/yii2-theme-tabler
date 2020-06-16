<?php

use denis909\themes\tabler\UserMenu;
use denis909\themes\tabler\AccountMenu;
use yii\helpers\Html;

?>
<div class="dropdown">
    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
        <?php if(!empty($avatarUrl)):?>
            <span class="avatar" style="background-image: url(<?= $avatarUrl;?>)"></span>
        <?php else:?>
            <span class="avatar">
                <i class="fa fa-user" style="vertical-align: middle; font-size: 100%;"></i>
            </span>
            <?php
            /*
            <span class="avatar" style="background-image: url(<?= $assets->baseUrl;?>/demo/faces/female/25.jpg)"></span>
            */
            ?>
        <?php endif;?>
        <span class="ml-2 d-none d-lg-block">
            <?php if($username):?>
                <span class="text-default"><?= Html::encode($username);?></span>
            <?php endif;?>
            <?php if($accountDescription):?>
                <small class="text-muted d-block mt-1"><?= Html::encode($accountDescription);?></small>
            <?php endif;?>
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        
        <?= UserMenu::widget(['items' => $userMenu]);?>
        
        <?php if($userMenu && $accountMenu):?>
            <div class="dropdown-divider"></div>
        <?php endif;?>
        
        <?= AccountMenu::widget(['items' => $accountMenu]);?>
    
    </div>
</div>