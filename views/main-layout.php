<?php

use denis909\yii\Html;

use denis909\themes\tabler\Assets;
use denis909\themes\tabler\ShoppingCart;
use denis909\themes\tabler\ShoppingCartItem;
use denis909\themes\tabler\Card;
use denis909\themes\tabler\MainMenu;
use denis909\themes\tabler\FooterMenu;
use denis909\themes\tabler\Layout;
use denis909\themes\tabler\Account;

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
            <?= $shoppingCartClass::widget($shoppingCart);?>

            <?= Account::widget([
                'user' => $user,
                'avatarUrl' => $avatarUrl,
                'username' => $username,
                'accountDescription' => $accountDescription,
                'userMenu' => $userMenu,
                'accountMenu' => $accountMenu
            ]);?>
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

                <?= $searchClass::widget($search);?>

                <div class="col-lg order-lg-first">
                    <?= $mainMenuClass::widget($mainMenu);?>
                </div>
            </div>
        </div>
    </div>
    <div class="my-3 my-md-5">
        <div class="container">
        <?php 

            $card = Card::begin([
                'enabled' => $enableCard,
                'title' => $cardTitle,
                'menu' => $actionMenu
            ]);

            foreach($infoMessages as $message)
            {
                echo $messageClass::widget(['type' => 'info', 'message' => $message]);
            }

            foreach($errorMessages as $message)
            {
                echo $messageClass::widget(['type' => 'error', 'message' => $message]);
            }

            foreach($successMessages as $message)
            {
                echo $messageClass::widget(['type' => 'success', 'message' => $message]);
            }

            echo $content;

            $card::end();

        ?>
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