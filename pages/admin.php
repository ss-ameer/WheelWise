<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';
    linkSC('bootstrap');
    linkSC('icon', 'asset');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <style>
        body {
            /* background-color: #fbfbfb; */
        }
        @media (min-width: 991.98px) {
        main {
            padding-left: 240px;
        }
        }

        /* Sidebar */
        .sidebar {
            background: lightslategray;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            padding: 58px 0 0; /* Height of navbar */
            /* box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%); */
            width: 240px;
            z-index: 600;
        }

        @media (max-width: 991.98px) {
        .sidebar {
            width: 100%;
        }
        }
        .sidebar .active {
            border-radius: 5px;
            /* box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%); */
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: 0.5rem;
            overflow-x: hidden;
            overflow-y: auto;
        }
    </style>

    <script>
        $(document).ready(function(){
            $('.main-content').addClass('d-none');

            $('.list-group-item-action').click(function(event) {
                event.preventDefault();

                var target = $(this).data('target');

                $('.main-content').addClass('d-none');
                $('#' + target).removeClass('d-none');
            });
        });
    </script>
</head>
<body>
    <header>
        <nav class="collapse sidebar d-lg-block sidebar">
            <div class="position-sticky">
                <div class="text-center bg-dark">
                    <p class="fs-6 fw-medium font-monospace" style="color: white">Syed Ameer Sibuma<br><span class="fw-light" style="color: gray">#0001</span></p>
                </div>
                <hr>
                <div class="list-group list-group-flush mx-3 rounded">
                    <a href="#" class="list-group-item list-group-item-action py-2" data-target="main-dashboard" aria-current="true">
                        <i class="bi bi-speedometer"></i> <span>Main Dashboard</span>
                    </a>
                </div>
                <hr>
                <div class="list-group list-group-flush mx-3 rounded">
                    <a href="#" class="list-group-item list-group-item-action py-2" data-target="users" aria-current="true">
                        <i class="bi bi-person-square"></i> <span>Users</span>
                    </a>
                </div>
                <div class="list-group list-group-flush mx-3 rounded mt-1">
                    <a href="#" class="list-group-item list-group-item-action py-2" data-target="verification" aria-current="true">
                        <i class="bi bi-check-square-fill"></i> <span>Verifications</span>
                    </a>
                </div>
                <div class="list-group list-group-flush mx-3 rounded mt-1">
                    <a href="#" class="list-group-item list-group-item-action py-2" aria-current="true">
                        <i class="bi bi-file-earmark-text-fill"></i> <span>Transactions</span>
                    </a>
                </div>
                <div class="list-group list-group-flush mx-3 rounded mt-1">
                    <a href="#" class="list-group-item list-group-item-action py-2" aria-current="true">
                        <i class="bi bi-exclamation-square-fill"></i> <span>Reports</span>
                    </a>
                </div>
                <div class="list-group list-group-flush mx-3 rounded mt-1">
                    <a href="#" class="list-group-item list-group-item-action py-2" aria-current="true">
                        <i class="bi bi-x-square-fill"></i> <span>Issues</span>
                    </a>
                </div>
                <hr>
                <div class="list-group list-group-flush mx-3 rounded mt-1">
                    <a href="../pages/profile.php" class="list-group-item list-group-item-action py-2 text-center" aria-current="true">
                        <span>Profile View</span>
                    </a>
                </div>
                <div class="list-group list-group-flush mx-3 rounded mt-1">
                    <a href="../configs/handle_logout.php" class="list-group-item list-group-item-action py-2 text-center bg-danger" aria-current="true">
                        <span>Logout</span>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="main-content d-none" id="main-dashboard">
            <!-- main dashboard -->
            <section>
                <div class="container p-3 border mb-3">
                    <div class="row">
                        <div class="col">
                            <div class="card p-3">
                                <div class="card-body">
                                    <h4 class="card-title">Users</h4>
                                    <span class="lead">Logged in: 20</span>
                                    <p class="card-text text-muted">
                                        Logged Out: 30 <br>
                                        Total: 50
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-1">
                                <div class="card-body">
                                    <h4 class="card-title">Transactions</h4>
                                    <span class="lead">Pending: 30 </span>
                                    <p class="card-text text-muted">
                                        In-progress: 10<br>
                                        Completed: 20 <br>
                                        Total: 60
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-3">
                                <div class="card-body">
                                    <h4 class="card-title">Messages</h4>
                                    <span class="lead">Conversations: 55</span>
                                    <p class="card-text text-muted">
                                        Public: 300 <br>
                                        Total: 1500
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-3">
                                <div class="card-body">
                                    <h4 class="card-title">Pages</h4>
                                    <span class="lead">Logged in: 10</span>
                                    <p class="card-text text-muted">
                                        Logged Out: 20 <br>
                                        Total: 30
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                    <div class="col">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h4 class="card-title">Verifications</h4>
                                    <hr>
                                    <span class="lead">Current: 10</span><br>
                                    <p class="card-text text-muted">Verified: 10 <br> Total: 20</p>
                                </div>
                                <div class="card-footer text-center">
                                    <span class="card-text text-muted">Open: 40</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h4 class="card-title">Reports</h4>
                                    <hr>
                                    <span class="lead">Current: 10</span><br>
                                    <span class="card-text text-muted">Resolved: 10</span><br>
                                    <span class="card-text text-muted">Total: 20</span>
                                </div>
                                <div class="card-footer text-center">
                                    <span class="card-text text-muted">Open: 20</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h4 class="card-title">Issues</h4>
                                    <hr>
                                    <span class="lead">Current: 10</span><br>
                                    <span class="card-text text-muted">Completed: 10</span><br>
                                    <span class="card-text text-muted">Total: 20</span>
                                </div>
                                <div class="card-footer text-center">
                                    <span class="card-text text-muted">Open: 20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- table view -->
            <section>
                <div class="container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Sender</th>
                                <th scope="col">Recipient</th>
                                <th scope="col">Timestamp</th>
                                <th scope="col">Content</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>51</td>
                                <td>21</td>
                                <td>24-04-24 13:06:56</td>
                                <td>Hello</td>
                                <td>Sent</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
        <div class="main-content d-none" id="users">
            this is the users
        </div>
        <div class="main-content d-none" id="verification">

        </div>
    </main>
    <footer><?php linkScript('bootstrap'); ?></footer>
</body>
</html>