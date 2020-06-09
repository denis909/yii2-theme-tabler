<?php

namespace denis909\themes\tabler;

class Card extends \denis909\theme\Card
{

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
            'menu' => $this->menu,
            'content' => $this->content,
            'title' => $this->title
        ]);
    }

}