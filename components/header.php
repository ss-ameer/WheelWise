<!-- header.php -->
<?php

    define('NAV_ITEMS', [
        'default' => [
                'home' => addPage('home'),
                'contact_us' => addPage('contact_us')
            ],
            'logged_in' => [
                'profile' => addPage('profile'),
                'logout' => addConfig('handle_logout') 
            ],
            'logged_out' => [
                'signup' => addPage('signup'),
                'login' => addPage('login'),
            ]
        ]);
    
    function nav_displayItem($name, $link) {
        $replace = '_';
        $replacement = ' ';
        
        return 
        "<li class='nav-item active'>
            <a class='nav-link' href='{$link}'>" . ucwords(str_replace($replace, $replacement, $name)) . "</a>
        </li>"; 
    }

    linkStyle('bootstrap');
    // linkStyle('main');

?>

<h1><?= MAIN_TITLE; ?></h1>

<nav class='navbar navbar-expand-lg bg-light'>
    <ul class='navbar-nav'>

        <?php foreach (NAV_ITEMS as $nav_type => $nav_item): ?>

            <?php if ($nav_type === 'default'): ?>
                <?php foreach ($nav_item as $nav_name => $nav_link): ?>
                    <?= nav_displayItem($nav_name, $nav_link); ?>
                <?php endforeach; ?>

            <?php elseif ($nav_type === 'logged_in' && isset($_SESSION['user_id'])): ?>
                <?php foreach ($nav_item as $nav_name => $nav_link): ?>
                    <?= nav_displayItem($nav_name, $nav_link); ?>
                <?php endforeach; ?>

            <?php elseif ($nav_type === 'logged_out' && !isset($_SESSION['user_id'])): ?>
                <?php foreach ($nav_item as $nav_name => $nav_link): ?>
                    <?= nav_displayItem($nav_name, $nav_link); ?>
                <?php endforeach; ?>
            <?php endif ?>

        <?php endforeach; ?>

    </ul>
</nav>

<?php

  if (session_userCheck($GLOBALS['sql_connection'])) {
    header('Location: ' . addPage('handle_logout')); } 

?>

<!-- /header.php -->