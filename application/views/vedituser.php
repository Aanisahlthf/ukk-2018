<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Travelnesia</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">About Me</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.html">Reservation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>About Me</h1>
            <span class="subheading"></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <form role="form" action="<?php echo base_url('edituser/edit');?>" method="POST">
          <div>
            <?php foreach($res as $r):?>
              <input type="hidden" name="id" id="id" value="<?php echo $r->id;?>">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" value="<?php echo $r->username;?>">
              </div>
              <div class="form-group">
                <label for="fullname">Fullname</label>
                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Fullname" value="<?php echo $r->fullname;?>">
              </div>
              <div class="form=group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" value="<?php echo $r->password;?>">
              </div>
              <div class="form-group">
                <label for="level">Level</label>
                <select id="level" class="form-control" name="level" value="<?php echo $r->value;?>">
                  <option value="1">Owner</option>
                  <option value="2">Administrator</option>
                  <option value="3">Helper</option>
                  <option value="4">Operator</option>
                  <option value="5">User</option>
                </select>
              </div>
            <?php endforeach;?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>



            <hr>

            <!-- Footer -->
            <footer>
              <div class="container">
                <div class="row">
                  <div class="col-lg-8 col-md-10 mx-auto">
                    <ul class="list-inline text-center">
                      <li class="list-inline-item">
                        <a href="#">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                      </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Travelnesia 2018</p>
                  </div>
                </div>
              </div>
            </footer>

            <!-- Bootstrap core JavaScript -->
            <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Custom scripts for this template -->
            <script src="<?php echo base_url(); ?>assets/js/clean-blog.min.js"></script>

          </body>

          </html>
