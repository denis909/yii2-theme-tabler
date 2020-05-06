<?php

namespace denis909\themes\tabler;

abstract class Theme extends \denis909\bootstrap4\Theme
{

    const GRID_VIEW = GridView::class;

    const CARD = Card::class;

    const CARD_MENU = CardMenu::class;

    const FOOTER_MENU = FooterMenu::class;

    const MAIN_MENU = MainMenu::class;

    const MAIN_LAYOUT = MainLayout::class;

    const LAYOUT = Layout::class;

    const ASSETS = Assets::class;

    const CART = Cart::class;

    const CART_ITEM = CartItem::class;

    const CART_MENU = CartMenu::class;

    const USER_MENU = UserMenu::class;

    const ACCOUNT_MENU = AccountMenu::class;

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

    public function card(array $options = []) : string
    {
        return $this->widget(static::CARD, array_merge($options, ['theme' => $this]));
    }

    public function cardMenu(array $options = []) : string
    {
        return $this->widget(static::CARD_MENU, $options);
    }

    public function userMenu(array $options = []) : string
    {
        return $this->widget(static::USER_MENU, $options);
    }

    public function cartMenu(array $options = []) : string
    {
        return $this->widget(static::CART_MENU, $options);
    }

    public function accountMenu(array $options = []) : string
    {
        return $this->widget(static::ACCOUNT_MENU, $options);
    }

    public function cart(array $options = []) : string
    {
        return $this->widget(static::CART, array_merge($options, ['theme' => $this]));
    }

    public function cartItem(array $options = []) : string
    {
        return $this->widget(static::CART_ITEM, $options);
    }

}