<!-- header.php -->
<?php

    // navigation
    define('NAV_ITEMS', [
        'home',
        'about'
    ]);
    
?>
    <h1><?php echo(MAIN_TITLE) ?></h1>
    <nav>
        <ul>
            <?php foreach (NAV_ITEMS as $nav_item): ?>
                <li><?= ucfirst($nav_item) ?></li>
            <?php endforeach ?>
        </ul>
    </nav>
<!-- /header.php -->