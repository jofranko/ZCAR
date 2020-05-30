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
              <a class="nav-link btn btn-outline-warning btn-sm" href="/">Go back</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="bg-white text-black">
      <div class="section">
        <div class="text-center justify-content-center align-self-center">
          <h1><a class="text-warning">CRUD</a></h1>
          <div class=row>
            <div class=col-lg-6>
              <!-- CREATE -->
              <h1><a class="text-black">Create</a></h1>
              <!-- create book -->
              <a href="crud-create-book.php" class="btn btn-warning btn-lg text-white">Book</a>
              <!-- create users -->
              <a href="crud-create-users.php" class="btn btn-warning btn-lg text-white">Users</a><br><br>              

              <!-- UPDATE -->
              <h1><a class="text-black">Update</a></h1>
              <form action="crud-update.php" method="POST">
                <div class="form-group">
                  <select class="form-control" name="c_u_table" id="exampleFormControlSelect3">
                    <option>Table...</option>
                    <option>book</option>
                    <option>users</option>
                  </select>
                </div>
                <input type="text" class="form-control"  name="c_u_id" placeholder="Id"><br>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <select class="form-control" name="c_u_column_book" id="exampleFormControlSelect1">
                        <option>Book column...</option>
                        <option>bookdate</option>
                        <option>username</option>
                        <option>booktime</option>
                        <option>quantity</option>
                        <option>total</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <select class="form-control" name="c_u_column_users" id="exampleFormControlSelect2">
                        <option>Users column...</option>
                        <option>first_name</option>
                        <option>last_name</option>
                        <option>email</option>
                        <option>username</option>
                        <option>password</option>
                        <option>identification</option>
                        <option>card_name</option>
                        <option>card_number</option>
                        <option>card_expiry_date</option>
                        <option>card_cvv</option>
                      </select>
                    </div>
                  </div>
                </div>
                <input type="text" class="form-control"  name="c_u_data" placeholder="Data"><br>
                <input type="submit" class="btn btn-warning btn-lg text-white" name="c_u" value="Update">
              </form>
            </div>
            
            <div class=col-lg-6>
              <!-- READ -->
              <h1><a class="text-black">Read</a></h1>
              <!-- read book -->
              <a href="crud-read-book.php" class="btn btn-warning btn-lg text-white">Book</a>
              <!-- read users -->
              <a href="crud-read-users.php" class="btn btn-warning btn-lg text-white">Users</a><br><br>

              <!-- DELETE -->
              <h1><a class="text-black">Delete</a></h1>
              <form action="crud-delete.php" method="POST">
                <div class="form-group">
                  <select class="form-control" name="c_d_table" id="exampleFormControlSelect3">
                    <option>Table...</option>
                    <option>book</option>
                    <option>users</option>
                  </select>
                </div>
                <input type="text" class="form-control"  name="c_d_id" placeholder="Id"><br>
                <input type="submit" class="btn btn-warning btn-lg text-white" name="c_d" value="Delete">
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