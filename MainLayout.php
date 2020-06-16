<?php

namespace denis909\themes\tabler;

use yii\helper\ArrayHelper;

class MainLayout extends \denis909\theme\MainLayout
{

    public $enableCard = true;

    public $footerMenu = [];

    public $enableShoppingCart = false;

    public $shoppingCartClass = ShoppingCart::class; 

    public $shoppingCart = [];

    public function run()
    {
        return $this->render('main-layout', array_merge($this->params, [
            'enableCard' => $this->enableCard,
            'shoppingCart' => $this->shoppingCart,
            'shoppingCartClass' => $this->shoppingCartClass,
            'footerMenu' => $this->footerMenu,
            'enableShoppingCart' => $this->enableShoppingCart
        ]));
    }

}