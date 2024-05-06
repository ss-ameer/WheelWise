<!-- contact_us.php -->
<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <header>
        <?php addComponent('header') ?>
    </header>
    <main class="vh-100">
        <section>
            <div class="container my-3">
                <div class="row">
                    <div class="col">
                        <div class="h3 text-center" style="color: #48466d">Let Us From Hear You</div>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-center">We value your feedback and suggestions.<br>Please fill out the form below to tell us what you think about WheelWise or how we can improve your experience.</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col">
                    <form action="#">
                        <div class="container">
                            <textarea name="" id="" cols="10" rows="5" class="form-control shadow border"></textarea>
                        </div>
                        <div class="container p-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check form-check-inline form-check-reverse rounded p-3 border fw-bold" style="background: #effaff; color: #48466d">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">Issue</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse rounded p-3 border fw-bold" style="background: #effaff; color: #48466d">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                        <label class="form-check-label" for="defaultCheck2">Suggestion</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse rounded p-3 border fw-bold" style="background: #effaff; color: #48466d">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                        <label class="form-check-label" for="defaultCheck2">Other</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="feedback_email">Email (Optional):</label>
                                    <input class="form-control mb-3" type="email" name="feedback_email" id="feedback_email" placeholder="youremail@example.com">
                                    <input class="btn w-100 fw-bold" style="background: #78c7e0; color: white;" type="submit" value="Submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- <section>
            <h2>Let Us Hear From You</h2>
            <p>We value your feedback and suggestions. Please fill out the form below to tell us what you think about WheelWise or how we can improve your experience.</p>
            <form action="handle_feedback.php" name="feedback" method="post">
                <div>
                    <label for="feedback_textbox">Feedback:</label> <br>
                    <textarea name="feedback_textbox" id="feedback_textbox" placeholder="Tell us what you think about WheelWise..." rows="5"></textarea>
                </div>
                <div>
                    <label>Feedback Type:</label>
                    <input type="radio" name="feedback_type" id="feedback_type-suggestion" value="suggestion">
                    <label for="feedback_type-suggestion">Suggestion</label>
                    <input type="radio" name="feedback_type" id="feedback_type-issue" value="issue">
                    <label for="feedback_type-issue">Issue</label>
                </div>
                <div>
                    <label for="feedback_email">Email (Optional):</label>
                    <input type="email" name="feedback_email" id="feedback_email" placeholder="youremail@example.com">
                </div>
                <div>
                    <input type="submit" value="Submit">
                </div>
            </form> -->

            <?php if(isset($_POST['Submit'])): ?>
                <p>Thank you for your feedback! We appreciate you taking the time to help us improve.</p>
            <?php endif; ?>    
        </section>
    </main>
    <footer>
    <?php addComponent('footer') ?>
    </footer>
</body>
</html>
<!-- contact_us.php -->