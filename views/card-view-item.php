<?php

use yii\helpers\Html;

?>
<div class="col-sm-6 col-lg-3">
    <div class="card p-3">
        <?php if($image):?>
            <a href="<?= $url;?>" class="mb-3">
                <?= Html::img($image, $imageOptions);?>
            </a>
        <?php endif;?>
        <div class="d-flex align-items-center px-2">
          <h4><a href="<?= $url;?>"><?= $name;?></a></h4>
          <?php if($description):?>
            <div class="text-muted"><?= $description;?></div>
          <?php endif;?>
          <?php
          /*
          <div class="avatar avatar-md mr-3" style="background-image: url(demo/faces/male/41.jpg)"></div>
          <div>
          <div>Nathan Guerrero</div>
          <small class="d-block text-muted">12 days ago</small>
          </div>
          <div class="ml-auto text-muted">
          <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 112</a>
          <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 42</a>
          </div>
          */
          ?>
        </div>
    </div>
</div>