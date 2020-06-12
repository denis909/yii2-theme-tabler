<?php

namespace denis909\themes\tabler;

use yii\helper\ArrayHelper;

class MainLayout extends \yii\base\Widget
{

    public $content;

    public $breadcrumbs = [];

    public $mainMenu = [];

    public $actionMenu = [];

    public $footerMenu = [];

    public $copyright = 'Copyright © 2019 - {year} <a href="#">My Company</a>.';

    public $enableCard = true;

    public $cardTitle;

    public $userMenu = [];

    public $accountMenu = [];

    public $defaultLayoutOptions = ['assetsClass' => Assets::class];

    public $layoutOptions = [];

    public $shoppingCartClass = ShoppingCart::class; 

    public $shoppingCart = [];

    public $user;

    public $username;

    public $accountDescription;

    public function run()
    {
        return $this->render('main-layout', [
            'content' => $this->content,
            'breadcrumbs' => $this->breadcrumbs,
            'actionMenu' => $this->actionMenu,
            'mainMenu' => $this->mainMenu,
            'cardTitle' => $this->cardTitle,
            'enableCard' => $this->enableCard,
            'footerMenu' => $this->footerMenu,
            'userMenu' => $this->userMenu,
            'accountMenu' => $this->accountMenu,
            'shoppingCart' => array_merge(['class' => $this->shoppingCartClass], $this->shoppingCart),
            'copyright' => str_replace('{year}', date('Y'), $this->copyright),
            'layoutOptions' => array_merge($this->defaultLayoutOptions, $this->layoutOptions),
            'user' => $this->user,
            'accountDescription' => $this->accountDescription,
            'username' => $this->username
        ]);
    }

}