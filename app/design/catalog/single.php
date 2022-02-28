<?php $ad = $this->data['ad']; ?>
<div class="wrapper">
    <h1><?= $ad->getTitle(); ?></h1>
    <div class="image-wrapper">
        <div class="image">
            <img src="<?php echo $ad->getImage() ?>">              
        </div>
        <div class="price">
            <?= $ad->getPrice(); ?> Eur
        </div>
        <div class="details">
            <p>
                <?= $ad->getDescription(); ?>
            </p>
        </div>
    </div>
</div> 