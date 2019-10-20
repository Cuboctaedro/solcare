<?php
$items = $pages->listed();
if($items->isNotEmpty()):
?>

<nav id="nav" class="has_dropdown container mx-auto">
    <button class="dropdown_button  ml-6 mb-6 w-8 h-8" aria-expanded="false">
        <span class="hide">Menu</span>
        <div class="burger"></div>
        <div class="burger"></div>
        <div class="burger"></div>
    </button>
    <ul class="dropdown_menu" id="main-menu">
        <?php foreach($items as $item): ?>
            <li class="menuitem">
                <a class=" <?php e($item->isOpen(), ' is_active ') ?>" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</nav>

<?php endif ?>
