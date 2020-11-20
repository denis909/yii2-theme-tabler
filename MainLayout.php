<?php

namespace denis909\themes\tabler;

use yii\helper\ArrayHelper;

class MainLayout extends \denis909\theme\MainLayout
{

    public $mainMenuClass = MainMenu::class;

    public $enableCard = true;

    public $searchClass = Search::class;

    public $search = [];

    public $footerMenu = [];

    public $shoppingCartClass = ShoppingCart::class; 

    public $shoppingCart = [];

    public $avatarUrl;

    public function run()
    {
        return $this->render('main-layout', array_merge($this->params, [
            'enableCard' => $this->enableCard,
            'shoppingCart' => $this->shoppingCart,
            'shoppingCartClass' => $this->shoppingCartClass,
            'footerMenu' => $this->footerMenu,
            'searchClass' => $this->searchClass,
            'search' => $this->search
        ]));
    }

}