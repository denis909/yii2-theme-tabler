<a href="<?= $url;?>" class="dropdown-item d-flex">
    <?php if($image):?>
        <span class="avatar mr-3 align-self-center" style="background-image: url(<?= $image;?>)"></span>
    <?php endif;?>
    <div>
        <?= $title;?>
        <?php if($description):?>
            <div class="small text-muted"><?= $description;?></div>
        <?php endif;?>
    </div>
</a>
<?php

/*

    <a href="#" class="dropdown-item d-flex">
        <span class="avatar mr-3 align-self-center" style="background-image: url(<?= $assets->baseUrl;?>/demo/faces/male/41.jpg)"></span>
        <div>
        <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
        <div class="small text-muted">10 minutes ago</div>
        </div>
    </a>

    <a href="#" class="dropdown-item d-flex">
        <span class="avatar mr-3 align-self-center" style="background-image: url(<?= $assets->baseUrl;?>/demo/faces/female/18.jpg)"></span>
        <div>
        <strong>Rose</strong> deployed new version of NodeJS REST Api V3
        <div class="small text-muted">2 hours ago</div>
        </div>
    </a>

*/?>