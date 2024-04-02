<!-- header.php -->
<?php

    // navigation
    define('NAV_ITEMS', [
        'home' => addPage('home'),
        'signup' => addPage('signup'),
        'login' => addPage('login')
    ]);
    
?>
<h1><?= MAIN_TITLE; ?></h1>
<nav>
    <ul>
        <?php foreach (NAV_ITEMS as $nav_item => $nav_path): ?>
            <li>
                <a href="<?= $nav_path ?>" id="<?= $nav_item ?>"><?= ucfirst($nav_item); ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</nav>

<!-- /header.php -->