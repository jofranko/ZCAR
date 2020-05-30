<!DOCTYPE html>
<html lang="en">
<!-- DATABASE -->
<?php include('db.php') ?>
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
            <li class="nav-item ">
              <a class="nav-link btn btn-outline-warning btn-sm" href="crud.php">Go back</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="bg-white text-black">
      <div class="section">
        <div class="text-center justify-content-center align-self-center">
          <h1><a class="text-warning">Create user</a></h1>
          <div class=row>
            <div class=col-md-4></div>
            <div class=col-md-4>
              <form action="crud-create-users2.php" method="POST">
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
                <input type="submit" class="btn btn-warning btn-lg text-white" name="user_sign" value="Create">
              </form>
            </div>
          </div>
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
