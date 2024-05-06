<!-- profile.php -->
<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';
    // $user = sql_userGet ($GLOBALS['sql_connection'], $_GET['id']);

    // foreach ($_SESSION as $key => $value) { echo '<br>' . $key . ': ' . $value; }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script>
        $(document).ready(function(){
            $('[data-bs-toggle="popover"]').popover();

            $('#verification-status-toggle').click(function(){
                $('.verification-status-lvl').toggleClass('d-none');
            });
        });
    </script>
</head>
<body>
    <header>
        <?php addComponent('header') ?>
    </header>

    <main>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="row p-3 rounded shadow">
                        <div class="col d-flex" style="height: 160px">
                                <img class="img-fluid mx-3 rounded" src="https://picsum.photos/200/200" alt="">
                            <div class="">
                                <p class="fw-bold fs-5">Syed Ameer Sibuma 
                                    <span class="badge rounded-pill text-bg-success">L3: Fully verified</span>
                                    <i class="bi bi-question-circle-fill text-muted" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-title="Verification status" data-bs-content="These are the badges that will display to the users depending on the level of the users verification." id="verification-status-toggle"></i>
                                    <span class="badge rounded-pill text-bg-warning d-none verification-status-lvl">L2: Verified</span>
                                    <span class="badge rounded-pill text-bg-secondary d-none verification-status-lvl">L1: Semi Verified</span>
                                    <span class="badge rounded-pill text-bg-danger d-none verification-status-lvl">L0: Unverified</span>
                                </p>
                                <p class="fw-light">@meerah</p>
                                <hr>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, ullam? Libero maiores obcaecati nobis tenetur at mollitia laboriosam et velit!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- body -->
                <!-- left body -->
                <div class="col-4 rounded">
                    <div class="card mb-2"  style="background: #3d84a8; color: white;">
                        <div class="card-body">
                            <div class="fs-4 text-center">Pages <i class="bi bi-shop"></i></div>
                            <div class="row">
                                <div class="col d-flex">
                                    <div>
                                        <img class="img-fluid rounded me-2" style="height: 60px" src="https://picsum.photos/200/200" alt="#">
                                    </div>
                                    <div>
                                        <div class="fs-6">Toto Auto Shop and Rentals</div>
                                        <div class="fs-6">EST: 2024</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="fs-4 text-center" style="color: #48466d;">Info <i class="bi bi-info-circle-fill"></i></div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="fw-bold">Full Name</div>
                                    Syed Ameer Sibuma
                                </li>
                                <li class="list-group-item">
                                    <div class="fw-bold">Address</div>
                                    Llanera, Nueva Ecija, 3126
                                </li>
                                <li class="list-group-item">
                                    <div class="fw-bold">Email</div>
                                    sibuma.syedameer@gmail.com
                                </li>
                                <li class="list-group-item">
                                    <div class="fw-bold">Mobile</div>
                                    09656304264
                                </li>
                                <li class="list-group-item">
                                    <div class="fw-bold">Website</div>
                                    www.wheelwise.com
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="fs-4 text-center" style="color: #48466d;">Socials <i class="bi bi-info-circle-fill"></i></div>
                            <ul class="list-group list-group">
                                <li class="list-group-item text-center">
                                    <button class="btn btn-primary h-100 w-100 fw-semibold">Facebook <i class="bi bi-facebook"></i></button>
                                </li>
                                <li class="list-group-item text-center">
                                    <button class="btn h-100 w-100 fw-semibold" style="background: linear-gradient(90deg, rgba(64,93,230,1) 0%, rgba(193,53,132,1) 35%, rgba(245,96,64,1) 100%); color: white">Instagram <i class="bi bi-instagram"></i></button>
                                </li>
                                <li class="list-group-item text-center">
                                    <button class="btn btn-dark h-100 w-100 fw-semibold">Twitter-X <i class="bi bi-twitter-x"></i></button>
                                </li>
                                <li class="list-group-item text-center">
                                    <button class="btn btn-primary h-100 w-100 fw-semibold">LinkedIn <i class="bi bi-linkedin"></i></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- right body -->
                <div class="col-8 p-2">
                    <div class="nav nav-tabs mb-3">
                        <li class="nav-item">
                            <button class="nav-link" type="button" data-bs-toggle="collapse" data-bs-target="#visitor-features" aria-expanded="false" aria-controls="collapseExample">Visitors Features <i class="active bi bi-question-circle-fill text-muted" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="These are the features that will show up if the viewer is a visitor."></i></button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" type="button" data-bs-toggle="collapse" data-bs-target="#owner-features" aria-expanded="false" aria-controls="collapseExample">Owner Features <i class="bi bi-question-circle-fill text-muted" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="These are the features that will show up if the viewer is the owner of the account."></i></button>
                        </li>
                    </div>
                        <div class="row g-2 border mb-3 rounded collapse" id="visitor-features">
                            <div class="col-12 collapse d-flex justify-content-center rounded p-3 bg-tertiary">
                                <button class="mx-2 btn btn-primary"><i class="bi bi-plus-square-fill"></i> Follow</button>
                                <button class="mx-2 btn btn-success"><i class="bi bi-chat-right-text-fill"></i> Message</button>
                                <button class="mx-2 btn btn-secondary"><i class="bi bi-file-earmark-text"></i> Transact</button>
                                <button class="mx-2 btn btn-warning"><i class="bi bi-star-fill"></i> Review</button>
                                <button class="mx-2 btn btn-danger"><i class="bi bi-exclamation-square-fill"></i> Report</button>
                            </div>
                        </div>
                        <div class="row g-2 border mb-3 rounded collapse" id="owner-features">
                            <div class="col-12 d-flex justify-content-center rounded p-3 pb-0 bg-tertiary">
                                <button class="mx-2 btn btn-primary"><i class="bi bi-plus-square-fill"></i> Followers</button>
                                <button class="mx-2 btn btn-success"><i class="bi bi-chat-right-text-fill"></i> Messages</button>
                                <button class="mx-2 btn btn-secondary"><i class="bi bi-file-earmark-text"></i> Transactions</button>
                            </div>
                            <div class="col-12 d-flex justify-content-center rounded p-3 pt-0 bg-tertiary">
                                <button class="mx-2 btn btn-secondary"><i class="bi bi-file-earmark-text"></i> Verification</button>
                                <button class="mx-2 btn btn-warning"><i class="bi bi-shop"></i> Create Page</button>
                                <button class="mx-2 btn btn-secondary"><i class="bi bi-gear-fill"></i> Settings</button>
                            </div>
                        </div>
                        <div class="row g-2 p-3 border rounded">
                            <div class="col-12">
                                <div class="text-center fw-bold fs-3">4.6 <i class="bi bi-star-fill"></i></div>
                                <div class="text-center">Based on 100 reviews</div>
                            </div>
                            <div class="col-2 text-center"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <div class="col-9 p-1">
                                <div class="progress" role="progressbar">
                                    <div class="progress-bar" style="width: 65%;"></div>
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="text-center">65</div>
                            </div>
                            <div class="col-2 text-center">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>
                            </div>
                            <div class="col-9 p-1">
                                <div class="progress" role="progressbar">
                                    <div class="progress-bar" style="width: 30%;"></div>
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="text-center">30</div>
                            </div>
                            <div class="col-2 text-center">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
                            </div>
                            <div class="col-9 p-1">
                                <div class="progress" role="progressbar">
                                    <div class="progress-bar" style="width: 5%;"></div>
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="text-center">5</div>
                            </div>
                            <div class="col-2 text-center">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
                            </div>
                            <div class="col-9 p-1">
                                <div class="progress" role="progressbar">
                                    <div class="progress-bar" style="width: 0%;"></div>
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="text-center">0</div>
                            </div>
                            <div class="col-2 text-center">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
                            </div>
                            <div class="col-9 p-1">
                                <div class="progress" role="progressbar">
                                    <div class="progress-bar" style="width: 0%;"></div>
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="text-center">0</div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col d-flex">
                                                    <div>
                                                        <img class="img-fluid rounded me-2" style="height: 60px" src="https://picsum.photos/200/200" alt="#">
                                                    </div>
                                                    <div>
                                                        <div class="fs-6 text-body-secondary">@jimjim </div>
                                                        <div class="fs-6">Jimel Basco </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <div class="">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore at consequatur totam cupiditate enim a reiciendis, hic ullam eum accusantium.
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="fs-6 text-end text-body-secondary">23/04/24</div>
                                    </div>
                                </div>
                            </div>

                            <div class="">Read More</div>

                            <!-- review form -->
                            <div class="col-12 p-3 border rounded">
                                <div>Leave a Review</div>
                                <form class="">
                                    <textarea class="form-control my-2" name="" id="" rows="1"></textarea>
                                    <input class="btn form-control fw-bold" style="background: #78c7e0; color: white;" type="submit" value="Submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="row">
            
            <div class="col-3">
                <div class="row">
                    <img class="img-fluid img-thumbnail rounded embed-ratio" src="https://placehold.co/150x150" alt="...">
                </div>
            </div>

            <div class="col bg-dark">
                <div class="card">
                    <div class="card-body">
                        <?php $surname = $user['user_name_middle'] !== '' ? $user['user_name_middle'] . ' ' : '' ?>
                        <div class="fw-bold"><?= $user['user_name_first'] . ' ' . $surname . $user['user_name_last'] ?></div> 
                        <?= $user['user_name'] ?>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Bio:
                    </div>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit iusto id magnam sequi ad quae tenetur sit nemo quidem magni?
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-3 bg-danger">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, sit quisquam hic assumenda asperiores nostrum omnis harum odit, facilis voluptatum beatae nobis velit voluptatibus ad distinctio iure deserunt. Asperiores quaerat animi voluptatum quod laudantium distinctio dignissimos possimus laboriosam labore! Quas praesentium eligendi autem aut, adipisci dicta corporis? Est, nesciunt cum?</p>
            </div>

        </div> -->

    </main>
    <footer class="mt-3">
        <?php addComponent('footer'); ?>
    </footer>
</body>
</html>
<!-- profile.php -->