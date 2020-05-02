<?php

namespace denis909\themes\tabler;

class Card extends \yii\base\Widget
{

    public $theme;

    public $menu = [];

    public $content;

    public $title;

    public $enabled = true;

    public function run()
    {
        if (!$this->enabled)
        {
            return $content;
        }

        return $this->render('card', [
            'theme' => $this->theme,
            'menu' => $this->menu,
            'content' => $this->content,
            'title' => $this->title
        ]);
    }

}