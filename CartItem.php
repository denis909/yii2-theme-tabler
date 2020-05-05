<?php

namespace denis909\themes\tabler;

class CartItem extends \yii\base\Widget
{

    public $image;

    public $title;

    public $description;

    public $url;

    public function run()
    {
        return $this->render('cart-item', [
            'image' => $this->image,
            'description' => $this->description,
            'title' => $this->title,
            'url' => $this->url
        ]);
    }

}