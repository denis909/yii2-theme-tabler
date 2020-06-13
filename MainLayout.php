<?php

namespace denis909\themes\tabler;

use yii\helper\ArrayHelper;

class MainLayout extends \denis909\theme\MainLayout
{

    public $enableCard = true;

    public $footerMenu = [];

    public $shoppingCartClass = ShoppingCart::class; 

    public $shoppingCart = [];

    public function getParams()
    {
        return array_merge(parent::getParams(), [
            'enableCard' => $this->enableCard,
            'shoppingCart' => $this->shoppingCart,
            'shoppingCartClass' => $this->shoppingCartClass,
            'footerMenu' => $this->footerMenu
        ]);
    }

    public function run()
    {
        return $this->render('main-layout', $this->params);
    }

}