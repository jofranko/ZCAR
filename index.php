<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>ZCAR</title>
	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
	 crossorigin="anonymous">
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
	 crossorigin="anonymous">
	<!-- CUSTOM CSS -->
	<link rel="stylesheet" href="main.css">
	<link rel="icon" href="img/logo.ico">
</head>
<!-- DATABASE -->
<?php include('db.php') ?>
<body>

	<!-- NAVIGATION -->
	<nav class="navbar navbar-expand-sm navbar-light">
		<div class="container">
			<a class="navbar-brand" href="/">
				<img src="img/logo.png" style="width: 50%;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <?php $admin = $_SESSION['loguser']; 
            if($admin =='admin') { ?>
              <li class="nav-item ">
                <a class="nav-link btn btn-outline-warning btn-sm" href="crud.php">CRUD</a>
              </li>
            <?php } ?>
            <?php if($_SESSION['logwell']==true) { ?>
              <li class="nav-item ">
                <a class="nav-link btn btn-outline-warning btn-sm" href="book.php">Book</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link btn btn-outline-warning btn-sm" href="user-mybooking.php">My Booking</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link btn btn-outline-warning btn-sm" href="user-logout.php">Logout</a>
              </li>
            <?php } else{ ?>
              <li class="nav-item "> 
                <a class="nav-link btn btn-outline-warning btn-sm"  data-toggle="modal" data-target="#modalSignin" href="#">Sign in</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" data-toggle="modal" data-target="#modalLogin" href="#">Login</a>
              </li>
            <?php } ?>
            <li class="nav-item ">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#q&a">Q&A</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>            
          </ul>
        </div>
      </div>
    </nav>

    <!-- MODAL LOGIN -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="text-center justify-content-center align-self-center">
              <form action="user-login.php" method="POST">
                <input type="text" class="form-control" name="l_username" placeholder="Username"><br>
                <input type="password" class="form-control" name="l_password" placeholder="Password"><br>
                <input type="submit" class="btn btn-warning btn-sm text-white" name="user_log" value="Login">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL SIGNIN -->
    <div class="modal fade" id="modalSignin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Sign in</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="text-center justify-content-center align-self-center">
              <form action="user-signin.php" method="POST">
                <input type="text" class="form-control" name="s_first_name" placeholder="First name"><br>
                <input type="text" class="form-control" name="s_last_name" placeholder="Last name"><br>
                <input type="text" class="form-control" name="s_email" placeholder="Email"><br>
                <input type="text" class="form-control" name="s_username" placeholder="Username"><br>
                <input type="password" class="form-control" name="s_password" placeholder="Password"><br>
                <input type="text" class="form-control" name="s_identification" placeholder="Identification"><br>
                <input type="text" class="form-control" name="s_card_name" placeholder="Card name">
                <input type="text" class="form-control" name="s_card_number" placeholder="Card number">
                <input type="text" class="form-control" name="s_card_expiry_date" placeholder="Card expiry date">
                <input type="text" class="form-control" name="s_card_cvv" placeholder="Card CVV"><br>
                <input type="submit" class="btn btn-warning btn-sm text-white" name="user_sign" value="Sign in">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- HEADER -->
    <header class="main-header call-to-action section">
      <div class="text-white">
        <div class="container">
          <div class="row d-flex h-100">
            <div class="col-sm-6 text-center justify-content-center align-self-center">
              <h1>
                <div class="text-warning">ZIPCAR</div>
              </h1>
              <p>The freedom of cars on demand in hundreds of cities, ready to book by the hour or day.</p>
              <a href="#about" class="btn btn-warning btn-lg text-white">Read More</a>
            </div>
            <div class="col-sm-6">
              <img src="img/carro.png" class="img-fluid d-none d-sm-block">
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- ABOUT -->
    <section id="about" class="bg-white py-5">
      <div class="text-center justify-content-center align-self-center">
        <h1>
          <a href="#" class="text-warning">Why ZIPCAR?</a>
            </h1>
            <p>Reserve wheels when you want them, by the hour or day, and only pay for the time you drive.</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card text-center border-warning">
              <div class="card-body">
                <h3>Join</h3>
                <p>
                  Apply online. When you’re approved, we’ll send you a Zipcard in the mail. 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center border-warning">
              <div class="card-body">
                <h3>Book</h3>
                <p>
                  Book a round trip car by the hour or day. To unlock, tap your Zipcard to the card reader on the windshield.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center border-warning">
              <div class="card-body">
                <h3>Delivery</h3>
                <p>
                  When you're done, return the car to the same location you picked it up from, then lock up with your Zipcard.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CAROUSEL -->
    <div class="row justify-content-center">
      <section id="carousel" class="bg-white text-white">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/carro1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/carro2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/carro3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </section>
    </div>
   
    <!-- Q&A -->
    <section id="q&a" class="container text-center p-5">
      <div class="container">
        <h1 class="text-center text-warning">Q&A</h1>
         <div class="row">
           <div class="col-md-4">
             <div class="card text-center border-warning">
               <div class="card-body">
                 <h3>How do I join Zipcar?</h3>
                 <p>
                   Apply online. Once approved, you can get your ZCAR. That’s your key to access cars in our network. 
                 </p>
               </div>
             </div>
           </div>
           <div class="col-md-4">
             <div class="card text-center border-warning">
               <div class="card-body">
                 <h3>How soon can I drive with Zipcar?</h3>
                 <p>
                   First, sign up for membership. Once approved, get your ZCAR by booking.
                 </p>
               </div>
             </div>
           </div>
           <div class="col-md-4">
             <div class="card text-center border-warning">
               <div class="card-body">
                 <h3>How much does Zipcar cost?</h3>
                 <p>
                   In ZCAR you can reserve cars with a costs of $5 per hour or $100 per day. Gas and insurance are included.
                 </p>
               </div>
             </div>
           </div>
         </div>
       </div>
    </section>
      
    <!-- READY TO DRIVE -->
    <section class="bg-white text-white">
      <div class="main-header call-to-action section">
        <div class="text-center justify-content-center align-self-center">
          <h1>
            <a href="#" class="text-warning">Ready to drive?</a>
              </h1>
              <p>The backseat isn’t an option where you’re headed. It’s time to start commuting, exploring, and running errands on your own time.</p>
            <a href="#" class="btn btn-warning btn-lg text-white">Join now</a>
        </div>
      </div>
    </section>
    
    <!-- FOOTER -->
    <footer>
      <div class="container p-3">
        <div class="row text-center text-black">
          <div class="col ml-auto">
            <p> &copy 2020 ZCAR, Inc. All rights reserved.</p>
          </div>
        </div>
      </div>       
    </footer>

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
