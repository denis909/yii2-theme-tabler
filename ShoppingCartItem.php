<?php

namespace denis909\themes\tabler;

class ShoppingCartItem extends \denis909\theme\ShoppingCartItem
{

    public $image;

    public $title;

    public $description;

    public $url;

    public function run()
    {
        return $this->render('shopping-cart-item', [
            'image' => $this->image,
            'description' => $this->description,
            'title' => $this->title,
            'url' => $this->url
        ]);
    }

}