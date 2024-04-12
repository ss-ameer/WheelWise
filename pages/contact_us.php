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
    <main>
        <section>
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
            </form>

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