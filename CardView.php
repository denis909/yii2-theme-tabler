<?php

namespace denis909\themes\tabler;

class CardView extends \denis909\theme\ListView
{

    public $options = ['tag' => false];

    public $itemOptions = ['tag' => false];

    public $sorterLayout = '<div class="page-options d-flex">{sorter}</div>';

    public $captionLayout = '<h1 class="page-title">{caption}</h1>';

    public $itemsLayout = '<div class="row row-cards">{items}</div>';

    public $layout = '<div class="page-header">{caption}{summary}</div>{filter}{items}{pager}';

    public $summaryLayout = '<div class="page-subtitle">{summary}</div>';

    public $filterLayout = '<div class="mb-4">{filter}</div>';

}