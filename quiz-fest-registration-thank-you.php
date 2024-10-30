<?php 
//define('PAGE', 'dashboard');
//$PAGE='transaction';
include 'include/function.php';
//allpagecheck_session();
$obj = new Job;
?>
<?php
$cookie_name = "RegistrationNumber";
if(!isset($_COOKIE[$cookie_name])) {
     //echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     //echo "Cookie '" . $cookie_name . "' is set!<br>";
     //echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quiz-O-Mania Quiz Fest Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Toastr-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
   <style>
       body{
           background-image: url("https://cdn.pixabay.com/photo/2017/03/31/22/51/quiz-2192590_1280.jpg");
       }
   </style>
  
</head>
<body>

<div class="container-sm">
        <div class="card text-center" style="margin: 100px auto;">
          <div class="card-body" style="background-color: #6acdbf; padding: 40px 30px;">
              <h2>You have been successfully registered!!</h2><br/>
              <p>Your Registration number : <?php echo $_COOKIE[$cookie_name]; ?></p>
              <h5>Note: Please keep the registration number handy for the event day.</h5>

              <p>Please follow our facebook page for more updates.</p>
              <a href="https://www.facebook.com/quizomania2004">https://www.facebook.com/quizomania2004</a>
          </div>
        </div>
      
</div>
      
</body>
</html>