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
<script>
   $('document').ready(function(){
      $('#signup_form').submit(function(event){
         event.preventDefault();

         var formData = $(this).serialize();

         console.log(formData);

      });
   });
</script>
</head>
<body>
<header>
   <?php addComponent('header') ?>
</header>

<main class="vh-100">
   <div class="container w-50 mt-5 py-3 px-5 rounded shadow">
      <div class="h3 text-center pb-3" style="color: #48466d;">Sign Up</div>
      <form class="row g-2" id="signup_form" name="signup_form" method="post">
         <div class="col-6">
            <input type="text" class="form-control" name="signup_name-user" id="signup_name-user" placeholder="Username">
         </div>
         <div class="col-6">
            <input type="email" class="form-control" name="signup_email" id="signup_email" placeholder="Email">
         </div>
         <div class="col-6">
            <input type="password" class="form-control" name="signup_password" id="signup_password" placeholder="Password">
         </div>
         <div class="col-6">
            <input type="password" class="form-control" name="signup_password-repeat" id="signup_password-repeat" placeholder="Repeat Password">
         </div>
         <div class="col-12 text-center h6">
            Personal Information
         </div>
         <div class="col-3">
            <input type="text" class="form-control" name="signup_name-first" id="signup_name-first" placeholder="First name">
         </div>
         <div class="col-3">
            <input type="text" class="form-control" name="signup_name-middle" id="signup_name-middle" placeholder="Surname">
         </div>
         <div class="col-3">
            <input type="text" class="form-control" name="signup_name-last" id="signup_name-last" placeholder="Last name">
         </div>
         <div class="col-3">
            <div class="input-group">
               <label class="input-group-text" for="signup_suffix">Suffix</label>
               <select class="form-control" id="signup_suffix">
                  <option selected>None</option>
                  <option value="Sr.">Sr.</option>
                  <option value="Jr.">Jr.</option>
                  <option value="">II</option>
                  <option value="III">III.</option>
                  <option value="IV">IV.</option>
                  <option value="V">V.</option>
               </select>
            </div>
         </div>
         <div class="col-6">
            <input class="form-control" type="date" name="signup_date" id="signup_date">
         </div>
         <div class="col-6">
            <div class="input-group">
               <label class="input-group-text" for="signup_gender">Gender</label>
               <select class="form-control" id="signup_gender">
                  <option selected>Choose...</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
               </select>
            </div>
         </div>
         <div class="col-12">
            Address
         </div>
         <div class="col-4">
            <div class="input-group">
               <div class="input-group-text">Province</div>
               <input type="text" class="form-control" name="signup_address-province" id="signup_address-province" placeholder="Nueva Ecija">
            </div>
         </div>
         <div class="col-5">
            <div class="input-group">
               <div class="input-group-text">Municipality</div>
               <input type="text" class="form-control" name="signup_address-municipality" id="signup_address-municipality" placeholder="Cabanatuan">
            </div>
         </div>
         <div class="col-3">
            <div class="input-group">
               <div class="input-group-text">Zip</div>
               <input type="text" class="form-control" name="signup_address-zip" id="signup_address-zip" placeholder="3001">
            </div>
         </div>
         <div class="col-12"></div>
         <div class="col">
            <div class="form-check">
               <input class="form-check-input" type="checkbox" id="signup_aggreement" name="signup_aggreement">
               <label class="form-check-label" for="signup_aggreement">Aggree to our terms and conditions</label><br>
               <small class="text-body-secondary">read our <a href="#">Terms and Conditions</a></small>
            </div>
         </div>
         <div class="col-3">
            <input class="form-control btn fw-bold" style="background: #78c7e0; color: white;" type="submit" name="signup_submit" id="signup_submit" value="Submit">
         </div>
      </form>
   </div>

</main>

<footer>
   <?php addComponent('footer') ?>
</footer>
</body>
</html>
<!-- /signup.php -->