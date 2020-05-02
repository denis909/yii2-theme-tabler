<?php

namespace denis909\themes\tabler;

class MainLayout extends \yii\base\Widget
{

    public $content;

    public $theme;

    public $breadcrumbs = [];

    public $actionMenu = [];

    public $footerMenu = [];

    public $footerMenuOptions = [];

    public $copyright = 'Copyright © 2019 - {year} <a href="#">My Company</a>.';

    public function run()
    {
        return $this->render('main-layout', [
            'content' => $this->content,
            'theme' => $this->theme,
            'copyright' => str_replace('{year}', date('Y'), $this->copyright),
            'footerMenu' => $this->theme->footerMenu(array_merge($this->footerMenuOptions, ['items' => $this->footerMenu]))
        ]);
    }

}