<?php
session_start();

 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/contactPage.css" rel="stylesheet">
    <title> Health Care </title>
  </head>
  <body>

  

      <nav class="navbar navbar-expand-lg navbar-light  ">
      <div class="container">

    <a class="navbar-brand" href="#"> Avalon HealthCare</a>


    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="#">Help Desk </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Emergency Service </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Appointment</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#"> Call </a> 
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="#"> 015212123 </a> 
      </li>
    </ul>
  </div>
</div>
</nav>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
 

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
     </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"> 
          <a class="nav-link" href="homePage.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutUs.php"> About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service page (before login).php"> Services </a>    
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#"> Contact</a>
      </li>
       <?php
            if(isset($_SESSION['user_id'])){
              echo ' <form action ="Logout.php"method="POST">
              <li class="nav-item logout">
        <a class="nav-link" href="Logout.php"><button type="submit">Logout</button></a>
      </li> </form> 
       <li class="nav-item signup">
                   <a class="nav-link" href="editProfilePage.php"><button type="submit">View</button></a>
               </li> ';
            }else{
              echo '<li class="nav-item login">
        <a class="nav-link" href="Login.php"><button type="submit">Login</button></a>
      </li>  
       <li class="nav-item signup">
        <a class="nav-link" href="Signup.php"><button type="submit">Signup</button></a>
      </li> ';
            }
        ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</div>
</nav>




 <?php
                      
 $error = '';
$name = '';
$email = '';
$subject = '';
$message = '';
function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }
 if(empty($_POST["subject"]))
 {
  $error .= '<p><label class="text-danger">Subject is required</label></p>';
 }
 else
 {
  $subject = clean_text($_POST["subject"]);
 }
 if(empty($_POST["message"]))
 {
  $error .= '<p><label class="text-danger">Message is required</label></p>';
 }
 else
 {
  $message = clean_text($_POST["message"]);
 }                      
if($error==''){
                           $error = '<label class="text-success">Thank you for contacting us</label>';
            }
          }
                  ?>

<?php
         if (isset($_SESSION['user_id'])) {
               # code...
         
             echo '<div class="container">
          <h2 align="center">Contact Form</h2>
          <br/>
               <div class="row">
                   <div class="col-md-6" style="margin:0 auto; float:none;">
                     <form class="contact-form " action="Contacttodb.php"method="post">
                      <?php echo $error;?>
                          <div class="form-group">
                               <label>Enter name</label>
                               <input type="text"name="name"placeholder="Enter Name" class="form-control"
                               vlaue = "<?php echo $name;?>"/>

                          </div>
                           <div class="form-group">
                               <label>Enter Email</label>
                               <input type="text"name="email"placeholder="Enter Email" class="form-control"
                                vlaue = "<?php echo $email;?>"/>
                          </div>
                           <div class="form-group">
                               <label>subject</label>
                               <input type="text"name="subject"placeholder="subject" class="form-control"
                                vlaue = "<?php echo $subject;?>"/>
                          </div>
                          <div class="form-group">
                               <label>message</label>
                               <textarea name="message"placeholder="Enter Messege" class="form-control">
                               </textarea>
                          </div>
                          <div class="form-group" align="center">
                               
                               <input type="submit"name="submit"value="submit" class="btn btn-info"/>
                          </div>
                     </form>
                   </div>
               </div>
        </div>';
          }else{
                echo '<p class="mt-5 login-status">You are logged out!</p>';
           }
         ?>
        









<!-- Footer-->
<div class="footer">
   <div class="footer-text"> 

    <h2> Health Care </h2>
    <h4> Opening Hours </h4> 
    <div>    Monday – Thursdays
         8.00 – 19.00
           Friday
        8.00 - 18.30
          Saturday
        9.30 – 17.00
           Sunday
         9.30 – 15.00
    </div>
    <h4> Address </h4>
    <div> 18/F, Bir Uttam
      Qazi Nuruzzaman Sarak,
     West Panthapath,Dhaka 1205 
    </div>

  </div>


</div>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>




