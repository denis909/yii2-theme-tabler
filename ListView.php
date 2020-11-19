<?php

namespace denis909\themes\tabler;

class ListView extends \denis909\theme\ListView
{

    public $caption;

    public $captionLayout = '<div class="card-header"><h3 class="card-title">{caption}</h3></div>';

    public $options = ['class' => 'card'];

    public $layout = "{caption}\n{items}\n<div class=\"card-footer d-flex align-items-center\">{summary}{pager}</div>";

    public $summaryLayout = '<p class="m-0 text-muted">{summary}</p>';

    public $itemsLayout = '<div class="card-body border-bottom py-3">{items}</div>';

}