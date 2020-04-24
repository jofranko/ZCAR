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

<body>
	<!-- DATABASE -->
	<?php include('db.php') ?>
	<!-- MODAL LOGIN -->
	<?php include('modal-login.html') ?>
	<!-- MODAL SIGNIN -->
	<?php include('modal-signin.html') ?>  

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
            <?php if (isset($_SESSION['logwell'])) { ?>
              <li class="nav-item ">
                <a class="nav-link btn btn-outline-warning btn-sm" href="#">Book</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link btn btn-outline-warning btn-sm" href="user-logout.html">Logout</a>
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
              <a class="nav-link" href="contact.html">Contact</a>
            </li>            
          </ul>
        </div>
      </div>
    </nav>
    
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
              <a href="join.html" class="btn btn-warning btn-lg text-white">Sign in</a>
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
                   Apply online. Once approved, get your Zipcard by mail in 3-7 days. That’s your key to access cars in our network. Once you activate your Zipcard, you can begin booking Zipcars. 
                 </p>
               </div>
             </div>
           </div>
           <div class="col-md-4">
             <div class="card text-center border-warning">
               <div class="card-body">
                 <h3>How soon can I drive with Zipcar?</h3>
                 <p>
                   First, sign up for membership. Once approved, get your Zipcard by mail in 3-7 days. Activate your Zipcard, and then you can book reservations.
                 </p>
               </div>
             </div>
           </div>
           <div class="col-md-4">
             <div class="card text-center border-warning">
               <div class="card-body">
                 <h3>How much does Zipcar cost?</h3>
                 <p>
                   Zipcar membership costs $7 a month or $70 a year. Reserve cars by the hour or by the day. Gas, insurance, and 180 miles per day are all included in membership.
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
            <a href="join.html" class="btn btn-warning btn-lg text-white">
                  Join now
            </a>
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
