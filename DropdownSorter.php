<?php

namespace denis909\themes\tabler;

use Yii;
use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\data\Sort;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Inflector;

class DropdownSorter extends \yii\base\Widget
{
    /**
     * @var Sort the sort definition
     */
    public $sort;
    /**
     * @var array list of the attributes that support sorting. If not set, it will be determined
     * using [[Sort::attributes]].
     */
    public $attributes;
    /**
     * @var array HTML attributes for the sorter container tag.
     * @see \yii\helpers\Html::ul() for special attributes.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = ['class' => 'sorter'];
    /**
     * @var array HTML attributes for the link in a sorter container tag which are passed to [[Sort::link()]].
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     * @since 2.0.6
     */
    public $dropdownOptions = [];

    public $defaultDropdownOptions = [
        'class' => 'form-control',
        'prompt' => '...'
    ];

    /**
     * Initializes the sorter.
     */
    public function init()
    {
        parent::init();

        if ($this->sort === null) 
        {
            throw new InvalidConfigException('The "sort" property must be set.');
        }
    }

    /**
     * Executes the widget.
     * This method renders the sort links.
     */
    public function run()
    {
        echo $this->renderSortLinks();
    }

    /**
     * Renders the sort links.
     * @return string the rendering result
     */
    protected function renderSortLinks()
    {
        $items = [];

        $attributes = empty($this->attributes) ? $this->sort->attributes : $this->attributes;

        foreach($attributes as $key => $value)
        {
            if (isset($value['label']))
            {
                $label = $value['label'];
            }
            else
            {
                $label = Inflector::camel2words($key);
            }

            $items[$key] = $label;
        }

        $options = ArrayHelper::merge($this->defaultDropdownOptions, $this->dropdownOptions);

        return Html::dropdownList('sort', Yii::$app->request->get('sort'), $items, $options);
    }

/*

    public function link($attribute, $options = [])
    {
        if (($direction = $this->getAttributeOrder($attribute)) !== null) {
            $class = $direction === SORT_DESC ? 'desc' : 'asc';
            if (isset($options['class'])) {
                $options['class'] .= ' ' . $class;
            } else {
                $options['class'] = $class;
            }
        }

        $url = $this->createUrl($attribute);
        $options['data-sort'] = $this->createSortParam($attribute);

        if (isset($options['label'])) {
            $label = $options['label'];
            unset($options['label']);
        } else {
            if (isset($this->attributes[$attribute]['label'])) {
                $label = $this->attributes[$attribute]['label'];
            } else {
                $label = Inflector::camel2words($attribute);
            }
        }

        return Html::a($label, $url, $options);
    }

*/


}