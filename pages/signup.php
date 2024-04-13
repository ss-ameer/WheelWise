<!-- signup.php -->
<?php

   include_once $_SERVER['DOCUMENT_ROOT'] . "/ameer/WheelWise/configs/config_main.php";

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

   <main class="container">
      <section class="container bg-danger">
         <form class="row" action='../configs/handle_signup.php' name='signup' method='POST'>
            <div class="col">
               <input class="form-control" name='signup_name-user' type='text' placeholder='Username'/>
               <input class="form-control" name='signup_email' type='email' placeholder='Email'>
            </div>
            <div class="col-auto">
               <input class="form-control" name='signup_name-first' type='text' placeholder='First Name'/>
               <input class="form-control" name='signup_name-last' type='text' placeholder='Last Name'/>
               <input class="form-control" name='signup_name-middle' type='text' placeholder='Surname'/>
            </div>
            <div>
               <input name='signup_address-province' type="text" placeholder="Province">
               <input name='signup_address-municipality' type="text" placeholder="Municipality">
            </div>
            <div>
               <input type="date" name="signup_dateOfBirth">
            </div>
            <div>
               <input type="radio" name="signup_gender" id="gender-male" value="male">
               <label for="gender-male">Male</label>
               <input type="radio" name="signup_gender" id="gender-female" value="female">
               <label for="gender-female">Female</label>
            </div>
            <div>
               <input name='signup_password' type='password' placeholder='Password'>
               <input name='signup_password-repeat' type='password' placeholder='Repeat Password'>
            </div>
            <div>
               <input name='signup_submit' type='submit' value='Sign Up'>
            </div>

         </form>
      </section>
      <section>
         <?php if(isset($_GET['error'])) :?>
            <p><?= getErrorMessage($_GET['error']) ?></p>
         <?php endif; ?>
      </section>

   </main>

   <footer>
      <?php addComponent('footer') ?>
   </footer>
 </body>
 </html>
 <!-- /signup.php -->