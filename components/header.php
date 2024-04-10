<!-- header.php -->
<?php

    $sql_connection = mysqli_connect('localhost', 'root', '' , 'wheelwise_db');

    $tableName = 'users';
    echo '<br>';
    $durot = addConfig('handle_logout', 'echo');
    echo '<br>' . CONFIGS_DIR['handle_logout'];
    echo '<br>' . addPage('handle_logout');

    // navigation
    define('NAV_ITEMS', 
    [
        'default' => ['home' => addPage('home')],
        
        'logged_in' => [
            'profile' => addPage('profile'),
            'logout' => addPage('handle_logout')//CONFIGS_DIR['handle_logout']//$durot//addConfig('handle_logout')//'../capstone_project/configs/handle_logout.php' 
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
      <?php if ($nav_type === 'default' || ($nav_type === 'logged_in' && isset($_SESSION['user_id']))): ?>
          <?php foreach ($nav_item as $nav_name => $nav_link): ?>
            <li>
                <a href="<?= $nav_link; ?>" id="<?= $nav_name ?>"><?= ucfirst($nav_name); ?></a>
            </li>
          <?php endforeach ?>
      <?php elseif ($nav_type === 'logged_out' && !isset($_SESSION['user_id'])): ?>
          <?php foreach ($nav_item as $nav_name => $nav_link): ?>
            <li>
                <a href="<?= $nav_link; ?>" id="<?= $nav_name ?>"><?= ucfirst($nav_name); ?></a>
            </li>
          <?php endforeach ?>
      <?php endif ?>
    <?php endforeach ?>
  </ul>
</nav>

<!-- /header.php -->