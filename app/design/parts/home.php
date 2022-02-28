<h1>Automobilių pasaulis</h1>
<h2>Naujausi skelbimai</h2>
<div class="pop-skelbimas-wrap">
    <?php foreach ($this->data['populars'] as $popAd): ?>
        <div class="box">
            <?= $popAd->getTitle() ?>
        </div>
    <?php endforeach; ?>
</div>
<h2>Populiariausi skelbimai</h2>
<div class="pop-skelbimas-wrap">
    <?php foreach ($this->data['latest'] as $popAd): ?>
        <div class="box">
            <?= $popAd->getTitle() ?>
        </div>
    <?php endforeach; ?>
</div>

<div class="image">


