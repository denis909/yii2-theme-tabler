<?php

namespace denis909\themes\tabler;

use Yii;

class Layout extends \yii\base\Widget
{

    public $theme;

    public $content;

    public $lang;

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

        $lang = $this->lang;

        if (!$lang)
        {
            $lang = substr(Yii::$app->language, 0, 2);
        }

        return $this->render('layout', [
            'content' => $content,
            'theme' => $this->theme,
            'lang' => $lang
        ]);
    }

}