<?php

namespace denis909\themes\tabler;

class AlertMessage extends \yii\base\Widget
{

    public $type = 'error';

    public $message;

    public function run()
    {
        return $this->render('alert-message', [
            'message' => $this->message,
            'type' => $this->type
        ]);
    }

}