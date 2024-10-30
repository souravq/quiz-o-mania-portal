<?php 
//define('PAGE', 'dashboard');
//$PAGE='transaction';
include 'include/function.php';
//allpagecheck_session();
$obj = new Job;
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
        <div class="card text-center">
      <div class="card-body" style="background-color: #6acdbf;">
          <!--<div>
              <img src="./header.jpg" style="width: 100%; height:100%"/>
          </div>-->
          <h1>QUIZ FEST 2023</h1>
          <h5>Season 5 : Never Like Before</h5>
          <h3>Organized by - QUIZ-O-MANIA </h3>
          <h4>(Quiz & Social Welfare Organization)</h4><br/>
          <h2>Please Select (Click) The Event Type:</h2>
          <div class="btn-group" role="group" aria-label="Basic toggle button group" style="margin-top:30px; margin-bottom: 30px">
              <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" value="schoolQuiz" onclick="getRadioData()">
              <label class="btn btn-outline-primary" for="btnradio1">School Quiz</label>
            
              <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" value="openGeneralQuiz" onclick="getRadioData()">
              <label class="btn btn-outline-primary" for="btnradio2">Open General Quiz</label>
            
              <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" value="megaDidiNumberOne" onclick="getRadioData()">
              <label class="btn btn-outline-primary" for="btnradio3">Mega Didi No 1</label>
         </div>
      </div>
      
  </div>
        <div class="card" id="schoolQuiz" style="display: none;">
          <div class="card-header text-center" style="background-color: #b5e0e9;">
            <h3>School Quiz</h3>
          </div>
          <div class="card-body" style="background-color: #c2f2f1;">
             <form id="schoolQuizForm">
                 <div class="row">
                    <div class="col-md-6">
                        <label for="participantonename" class="form-label">Participant 1 Name :</label>
                        <input type="text" class="form-control" id="participantonename" name="schoolQuizParticipantOneName" placeholder="Enter First Participant Name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="participanttwoname" class="form-label"></label>
                        <div class="form-control">
                            <label for="participanttwoname" class="form-label">Meal Preference for Participant 1 :</label>
                             <div class="form-check form-check-inline" style="margin-left: 20px;">
                              <input class="form-check-input" type="radio" name="studentQuizParticipantOneMeal" id="inlineRadio1" value="veg" required>
                              <label class="form-check-label" for="inlineRadio1">veg</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left: 20px;">
                              <input class="form-check-input" type="radio" name="studentQuizParticipantOneMeal" id="inlineRadio2" value="nonveg" required>
                              <label class="form-check-label" for="inlineRadio2">Non Veg</label>
                            </div>
                            
                        </div>
                          
                    </div>
                     
                 </div><br/>
                 <div class="row">
                    <div class="col-md-6">
                        <label for="participanttwoname" class="form-label">Participant 2 Name :</label>
                        <input type="text" class="form-control" id="participanttwoname" name="schoolQuizParticipantTwoName" placeholder="Enter Second Participant Name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="participanttwoname" class="form-label"></label>
                        <div class="form-control">
                            <label for="participanttwoname" class="form-label">Meal Preference for Participant 2 :</label>
                             <div class="form-check form-check-inline" style="margin-left: 20px;">
                              <input class="form-check-input" type="radio" name="studentQuizParticipantTwoMeal" id="inlineRadio1" value="veg" required>
                              <label class="form-check-label" for="inlineRadio1">veg</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left: 20px;">
                              <input class="form-check-input" type="radio" name="studentQuizParticipantTwoMeal" id="inlineRadio2" value="nonveg" required>
                              <label class="form-check-label" for="inlineRadio2">Non Veg</label>
                            </div>
                            
                        </div>
                          
                    </div>
                     
                 </div><br/>
                 <div class="row">
                    <div class="col-md-6">
                        <label for="participantmobilenumber" class="form-label">Mobile Number of Any Team Member :</label>
                        <input type="tel" class="form-control" id="participantmobilenumber" name="studentQuizParticipantMobileNumber" placeholder="Enter Mobile Number"  minlength="10" maxlength="13" required>
                    </div>
                     <div class="col-md-6">
                        <label for="participantaddress" class="form-label">Address of Any Team Member :</label>
                        <input type="text" class="form-control" id="participantaddress" name="studentQuizParticipantAddress" placeholder="Enter Address" required>
                    </div>
                    
                     
                 </div><br/>
                 
                  <div class="text-center">
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
                </form>
          </div>
          <div class="card-footer text-muted text-center" style="background-color: #3e5974 ;">
            <h5 style="color: white;"> Ghatal Aurobinda Stadium | Whatsapp - 8436128659 | https://www.facebook.com/quizomania2004 | Developed by Quiz O Mania</h5>
          </div>
    </div>
        <div class="card" id="openGeneralQuiz" style="display: none;">
          <div class="card-header text-center" style="background-color: #b5e0e9;">
            <h3>Open General Quiz</h3>
          </div>
          <div class="card-body" style="background-color: #c2f2f1;">
             <form id="openGeneralQuizForm">
                  <div class="row">
                    <div class="col-md-6">
                        <label for="participantonename" class="form-label">Participant 1 Name :</label>
                        <input type="text" class="form-control" id="participantonename" name="openGeneralQuizParticipantOneName" placeholder="Enter First Participant Name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="participanttwoname" class="form-label"></label>
                        <div class="form-control">
                            <label for="participanttwoname" class="form-label">Meal Preference for Participant 1 :</label>
                             <div class="form-check form-check-inline" style="margin-left: 20px;">
                              <input class="form-check-input" type="radio" name="openGeneralQuizParticipantOneMeal" id="inlineRadio1" value="veg" required>
                              <label class="form-check-label" for="inlineRadio1">veg</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left: 20px;">
                              <input class="form-check-input" type="radio" name="openGeneralQuizParticipantOneMeal" id="inlineRadio2" value="nonveg" required>
                              <label class="form-check-label" for="inlineRadio2">Non Veg</label>
                            </div>
                            
                        </div>
                          
                    </div>
                     
                 </div><br/>
                  <div class="row">
                    <div class="col-md-6">
                        <label for="participanttwoname" class="form-label">Participant 2 Name :</label>
                        <input type="text" class="form-control" id="participanttwoname" name="openGeneralQuizParticipantTwoName" placeholder="Enter Second Participant Name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="participanttwoname" class="form-label"></label>
                        <div class="form-control">
                            <label for="participanttwoname" class="form-label">Meal Preference for Participant 2 :</label>
                             <div class="form-check form-check-inline" style="margin-left: 20px;">
                              <input class="form-check-input" type="radio" name="openGeneralQuizParticipantTwoMeal" id="inlineRadio1" value="veg" required>
                              <label class="form-check-label" for="inlineRadio1">veg</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left: 20px;">
                              <input class="form-check-input" type="radio" name="openGeneralQuizParticipantTwoMeal" id="inlineRadio2" value="nonveg" required>
                              <label class="form-check-label" for="inlineRadio2">Non Veg</label>
                            </div>
                            
                        </div>
                          
                    </div>
                     
                 </div><br/>
                <div class="row">
                    <div class="col-md-6">
                        <label for="participantmobilenumber" class="form-label">Mobile Number of Any Team Member :</label>
                        <input type="tel" class="form-control" id="participantmobilenumber" name="openGeneralQuizParticipantMobileNumber"  placeholder="Enter Mobile Number"  minlength="10" maxlength="13" required>
                    </div>
                     <div class="col-md-6">
                        <label for="participantaddress" class="form-label">Address of Any Team Member :</label>
                        <input type="text" class="form-control" id="participantaddress" name="openGeneralQuizParticipantAddress" placeholder="Enter Address" required>
                    </div>
                    
                     
                 </div><br/>
                 
                  <div class="text-center">
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
                </form>
          </div>
          <div class="card-footer text-muted text-center" style="background-color: #3e5974 ;">
            <h5 style="color: white;"> Ghatal Aurobinda Stadium | Whatsapp - 8436128659 | https://www.facebook.com/quizomania2004 | Developed by Quiz O Mania</h5>
          </div>
    </div>
        <div class="card" id="megaDidiNumberOne" style="display: none;">
          <div class="card-header text-center" style="background-color: #b5e0e9;">
           <h3>Mega Didi Number One Quiz</h3> 
          </div>
          <div class="card-body" style="background-color: #c2f2f1;">
             <form id="megaDidiNumberOneForm">
                 <div class="row">
                    <div class="col-md-6">
                        <label for="participantonename" class="form-label">Participant 1 Name :</label>
                        <input type="text" class="form-control" id="participantonename" name="megaDidiNumberOneQuizParticipantOneName" placeholder="Enter First Participant Name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="participanttwoname" class="form-label">Participant 2 Name :</label>
                        <input type="text" class="form-control" id="participanttwoname" name="megaDidiNumberOneQuizParticipantTwoName" placeholder="Enter Second Participant Name" required>
                    </div>
                  
                     
                 </div><br/>
                 <div class="row">
                    <div class="col-md-6">
                        <label for="participantmobilenumber" class="form-label">Mobile Number of Any Team Member :</label>
                        <input type="tel" class="form-control" id="participantmobilenumber" name="megaDidiNumberOneQuizParticipantPhoneNumber" placeholder="Enter Mobile Number" minlength="10" maxlength="13" required>
                    </div>
                     <div class="col-md-6">
                        <label for="participantaddress" class="form-label">Address of Any Team Member :</label>
                        <input type="text" class="form-control" id="participantaddress" name="megaDidiNumberOneQuizParticipantAddress" placeholder="Enter Address" required>
                    </div>
                    
                     
                 </div><br/>
                 <div class="text-center">
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
                  
                </form>
          </div>
          <div class="card-footer text-muted text-center" style="background-color: #3e5974 ;">
            <h5 style="color: white;"> Ghatal Aurobinda Stadium | Whatsapp - 9609393938 | https://www.facebook.com/quizomania2004 | Developed by Quiz O Mania</h5>
          </div>
    </div>
    
    
     <!-- Jquery-->
     <script src="assets/js/jquery-3.4.1.min.js"></script>

    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/material-vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/material-app.js"></script>
    <script src="app-assets/js/scripts/forms/form-login-register.js"></script>
    <!-- END: Page JS-->

     <!-- Include Js -->
     <script type="text/javascript" src="include/core.js"></script>
     <!-- Toastr Js-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   
    
    <script>
        function getRadioData(){
            let ele = document.getElementsByName("btnradio");
            //console.log(data[0].value);
            for(i = 0; i < ele.length; i++) {
                    if(ele[i].checked){
                        if(ele[i].value == "schoolQuiz"){
                            function1();
                        }else if(ele[i].value == "openGeneralQuiz"){
                            function2();
                        }else if(ele[i].value == "megaDidiNumberOne"){
                            function3();
                        }
                    }
                    //console.log(ele[i].value);
                }
        }
        
        function function1(){
            console.log("schoolQuiz");
            let schoolQuizDiv = document.getElementById("schoolQuiz");
            schoolQuizDiv.style.display = "block";
            let openGeneralQuizDiv = document.getElementById("openGeneralQuiz");
            openGeneralQuizDiv.style.display = "none";
            let megaDidiNumberOneDiv = document.getElementById("megaDidiNumberOne");
            megaDidiNumberOneDiv.style.display = "none";
        }
        function function2(){
            console.log("openGeneralQuiz");
            let openGeneralQuizDiv = document.getElementById("openGeneralQuiz");
            openGeneralQuizDiv.style.display = "block";
            let schoolQuizDiv = document.getElementById("schoolQuiz");
            schoolQuizDiv.style.display = "none";
            let megaDidiNumberOneDiv = document.getElementById("megaDidiNumberOne");
            megaDidiNumberOneDiv.style.display = "none";
        }
        function function3(){
            console.log("megaDidiNumberOne");
            let megaDidiNumberOneDiv = document.getElementById("megaDidiNumberOne");
            megaDidiNumberOneDiv.style.display = "block";
            let schoolQuizDiv = document.getElementById("schoolQuiz");
            schoolQuizDiv.style.display = "none";
            let openGeneralQuizDiv = document.getElementById("openGeneralQuiz");
            openGeneralQuizDiv.style.display = "none";
        }
        
    </script>
</body>
</html>