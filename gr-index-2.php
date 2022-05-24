<?php 
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300,200' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/style2.css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
<link href="css/responsive.css" rel="stylesheet" media="screen" type="text/css"/>
<link rel="stylesheet" href="css/jquery.sidr.dark.css">

<link href="css/style1.css" rel="stylesheet" />
<link rel="stylesheet" href="css/w3.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/c682dc3811.js" crossorigin="anonymous"></script>
    <title>Complaint</title>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.sidr.min.js" type="text/javascript"></script>
<script  src="js/smoothscroll.js" type="text/javascript"></script>
<link href="css/font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet">

</head>
<style>
    .contact-section{
        width: 50;
    }
    
    @media screen and (max-width: 600px) {

    

   .w-30 {
    width: 0%!important;
    }

    .w-50 {
    width: 0%!important;
    }
}
</style>
<?php
if(isset($_SESSION['username']))
{
  $user=$_SESSION["usertype"];
  if($user === "Student")
  {
	  header('Location: studentdashboard.php');
	 
  }
  if($user === "Faculty")
  {
	  header('Location: facultydashboard.php');
	 
  }
  if ($user === "admin")
  {
		header('Location: admindashboard.php');
		
  }
if ($user === "Director")
  {
		header('Location: directordashboard.php');
		
  }
}	
?>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://www.iitmjanakpuri.com/" target="_blank">
        <img src="logo.png" height="50 px"alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <span class="navbar-text ">
        Institute's Feedback and Complaint Desk
      </span>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  onclick="document.getElementById('id01').style.display='block'"  href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
<!--END OF NAVBAR -->
<!-- HOME -->
<section>
    <div class="container bg-white text-dark" id="home">
            <div class="d-flex flex-column align-items-center text-center" >       
                    <p class="display-5 fw-bolder text-danger">Institute of Information Technology and Management</p>
                    <p class="display-6">Feedback and Complaint Desk</p>           
             </div>
            <div class="text-center">
            <div>
                <img src="./images/undraw_happy_feeling.png" alt="" class="img-fluid w-50 align-center m-3">

            </div>    

<button onclick="document.getElementById('id01').style.display='block'" class="btn btn-danger btn-lg m-3" >Login</button>


</section>
<!-- END OF HOME -->
<!-- HWO IT WORKS -->
<section>
    <div class="container" id="about">
      <div class="d-sm-flex">
          <img class="img-fluid w-50 mt-5 p-5" id="image-src" src="./images/undraw_welcome_re_h3d9.svg" alt="">
        <div class="m-5">
            <p class="display-5 text-danger fw-bold text-center mt-4 pt-3">How it works</p>        
            <p class="fs-5 pt-4 text-center">Our Feedback and Complaint Management Portal allows students of IITM to submit any complaint regarding academics, faculty, infrastructure and library. Students need to register themselves and login for submitting a complaint. When a student submits a complaint she/he can also track its status.</p>        
        </div>
</div>  
        
    </div>
    
</section>
<!-- END OF HWO IT WORKS -->
<!-- Benifits -->
<section>
    <div class="container">
      <div class="d-sm-flex">
          <div class="m-5">
              <p class="display-5 text-danger fw-bold text-center mt-4 pt-3">Benefits</p>        
              
                 <div class="d-flex">
                 <i class="fa-solid fa-bolt pt-2"></i>
                 <p class="ps-1 fs-5">The Complaint Tracking System allows submission of a complaint at one click. You get all kinds of options available on a single web page</p>
                 </div>
                 <div class="d-flex">
                 <i class="fa-solid fa-shield pt-2"></i>
                 <p class="ps-1 fs-5">The submission of complaints remains fully confidential and transparent. Only the person in charge of resolving the complaint will know your identity.</p>
                 </div>
                 <div class="d-flex">
                 <i class="fa-solid fa-clock pt-2"></i>
                 <p class="ps-1 fs-5">You need not go to different persons for submitting your complaint. Also your complaint will also be resolved as early as possible.</p>
                 </div>
                 
                  
            </div>
            <img class="img-fluid w-50 mt-5 p-5" id="image-src" src="./images/undraw_thought_process_re_om58.svg" alt="">
