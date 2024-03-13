<?php
    $navArr = [
        'Home',
        'Shantidomz',
        'Profile',
        'About Us'
    ];
?>

<ul>
    <?php foreach($navArr as $nav_item) {
    echo '<li><a>'. $nav_item . '</a></li>'; }; ?>
</ul>
