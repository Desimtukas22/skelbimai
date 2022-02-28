<div class="wrapper">
    <table>
        <tr>
            <td>Change status</td>
            <td>Id</td>
            <td>Title</td>
            <td>Views</td>
            <td>Description</td>
            <td>Link</td>
            <td>Author</td>
            <td>Price</td>
            <td>Year</td>
            <td>Vin</td>
            <td>Action</td>
        </tr>
        <form action="<?= $this->url('admin/massadsupdate') ?>" method="POST">
        <?php
        /**
         * @var \Model\Ad $ad
         */
        foreach($this->data['ads'] as $ad): ?>
        <tr>
        <td><input type="checkbox" name="ad_id[]" value="<?= $ad->getId() ?>"></td>
            <td><?= $ad->getId()?></td>
            <td><?= $ad->getTitle()?></td>
            <td><?= $ad->getViews()?></td>
            <td><?= $ad->getDescription()?></td>
            <td><?= $ad->getSlug()?></td>
            <td><?= $ad->getUserId()?></td>
            <td><?= $ad->getYear()?></td>
            <td><?= $ad->getPrice()?></td>
            <td><?= $ad->getVin()?></td>
            <td>
                <a href="<?= $this->url('admin/adedit', $ad->getId())?>">
                    edit
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
        </table>
    <select name="action">
        <option value="">Aktyvumo statusas</option>
        <option value="1">Įjungti</option>
        <option value="0">Išjungti</option>
        <option value="2">Ištrinti</option>
    </select>
    <input type="submit" value="Atnaujinti">
    </form>
</div> 