</div>  
        
    </div>
    
</section>
<!-- END OF Benifits -->
<img src="./images/wave.svg" alt="">
<!-- Form -->
<section>
    <div class="container-fluid bg-danger" id="contact">
    <p class="display-5 text-dark fw-bold text-center py-4">Contact Us</p> 

         <div class="d-md-flex justify-content-around">
           
                    <img class="img-fluid w-50 mt-1 mb-4" id="image-src" src="./images/undraw_contact_us_re_4qqt.svg" alt="">
           
                           
                <div class="contact-section m-5">
                    <form action="contact_us.php" method="POST">

                      <div class="mb-3 text-center">
                        <label for="exampleFormControlInput1" class="form-label"> <h5>
                          Fill the details below
                        </h5></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                      </div>
                      <div class="mb-3">
                        <!-- <label for="exampleFormControlInput1" class="form-label">Email address</label> -->
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                      </div>
                      <div class="mb-3">
                        <!-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> -->
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Type your mesaage here"></textarea>
                      </div>
                      <div class="mb-3 text-center"> 
                        <button type="submit" class="submit">Send Message</button>
                      </div>
                      
                    </form>
                    
                </div>   

             </div>

        </div>  
  
</section>


<!-- End of Form -->
<!-- Footer -->
<section>

        <footer class="bg-dark text-white text-center p-3">
        Copyright © IITM 2022 | Designed and Developed by <a href="https://iitmjanakpuri-sdc.in/" target="_blank " class="link-danger"> Software Development Club | IITM  </a> 

        </footer>
 

</section>
<!-- Footer end -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		
		
		
<!-- Modal for login-->
<div id="id01" class="w3-modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
  class="w3-closebtn w3-hover-red w3-container w3-padding-16 w3-display-topright w3-xxlarge">&times;</span>
  <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
  
    <div class="w3-center"><br>
      <img src="css/images/img_avatar4.png" alt="Avatar" style="width:20%" class="w3-circle">
    </div>
	
    <div class="w3-container">
	
      <div class="w3-section">
	  <form class="w3-container" id ="form" method="POST" action="Login.php">
        <!--<label><b>Username</b></label>-->
        <input class="w3-input w3-border w3-margin-bottom" required name="username"  type="text" placeholder="Enter Username" style="margin-left:5px;"/>
        <!--<label><b>Password</b></label>-->
        <input class="w3-input w3-border w3-margin-bottom" required name="password"  type="password" placeholder="Enter Password" style="margin-left:5px;"/>
		<br/>
		<!--<label><b>Type Of user</b></label>-->
        <select class="w3-select w3-border w3-margin-bottom w3-round" required  name="type_of_user" style="margin-left:2px;height:40px;">
			<option value="" disabled selected>Select Type of User</option>
			<option value="Student">Student</option>
			<option value="Faculty">Faculty</option>
			<option value="Director">Director</option>
			<option value="admin">Admin</option>
		</select>
        <button type="submit"   class="w3-btn w3-btn-block w3-red w3-section" >Login</button>
        <input class="w3-check" type="checkbox" checked="checked" id="remember"> Remember 
		</form>
		<p>** Students should enter their Enrollment Number as User ID.<br/>
                   Password for students is also their Enrollment number for first time login.<br/>
                   Then the password can be changed through 'Update Profile' link.</p>
      </div>
    </div>

    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
      <span class="w3-right w3-padding w3-hide-small"><a href="#" id="forgot-form-link" >Forgot password?</a></span>
    </div>

  </div>
</div>
<!-- end -->

