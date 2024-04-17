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

    linkSC('bootstrap');
    linkSC('icon', 'asset')
    // linkStyle('main');

?>

<nav class='navbar navbar-expand-lg bg-warning'>
    <div class="container-fluid bg-danger">
        <a href="#" class="navbar-brand"><?= MAIN_TITLE; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class='navbar-nav me-auto mb-2 mb-lg-0 bg-danger'>
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
    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                    <!-- <div id="search_displayResults"></div> -->
                </li>
    
            </ul>
            <div>
                <form class="d-flex my-auto bg-primary" name="search" action="<?= addConfig('handle_search'); ?>" method="POST">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                        <input class="form-control" type="search" placeholder="Search" name="search_input" id="search_input" autocomplete="off">
                    </div>
                </form>
                <!-- search results display -->
                <div class="d-flex justify-content-end" id="search_displayResults">
                    <!-- <p class="bg-primary">debug</p> -->
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    // for live searching
    $("#search_input").on('keyup', function(){
    let searchInput = $(this).val();
    
    $.post('<?= addConfig('handle_search'); ?>', {searchInput:searchInput}, function(data){
        $("#search_displayResults").html(data);
    }); });
</script>

<?php

  if (session_userCheck($GLOBALS['sql_connection'])) {
    header('Location: ' . addPage('handle_logout')); } 

?>

<!-- /header.php -->