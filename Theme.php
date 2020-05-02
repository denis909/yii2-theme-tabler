<?php

namespace denis909\themes\tabler;

abstract class Theme extends \denis909\bootstrap4\Theme
{

    const FOOTER_MENU = FooterMenu::class;

    const MAIN_MENU = MainMenu::class;

    const MAIN_LAYOUT = MainLayout::class;

    const LAYOUT = Layout::class;

    const ASSETS = Assets::class;

    const CART = Cart::class;

    const CART_ITEM = CartItem::class;

    protected $_layout;

    public function mainLayout(array $options = []) : string
    {
        return $this->widget(static::MAIN_LAYOUT, array_merge($options, ['theme' => $this]));
    }

    public function beginLayout(array $options = []) : \yii\base\Widget
    {
        return $this->_layout = $this->beginWidget(static::LAYOUT, array_merge($options, ['theme' => $this]));
    }

    public function endLayout()
    {
        $this->endWidget($this->_layout);
    }

    public function footerMenu(array $options = []) : string
    {
        return $this->widget(static::FOOTER_MENU, $options);
    }

}