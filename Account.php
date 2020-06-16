<?php

namespace denis909\themes\tabler;

class Account extends \yii\base\Widget
{

    public $avatarUrl;

    public $user;

    public $userMenu = [];

    public $accountMenu = [];

    public $username;

    public $accountDescription;

    public function run()
    {
        return $this->render('account', [
            'avatarUrl' => $this->avatarUrl,
            'user' => $this->user,
            'userMenu' => $this->userMenu,
            'accountMenu' => $this->accountMenu,
            'username' => $this->username,
            'accountDescription' => $this->accountDescription
        ]);
    }

}