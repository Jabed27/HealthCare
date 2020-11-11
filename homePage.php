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
    <link href="css/homePage.css"  rel="stylesheet">
    <title> Health Care </title>
  </head>
  <body>

  <!--- nav bar---->

      <nav class="navbar navbar-expand-lg navbar-light  ">
      <div class="container">

    <a class="navbar-brand" href="#"> Avalon HealthCare  </a>


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
          <a class="nav-link" href="#">Home </a>
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
                   <a class="nav-link" href="editProfilePage.php"><button type="submit">View</button></a>
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




    <div class="bd-example">
       <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/banner-1.jpg" class="d-block w-100" alt="banner-1">
        <div class="carousel-caption d-none d-md-block">
          <h5> Avalon HealthCare</h5>
          <p>Best healthcare provider in Bangladesh</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/banner-2.jpg" class="d-block w-100" alt="banner-2">
        <div class="carousel-caption d-none d-md-block">
          <h5>Doctors</h5>
          <p>We have the best doctors and surgeons in Bangladesh</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/banner-3.jpg" class="d-block w-100" alt="banner-3">
        <div class="carousel-caption d-none d-md-block">
          <h5>Departments</h5>
          <p>Our Neurology and Cardiology departments are ranked Top 10 in the world </p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>




<div class="service">
  <div class="service-text">
    <h1> Our Services </h1>
  </div>
</div>


<div class="container">
   <div class="card-deck">
  <div class="card shadow">
    <div class="inner">
       <img src="images/card-1.jpg" class="card-img-top" alt="card-1">
    </div>
    <div class="card-body text-center">
      <h5 class="card-title"> 24 Hour Consultation</h5>
       
      
    </div>
  </div>
  <div class="card shadow">
    <div class="inner">
      <img src="images/card-2.jpg" class="card-img-top" alt="card-2">
    </div>
    <div class="card-body text-center">
      <h5 class="card-title "> Free Health Checkup </h5>
          
      
    </div>
  </div>
  <div class="card shadow">
      <div class="inner">
         <img src="images/card-3.jpg" class="card-img-top" alt="card-3">
      </div>
    <div class="card-body text-center">
      <h5 class="card-title"> Pharmacy </h5>
     
      
    </div>
  </div>

  <div class="card shadow">
      <div class="inner">
         <img src="images/card-4.jpg" class="card-img-top" alt="card-4">
      </div>
    <div class="card-body text-center">
      <h5 class="card-title"> 24/7 Hour Ambulance Service </h5>
      
      
    </div>
  </div>

  


  
</div>

</div>



<div class="mid-banner">
  <div class="mid-banner-text">
  All the money in the world can't buy you back good health.     
                                                         --Reba McEntire
  </div>

</div>



<div class="department">
  <div class="department-text">
    <h1> Our Department </h1>
  </div>
</div>

<div class="container">

<div class="card-group">
  <div class="card">
    <img src="images/cardiac.jpg" class="card-img-top" style="height:200px" alt="cardiac">
    <div class="card-body text-center">
      <h5 class="card-title">Cardiology</h5>
      <p class="card-text">We have the best cardiologist in Bangladesh and two of the best heart surgeons in the world</p>
      
    </div>
  </div>
  
  <div class="card">
    <img src="images/surgery.jpg" class="card-img-top"  style="height:200px;"  alt="surgery">
    <div class="card-body text-center">
      <h5 class="card-title">Pediatrics</h5>
      <p class="card-text">Your child will be safest hands at our pediatrics department</p>
    
    </div>
  </div>



  <div class="card">
    <img src="images/dental.jpg" class="card-img-top" style="height:200px;"  alt="dental">
    <div class="card-body text-center">
      <h5 class="card-title">Dental Care</h5>
      <p class="card-text"> We provide ons of the best dental solutions in the country</p>
      
    </div>
  </div>

  <div class="card">
    <img src="images/neurology.jpg" class="card-img-top" style="height:200px;"  alt="neurology">
    <div class="card-body text-center">
      <h5 class="card-title">Neurology</h5>
      <p class="card-text">We have the best neurologists in Bangladesh and one of the best neurosurgeon in the world</p>
      
    </div>
  </div>
</div>

<div class="card-group">
  
  <div class="card">
    <img src="images/medicalLab.jpg" class="card-img-top"  style="height:200px;"  alt="medicalLab">
    <div class="card-body text-center">
      <h5 class="card-title">Diagnostic Center</h5>
      <p class="card-text"> We provide myriad high quality tests at reasonable cost   </p>
      
    </div>
  </div>
  <div class="card">
    <img src="images/gastroenterology.jpg" class="card-img-top" style="height:200px;" alt="Gastroenterology">
    <div class="card-body text-center">
      <h5 class="card-title"> Gastroenterology </h5>
      <p class="card-text"> We provide ons the best  Gastroenterology solutions</p>
      
    </div>
  </div>

  <div class="card"> 
    <img src="images/orthopedic.jpg" class="card-img-top" style="height:200px;" alt="orthopedic">
    <div class="card-body text-center">
      <h5 class="card-title">Orthopedic</h5>
      <p class="card-text"> One of the top orthopedic department in the city </p>
      
    </div>
  </div>

  <div class="card">
    <img src="images/diabetes.jpg" class="card-img-top" style="height:200px;" alt="diabetes">
    <div class="card-body text-center">
      <h5 class="card-title ">Diabetes</h5>
      <p class="card-text"> We work relentlessly to improve worst problem in our country</p>
     
    </div>
  </div>
</div>

</div>






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




