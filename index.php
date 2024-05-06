<!-- index.php -->
<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <header>
        <?php addComponent('header') ?>
    </header>

    <main>
        <!-- hero section -->
        <section>
            <div class="container-fluid vh-70">
                <div class="row align-items-center">
                    <!-- hero text -->
                    <div class="col-6 text-center">
                        <div class="display-6 text-muted mb-2">
                            Rent <b style="color: #48466d;">More</b>, Think <b style="color: #48466d;">Less</b>
                        </div>
                        <div class="text-muted lead">
                            <mark style="background: #effaff;">Your Trusted User Authenticator</mark>
                        </div>
                        <br>
                        <p class="fs-6 text-muted text-center">Enhances the security and confidence<br>of all parties involved in car rental platforms.</p>
                        <div>
                            <button class="btn" style="background: #78c7e0; color: #ffffff"><a class="text-reset text-decoration-none" href="./pages/signup.php"><b>Get Started</b></a></button>
                        </div>
                    </div>
                    <!-- image -->
                    <div class="col-6" style="background: #effaff;">
                        <img class="img-fluid" src="./assets/img/hero-img-2.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- quote -->
        <section>
            <div class="container-fluid vh-30" style="background: #abedd8;">
                <figure class="text-center d-grid pt-3">
                    <blockquote class="blockquote">
                        <p class="fs-6 mb-2">Our commitment to this project stems from a strategic imperative to establish a robust<br> system that serves as a secure gateway for users, ensuring peace of mind and reliability.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Ferdinand Serame <cite title="Source Title">WheelWise</cite>
                    </figcaption>
                </figure>
            </div>
        </section>
        <!-- FAQ -->
        <section>
            <div class="container p-3">
                <div class="row">
                    <div class="col">
                        <div class="h3 text-center" style="color: #48466d;">FAQ</div>
                    </div>
                    <hr>
                </div>
                <!-- FAQ body -->
                <div class="row">
                    <div class="col-6">
                        <div class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, fugit? Aperiam, tempora dignissimos! Blanditiis totam asperiores, mollitia consectetur vel omnis.</p>
                    </div>
                    <div class="col">
                        <div class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit?</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quam harum delectus aut nisi amet fuga iste! Quasi, error? Dolores!</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section>
            <div class="container-fluid vh-30 p-3">
                <div class="row bg-warning">
                    <div class="col">
                        <div class="d-flex flex-row bg-info w-50 m-auto bg-info">
                            <img src="https://placehold.co/100" alt="" class="p-3 rounded-circle img-fluid">
                            <div class="w-50 text-center bg-danger m-auto">
                                <p class="h6">Ferdinand Serame</p>
                                <p class="">Team Member, WheelWise</p>
                            </div>
                        </div>
                    </div>
                    <div class="col m-auto">
                        <figure class="text-center d-grid p-2" style="background: #abedd8;">
                            <blockquote class="blockquote">
                                <p>A well-known quote, contained in a blockquote element.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section> -->
    
        <!-- <?php foreach(sql_userGetAll($sql_connection) as $row){
            foreach($row as $key => $data){
                echo "$data <br>";
            } echo "<br>";
        }; ?>

        <div id="resultArea"> -->

        </div>
    </main>

    <footer>
        <?php addComponent('footer'); ?>
    </footer>

</body>
</html>
<!-- /index.php -->