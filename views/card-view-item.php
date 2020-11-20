<?php

use yii\helpers\Html;

?>

<div class="col-sm-6 col-lg-3">
    <div class="card __p-3">
        <?php if($image):?>
            <a href="<?= $url;?>" class="__mb-3">
                <?= Html::img($image, $imageOptions);?>
            </a>
        <?php endif;?>
        <div class="card-body d-flex flex-column p-4">
            <h4><a href="<?= $url;?>"><?= $name;?></a></h4>
            <?php if($description):?><div class="text-muted"><?= $description;?></div><?php endif;?>
            <div class="d-flex align-items-center __pt-5 mt-auto p-0" style="padding: 0px;">
                <?php if($price):?>
                <div class="ml-auto text-muted">
                    <span class="icon d-none d-md-inline-block ml-3">
                        <?= $price;?>
                    </span>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>