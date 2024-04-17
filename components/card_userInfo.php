<!-- card_userInfo.php -->
<?php 
    
    $user = sql_userGet ($GLOBALS['sql_connection'], $_GET['id']);

?>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col">

                <div class="fw-bold">
                    <?= "{$user['user_name_first']} {$user['user_name_middle']} {$user['user_name_last']}"; ?>
                </div>

                <?= $user['user_name'] ?>

            </div>
            <hr>
            <div class="row">
                
                <div class="col">
                    <div>Followers:</div>
                    36k
                </div>
                <div class="col">
                    <div>Average:</div>
                    4.5
                </div> 
                <div class="col">
                    <div>Transactions:</div>
                    100
                </div>

            </div>

        </div>
    </div>
</div> 
<!-- /card_userInfo.php -->