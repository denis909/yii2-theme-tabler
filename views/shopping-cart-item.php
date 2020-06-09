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