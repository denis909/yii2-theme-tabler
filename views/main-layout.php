<?php

use denis909\yii\Html;

use denis909\themes\tabler\Assets;
use denis909\themes\tabler\ShoppingCart;
use denis909\themes\tabler\ShoppingCartItem;
use denis909\themes\tabler\Card;
use denis909\themes\tabler\UserMenu;
use denis909\themes\tabler\AccountMenu;
use denis909\themes\tabler\MainMenu;
use denis909\themes\tabler\FooterMenu;
use denis909\themes\tabler\Layout;

$assets = Assets::register($this);

?>
<?php $layout = Layout::begin($layoutOptions);?>
<div class="page">
  <div class="flex-fill">
    <div class="header py-4">
      <div class="container">
        <div class="d-flex">
          <a class="header-brand" href="./index.html">
            <img src="<?= $assets->baseUrl;?>/demo/brand/tabler.svg" class="header-brand-img" alt="tabler logo">
          </a>
          <div class="d-flex order-lg-2 ml-auto">
            <?php
            /*
            <div class="nav-item d-none d-md-flex">
              <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary" target="_blank">Source code</a>
            </div>
            */
            ?>
            <?php if($enableShoppingCart):?>
            <?= ShoppingCart::widget($shoppingCart);?>
            <?php endif;?>
            <div class="dropdown">
              <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                <?php if(!empty($user->avatarUrl)):?>
                  <span class="avatar" style="background-image: url(<?= $user->avatarUrl;?>)"></span>
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
          </div>
          <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
            <span class="header-toggler-icon"></span>
          </a>
        </div>
      </div>
    </div>
    <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
        <div class="container">
            <div class="row align-items-center">
              <!--
              <div class="col-lg-3 ml-auto">
                <form class="input-icon my-3 my-lg-0">
                  <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                  <div class="input-icon-addon">
                    <i class="fe fe-search"></i>
                  </div>
                </form>
              </div>
              -->
                <div class="col-lg order-lg-first">
                    <?= MainMenu::widget(['items' => $mainMenu]);?>
                </div>
            </div>
        </div>
    </div>
    <div class="my-3 my-md-5">
        <div class="container">
            <?= Card::widget([
              'enabled' => $enableCard,
              'title' => $cardTitle,
              'content' => $this->render('_messages', [
                  'messageClass' => $messageClass,
                  'infoMessages' => $infoMessages,
                  'errorMessages' => $errorMessages,
                  'successMessages' => $successMessages
              ]) . $content,
              'menu' => $actionMenu
            ]);?>
        </div>
    </div>
  </div>
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">    
                <div class="col-auto ml-lg-auto">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <?= FooterMenu::widget(['items' => $footerMenu]);?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                    <?= $copyright;?> Theme by <a href="https://codecalm.net" target="_blank">codecalm.net</a>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php $layout::end();?>