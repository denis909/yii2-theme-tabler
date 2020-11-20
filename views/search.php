<?php

use yii\helpers\Html;

?>
<div class="col-lg-3 ml-auto">
    <form action="<?= $url;?>" class="input-icon my-3 my-lg-0">           
        <?= Html::textInput($name, $value, $options);?>
        <div class="input-icon-addon">
            <i class="fe fe-search"></i>
        </div>
    </form>
</div>