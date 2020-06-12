<?php

namespace denis909\themes\tabler;

class ShoppingCart extends \denis909\theme\ShoppingCart
{

    public $items = [];

    public $menu = [];

    public $emptyMessage = 'Cart is empty.';

    public $menuClass = ShoppingCartMenu::class;

    public $itemClass = ShoppingCartItem::class;

    public $menuOptions = [];

    public $defaultMenuOptions = []; 

    public function run()
    {
        $menuClass = $this->menuClass;

        $menuOptions = array_merge($this->defaultMenuOptions, $this->menuOptions, [
            'items' => $this->menu
        ]);

        $menu = $menuClass::widget($menuOptions);

        return $this->render('shopping-cart', [
            'emptyMessage' => $this->emptyMessage,
            'itemClass' => $this->itemClass,
            'items' => $this->items,
            'menuClass' => $this->menuClass,
            'menu' => $menu
        ]);
    }

}