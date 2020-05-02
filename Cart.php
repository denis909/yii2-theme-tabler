<?php

namespace denis909\themes\tabler;

class Cart extends \yii\base\Widget
{

    public $theme;

    public $items = [];

    public $menu = [];

    public $emptyMessage = 'Cart is empty.';

    public function run()
    {
        return $this->render('cart', [
            'theme' => $this->theme,
            'menu' => $this->menu,
            'items' => $this->items,
            'emptyMessage' => $this->emptyMessage
        ]);
    }

}