<option
        value="<?= $type['id']?>"
    <?php if ($type['id'] == $this->model->type_id) echo ' selected'?>
><?=$tab . $type['name']?>
</option>
<?php if (isset($type['childs']) ) :?>
    <ul>
        <?= $this->getMenuHtml($type['childs'], $tab . '--') ?>
    </ul>
<?php endif; ?>