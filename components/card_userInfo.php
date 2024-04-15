<!-- card_userInfo.php -->
<?php 
    
    $user = sql_userGet ($GLOBALS['sql_connection'], $_SESSION['user_id']);
    echo gettype(sql_userGet($GLOBALS['sql_connection'], '26'));

?>
<div class="card">
    <div class="row">
        <div class="col-4 d-flex justify-content-center align-items-center bg-danger">
            <img src="https://placehold.co/150x150" class="img-fluid rounded" alt="...">
        </div>
        <div class="col">
            <div class="card-body">
                <div class="row">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">
                                    <?= "{$user['user_name_first']} {$user['user_name_middle']} {$user['user_name_last']}"; ?>
                                </div>
                                <?= $user['user_name'] ?>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <?= "" ?>
                            </li>
                            <li class="list-group-item">
                                <?= "Address: {$user['user_address_province']}, {$user['user_address_municipality']}, 3126" ?>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <?= "Name: {$user['user_name_first']}, {$user['user_name_middle']}, {$user['user_name_last']}" ?>
                            </li>
                            <li class="list-group-item">
                                <?= "Address: {$user['user_address_province']}, {$user['user_address_municipality']}, 3126" ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- /card_userInfo.php -->