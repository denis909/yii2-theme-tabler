<?php

namespace denis909\themes\tabler;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class CardViewItem extends \yii\base\Widget
{

    public $url;

    public $name;

    public $image;

    public $imageOptions = [];

    public $defaultImageOptions = ['class' => 'rounded', 'alt' => ''];
   
    public $description;

    public $price;

    public function run()
    {
        $imageOptions = ArrayHelper::merge($this->defaultImageOptions, $this->imageOptions);

        return $this->render('card-view-item', [
            'url' => $this->url,
            'name' => $this->name,
            'image' => $this->image,
            'description' => $this->description,
            'imageOptions' => $imageOptions,
            'price' => $this->price
        ]);
    }

}