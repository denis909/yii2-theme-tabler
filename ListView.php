<?php

namespace denis909\themes\tabler;

class ListView extends \denis909\theme\ListView
{

    public $options = ['class' => 'card'];

    // <div class="card-header"><h3 class="card-title">Invoices</h3></div>

    public $layout = "<div class=\"card-body border-bottom py-3\">{items}</div>\n<div class=\"card-footer d-flex align-items-center\"><p class=\"m-0 text-muted\">{summary}</p>{pager}</div>";

}