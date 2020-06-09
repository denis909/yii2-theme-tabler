<?php

namespace denis909\themes\tabler;

class DetailView extends \denis909\bootstrap4\DetailView
{

    public $options = ['class' => 'table table-striped detail-view'];

    public $template = '<tr><td{captionOptions}><div class="text-muted">{label}</div></td><td{contentOptions}>{value}</td></tr>';

}