<?php

namespace denis909\themes\tabler;
/*
    <div class="card-options">
      <a href="#" class="btn btn-primary btn-sm">Action 1</a>
      <a href="#" class="btn btn-secondary btn-sm ml-2">Action 2</a>
    </div>
*/
class CardMenu extends \denis909\yii\Menu
{

    public $tag = 'div';

    public $options = ['class' => 'card-options'];

    public $itemTag = false;

    public $itemLinkOptions = ['class' => 'btn btn-sm'];

}