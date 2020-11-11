<?php
   session_start();
   
?>
<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $first;?><?php echo $last;?>s profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/editProfilePage.css" rel="stylesheet">
    <title> Health Care </title>
  </head>
  <body>

  <!--- nav bar---->

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



<div class="edit">
  <div class="edit-text">
    <h1> Edit Your Profile </h1>
  </div>
</div>



<?php
  
   if(isset($_SESSION['Email'])){
    $email = $_SESSION['Email'];
    //echo $email;

    $conn = mysqli_connect('localhost','root','','healthdb');
      if(!$conn){
        echo 'Connection error ' . mysqli_connect_error();
      }

      $sql = "SELECT * FROM userinfo where Email = '$email'";
      // make query and get result
      $result = mysqli_query($conn, $sql);

      //fetch the resulting rows as array
      $resultArray = mysqli_fetch_all($result, MYSQLI_ASSOC);

      //free result from memory
      mysqli_free_result($result);

      //close conenction to database
      mysqli_close($conn);

      //print_r($resultArray);

      $profileInfo = $resultArray[0];
      

    // mysql_connect("localhost","root","", "healthdb") or die("counld not connect to the server");
    // mysql_select_db("healthdb") or die("That database could not found");
    // $userquery = mysql_query("SELECT * FROM userinfo where Email='$email'")or die("The query is not completed. Please try again");
    // if(mysql_num_rows($userquery)!=1){
    //  die("The database could not be found");
    // }
    // while($row=mysql_fetch_array($userquery,MYSQL_ASSOC)){
    //    $first=$row['First_name'];
    //    $last=$row['Last_name'];
    //    $email=$row['Email'];
    //    $uid=$row['Username'];
    //    $pass=$row['password'];
    // }
    // if($email !=$email){
    //  die("There has been a fetal error. Please try again");
    // }
    ?>
   
   <div class="profile">
   <h2><?php echo $profileInfo['First_name'];?>'s profile</h2><br/>
   <table>
     <tr><td>firstname:</td><td><?php echo $profileInfo['First_name']; ?><td><a href="Firstedit.php"><input type="button" name="edit" value="Edit"></a></td></td></tr><br/><br/><br/><br/> 
     <tr><td>Lastname:</td><td><?php echo $profileInfo['Last_name'];?><td><a href="Lastedit.php"><input type="button" name="edit" value="Edit"></a></td></td></tr>
     <tr><td>Email:</td><td><?php echo $profileInfo['Email'];?><td><a href="Emailedit.php"><input type="button" name="edit" value="Edit"></a></td></td></tr>
     <tr><td>Username:</td><td><?php echo $profileInfo['Username'];?><td><a href="Usernameedit.php"><input type="button" name="edit" value="Edit"></a></td></td></tr>
     
   </table>
   </div>
   
<?php
   }else die("You need to specify your email!");
?>







<!-- Footer-->
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
