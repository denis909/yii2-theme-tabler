<?php

namespace denis909\themes\tabler;

use yii\helpers\ArrayHelper;

class Search extends \yii\base\Widget
{

    public $enabled = false;

    public $url = ['/search'];

    public $name = 's';

    public $value;

    public $options = [];

    public $defaultOptions = [
        'placeholder' => 'Search&hellip;',
        'class' => 'form-control header-search',
        'tabindex' => 1,
        'type' => 'search'
    ];

    public function run()
    {
        if (!$this->enabled)
        {
            return '';
        }

        return $this->render('search', [
            'options' => ArrayHelper::merge($this->defaultOptions, $this->options),
            'url' => $this->url,
            'name' => $this->name,
            'value' => $this->value
        ]);
    }

}
