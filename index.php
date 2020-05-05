<!doctype html>
  <!-- CREATORS ~ LEE_LEIBRANDT || RAPHEAL || CAMERON  -->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css">

    <title>LERACA</title>
  </head>

  <style>
    #wrap{
      height:100vh; 
      background: url(images/2.jpg);
      background-position: center; 
      background-repeat: no-repeat; 
      background-size: cover;
    }

    .row{
      margin-left: 0;
      margin-right: 0;
    }

    .btn-outline-warning{
    color: #fff;
    width: 80%;
    font-size: large;
    font-weight:700;
    } 
    
    .typing{
      animation: typing 1s steps(20, end), cursor .2s steps(20, end) infinite;
    }

    .navbar-light .navbar-nav .nav-link {
    color: white;
    font-weight: 700;
    font-size:1.5rem;
    margin-left: 2rem;
    }

  </style>
  <!--  MAIN PROGRAM  -->
  <body>

    <div id="wrap" >
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h1>LERACA</h1></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#">DEALS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">CONTACT</a>
                </li>
              </ul>
          </div>
        </div>  
      </nav>

      <div class "container">
        <div class="row">
          <div class="col-sm-6">
            <div class="jumbotron">
              <div class="container text-center text-white cssanimation typing">
                <h1>with <br><span id="africa">LERACA.C<span id="second">O</span>M</span></h1>
                <p class="lead">Find the best hotel deals & Save more</p>
                <a class="btn btn-outline-warning" href="functionality.php" role="button">SEARCH</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script>
	    new WOW().init();
	  </script> 
  </body>
</html>
