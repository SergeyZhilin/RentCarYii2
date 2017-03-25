<li>
    <a href="">
        <?= $type['name'] ?>
        <?php if (isset($type['childs']) ) :?>
            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
        <?php endif; ?>
    </a>
    <?php if (isset($type['childs']) ) :?>
        <ul>
            <?= $this->getMenuHtml($type['childs']) ?>
        </ul>
    <?php endif; ?>
</li>
