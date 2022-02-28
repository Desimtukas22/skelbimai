<h1>Visi skelbimai</h1>
<?php $pages = ceil($this->data['count'] / 4); ?>
<div class="wrapper">
    <?php foreach ($this->data['ads'] as $ad): ?>
        <div class="box">
            <a class="link" href="<?php echo $this->url('catalog/show', $ad->getSlug()) ?>">             
                <div class="image">
                    <img src="<?php echo $ad->getImage() ?>">              
                </div>
                <div class="description">
                    <div class="title">
                        <?php echo $ad->getTitle() ?><br><br>
                    </div>
                    <div class="year">
                        <?php echo $ad->getYear() ?> metai<br> 
                    </div>
                    <div class="price">
                        <?php echo $ad->getPrice() ?> Eur
                    </div>  
                </div>
            </a>
        </div>
    <?php endforeach; ?>
    </div>
    <div class="pagination">
        <ul>
            <?php for($i = 1; $i <=  $pages; $i++): ?>
                <li>
                    <a href="<?= $this->url('catalog').'?p='.$i; ?>">
                        <?= $i; ?>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
</div> 
