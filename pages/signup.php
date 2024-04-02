<!-- signup.php -->
<?php

   include_once $_SERVER['DOCUMENT_ROOT'] . "/ameer/capstone_project/configs/config_main.php";

   addStyle('main', '../');

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
      
      <form action='<?php addConfig('handle_signup') ?>' method='POST'>
         <input name='signup_name-user' type='text' placeholder='Username'/>
         <input name='signup_name-first' type='text' placeholder='First Name'/>
         <input name='signup_name-last' type='text' placeholder='Last Name'/>
         <input name='signup_email' type='email' placeholder='Email'>
         <input name='signup_password' type='password' placeholder='Password'>
         <input name='signup_password-repeat' type='password' placeholder='Repeat Password'>
         <input name='signup_submit' type='submit' value='submit'>
      </form>

   </main>

   <footer>
      <?php addComponent('footer') ?>
   </footer>

 </body>
 </html>
 <!-- /signup.php -->