<!-- header.php -->
<?php
$sql_connection = mysqli_connect('localhost', 'root', '', 'wheelwise_db');

$tableName = 'users';

// navigation
define('NAV_ITEMS', [
    'default' => ['home' => addPage('home')],
    'logged_in' => [
        'profile' => addPage('profile'),
        'logout' => addConfig('handle_logout') 
    ],
    'logged_out' => [
        'signup' => addPage('signup'),
        'login' => addPage('login'),
    ]
]);
?>

<h1><?= MAIN_TITLE; ?></h1>
<nav>
    <ul>
        <?php foreach (NAV_ITEMS as $nav_type => $nav_item): ?>
            <?php if ($nav_type === 'default' || ($nav_type === 'logged_in' && sql_sessionValidityCheck($sql_connection, $tableName)) || ($nav_type === 'logged_out' && !sql_sessionValidityCheck($sql_connection, $tableName))): ?>
                <?php foreach ($nav_item as $nav_name => $nav_link): ?>
                    <li>
                        <a href="<?= $nav_link; ?>" id="<?= $nav_name ?>"><?= ucfirst($nav_name); ?></a>
                    </li>
                <?php endforeach; ?>
            <?php endif ?>
        <?php endforeach; ?>
    </ul>
</nav>



<!-- /header.php -->