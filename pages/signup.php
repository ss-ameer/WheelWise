<!-- signup.php -->
<?php

   include_once $_SERVER['DOCUMENT_ROOT'] . "/ameer/capstone_project/configs/config_main.php";

   linkStyle('main', '../');

?> 

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Signup</title>
 </head>
 <body>
   
   <header>
      <?php addComponent('header') ?>
   </header>

   <main>
      
      <form action='../configs/handle_signup.php' name='signup' method='POST'>
         <div>
            <input name='signup_email' type='email' placeholder='Email'>
         </div>
         
         <div>
            <input name='signup_name-user' type='text' placeholder='Username'/>
            <input name='signup_name-first' type='text' placeholder='First Name'/>
            <input name='signup_name-last' type='text' placeholder='Last Name'/>
            <input name='signup_name-middle' type='text' placeholder='Surname Name'/> 
         </div>
         <div>
         </div>
         <div>
            <input type="date" name="signup_dateOfBirth">
         </div>
         <div>
            <input type="radio" name="signup_gender" id="gender-male" value="male">
            <label for="gender">Male</label>
            <input type="radio" name="signup_gender" id="gender-female" value="female">
            <label for="gender">Female</label>
         </div>
         <div>
            <input name='signup_password' type='password' placeholder='Password'>
            <input name='signup_password-repeat' type='password' placeholder='Repeat Password'>
         </div>
         <div>
            <input name='signup_submit' type='submit' value='sign up'>
         </div>

      </form>
      <?php 
 
         if (isset($_GET['error'])) {
            if ($_GET['error'] !== 'none') {
               $message = inputErrorMessage($_GET['error']);
            }
         
            else if ($_GET['error'] === 'none') {
               $message = 'you are signed up!';
            }

            echo (ucfirst($message));
            
         }

      ?>

   </main>

   <footer>
      <?php addComponent('footer') ?>
   </footer>

 </body>
 </html>
 <!-- /signup.php -->