<!-- Modal For Forgot Password  Pop Up -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="container" style="margin-top:100px;">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
					<a href="#" data-dismiss="modal" aria-hidden="true" class="close">&times;</a>
						<div class="row">
							<div class="col-xs-4">
								<a href="#"  id="login-link" data-id="" style="text-decoration: none;"><center><h4>Forgot Password</h4></center></a>
							</div>
							<br/><br/>
							<hr>
							<div class="w3-center"><br>
								<img src="css/images/img_avatar4.png" alt="Avatar" style="width:20%" class="w3-circle">
							</div>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
							<!--Change Password Form-->
								<form class="w3-container" id ="form" method="POST" action="Login.php">
									<!--<label><b>Username</b></label>-->
									<input class="w3-input w3-border w3-margin-bottom" required name="username" id="username" autocomplete="off" type="text" placeholder="Enter Username" style="margin-left:5px;" />
									<!--<label><b>Password</b></label>-->
									<input class="w3-input w3-border w3-margin-bottom" required name="email" id="email" autocomplete="off" type="text" placeholder="Enter Email" style="margin-left:5px;" onfocusout="myFunction2()"/>
									<br/>
									<!--<label><b>Type Of user</b></label>-->
									<select class="w3-select w3-border w3-margin-bottom w3-round" required id="user_type" name="type_of_user" style="margin-left:2px;height:40px;">
										<option value="" disabled selected>Select Type of User</option>
										<option value="Student">Student</option>
										<option value="Faculty">Faculty</option>
									</select>
									
								   
								</form>
								
								<div class="modal-footer">
									 
									<button href="#" id="btnYes1" class="w3-btn  w3-blue w3-section" >Retrieve</button>
									<button href="#" data-dismiss="modal" aria-hidden="true" class="w3-btn w3-blue w3-section">Cancel</button><br/>
								     <!--Div for show error-->
									 <div class="alert alert-danger" >
										<span id="error"></span>	
									</div>
									<!--End of div for show error-->
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    </div>    
</div>		
			
<!-- Modal for login-->



<!-- End Of Update Profile Up -->


  
</body>





 <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script  src="js/jquery.nicescroll.min.js" type="text/javascript"></script>	
		<script type="text/javascript">		
			 $(document).ready(function() {
				 
				 /*To open Forgot Password modal when we are at login*/
					 $('#forgot-form-link').on('click', function(e) {
						e.preventDefault();
						var modal = document.getElementById('id01');
						var id = $(this).data('id01');
						$('#id01').data('id', id).modal('hide');
						
						 modal.style.display = "none";
						$('#myModal1').data('id', id).modal('show');
						$("div.alert.alert-danger").hide();
						
					});
					/*Ends here*/
					/*For Retrieve Password on click of Retrieve button*/
						$('#btnYes1').click(function() {
							
							var user = $('input#username').val();
							var email = $('input#email').val();
							var type_of_user = $('#user_type option:selected').val();
//alert(type_of_user);
							if(user === "" || email === "" || type_of_user === "")
							{
								$("div.alert.alert-danger").show();								
								$("div.alert.alert-danger").text("Please Fill All Fields");
								$("div.alert.alert-danger").css({"text-color": "red", "font-size": "100%","margin-right":"18%","text-align":"left","margin-top":"2%"});
								
							}
							else
							{
							$.ajax({
								type: "POST",
								url: "forgot.php",
								data: {user : user, email : email, type_of_user : type_of_user },
								cache: false,
								success: function(response){
								//alert(response);
								$("div.alert.alert-danger").show();
								$error=response;
								$("div.alert.alert-danger").text($error);
								$("div.alert.alert-danger").css({"text-color": "red", "font-size": "100%","margin-right":"18%","text-align":"left","margin-top":"2%"});
								setTimeout(function(){$('#myModal1').modal('hide');}, 2000);
								setTimeout(function(){window.location.replace("index.php");}, 2000);
								},
								error:function (xhr, ajaxOptions, thrownError){
											//On error, we alert user
											alert(thrownError);
											$('#myModal1').modal('hide');
										}
							});
							}
						});
							
						 
						 /*Ends here*/
			});
 
		</script>
<script>
	/*For Validation Email id */
function myFunction2() {
    var x = document.getElementById("email").value; 
   //It checks for email format
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
	var ans=re.test(x);
	if (ans === true)
	{
		$('div.alert.alert-danger').hide();		
		document.getElementById("btnYes1").disabled = false;
	}
	else
	{
		$('div.alert.alert-danger').show();
		$("div.alert.alert-danger").text("Enter Valid email-id (emailid@domain.com)");
		$("div.alert.alert-danger").css({"text-color": "red", "font-size": "100%","margin-left":"-35px"});
		document.getElementById("btnYes1").disabled = true;
	}
	
	
  }
</script>


</html>  
	