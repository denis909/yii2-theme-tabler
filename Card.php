<?php

namespace denis909\themes\tabler;

class Card extends \denis909\theme\Card
{

    public $menu = [];

    public $content;

    public $title;

    public $enabled = true;

    public function init()
    {
        parent::init();
    
        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();

        if (!$content && $this->content)
        {
            $content = $this->content;
        }

        if (!$this->enabled)
        {
            return $content;
        }

        return $this->render('card', [
            'menu' => $this->menu,
            'content' => $content,
            'title' => $this->title
        ]);
    }

}