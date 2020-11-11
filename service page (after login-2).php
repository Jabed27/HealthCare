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
    <link href="css/servicePage(before login).css" rel="stylesheet">
    <title> Health Care </title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-light  ">
      <div class="container">

    <a class="navbar-brand" href="#"> Avalon HealthCare </a>


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
        <a class="nav-link " href="Contact.php"> Contact</a>
      </li>
       <?php
            if(isset($_SESSION['user_id'])){
              echo ' <form action ="Logout.php"method="POST">
              <li class="nav-item logout">
                 <a class="nav-link" href="Logout.php"><button type="submit">Logout</button></a>
              </li> 
               
              </form> 
              <li class="nav-item signup">
                   <a class="nav-link" href="View.php"><button type="submit">View</button></a>
               </li> '; 
            }else{
              echo '<li class="nav-item login">
        <a class="nav-link" href="Login.php"><button type="submit">Login</button></a>
      </li>  
       <li class="nav-item signup">
        <a class="nav-link" href="Signup.php"><button type="submit">Signup</button></a>
      </li>  ';
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
          if(isset($_SESSION['user_id'])){
            echo '<div class="service">
  <div class="service-text">
    <h1> Our Services </h1> 
  </div>
</div>


<div class="container">

<div class="card mb-3">
  <img src="images/service-1.jpg" class="card-img-top" style="height: 650px" alt="service-1">
  <div class="card-body text-center">
    <h5 class="card-title">24 Hour Consultation </h5>
    <p class="card-text"> Let it be day or night,we are here for you.Our consultants are here to provide the solutions 24 hours a day.Our consultants are renowned and are mostly trained abroad</p>
   
  </div>
</div>

<div class="card mb-3">
  <img src="images/service-2.jpg" class="card-img-top" style="height: 650px" alt="service-2">
  <div class="card-body text-center">
    <h5 class="card-title">Free Health Checkup </h5>
    <p class="card-text">We know our country is poor and a lot of us earn to even barely survive.Thst is why we provide free health checkup and consultation to all of you with government health card</p>
   
  </div>
</div>

<div class="card mb-3">
  <img src="images/service-3.jpg" class="card-img-top" style="height: 650px" alt="service-3">
  <div class="card-body text-center">
    <h5 class="card-title">Pharmacy </h5>
    <p class="card-text">Our pharmacy is stocked with myriad of the best quality medicines in the world.</p>
   
  </div>
</div>

<<div class="card mb-3">
  <img src="images/service-4.jpg" class="card-img-top" style="height: 650px" alt="service-4">
  <div class="card-body text-center">
    <h5 class="card-title">24/7 Ambulance Service </h5>
    <p class="card-text">Our ambulances are always ready to pick you up from anywhere in the Dhaka city.We also provide helicopter ambulances for service outside Dhaka city.Please call 92816 for details </p>
   
</div>


</div>

</div>





<div class="card-group">
  <div class="card">
    <img src="images/vision.jpg" class="card-img-top" style="height: 350px"  alt="vision">
    <div class="card-body text-center">
      <h5 class="card-title" >Our Vision</h5>
      <p class="card-text">To provide developed country level healthcare in Bangladesh.</p>
      
    </div>
  </div>
  <div class="card">
    <img src="images/mission.jpg" class="card-img-top" style="height: 350px" alt="mission">
    <div class="card-body text-center">
      <h5 class="card-title">Our Mission</h5>
      <p class="card-text">To expand beyond Dhaka and provide the best healthcare solutions in all 8 divisions</p>
   
    </div>
  </div>
  <div class="card">
    <img src="images/goal.jpg" class="card-img-top" style="height: 350px"alt="goal">
    <div class="card-body text-center">
      <h5 class="card-title">Our Goal</h5>
      <p class="card-text">To expand beyond Dhaka and provide the best healthcare solutions in all 8 divisions.</p>
     
    </div>
  </div>
</div>   
';
          } else{
             echo '<p class="mt-5 login-status">You are logged out!</p>';
          }    

?>







<div class="footer">
   <div class="footer-text"> 

    <h2> Health Care </h2>
    <h4> Opening Hours </h4> 
    <div>    Monday – Thursday
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