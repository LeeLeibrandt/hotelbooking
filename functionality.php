<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" text="text/css">
    <title>LERACA</title> 
  </head>

  <style>
    input, select{
      width:100%;
    }

    .details{
      border: none;
    }

    img{
      width: 100%;
      margin-bottom: 2rem;
    }

    .ContainerGap
    {
      padding-top: 1rem;
    }

    .hotel{
      text-align:center;
    }

    .btn {
      width:100%;
    }

    .form{
      max-width:600px;
    }

    .btn-outline-primary{
      margin-bottom:2rem; 
    }

  
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbarColor">
      <div class="container">
        <a class="navbar-brand" href="#"><h1>LERACA</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
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

    <div class="container-fluid cover">
      <div class="container ">
      <div class="row">
      <div class="col-2-sm"></div>
      <div class="col-8-sm colomCenter">

      <h1 id="headline">Your dream hotel at the best price.</h1>
      <!--user inputs-->
      <center><form action="functionality.php" method="post" class="form">
        <div class="details">
          <center><p>Please provide following details below:</p></center>
          <input type="text" name="name" placeholder="Name" required><br>
          <input type="text" name="surname" placeholder="Surname" required><br>
          <input type="email" name="email" placeholder="Email" required>
        </div><br>
                
        <div class="details">
          <center><p>Selecting one hotel from each dropdown:</p> </center>
          <!--Dropdown output hotel name array-->
          <select name="hotel1" id="hotel" required>
            <option>-Select Hotel Here-</option>
            <?php
              $hotelname = array("TABLE BAY HOTEL", "CAPE GRACE HOTEL");
              foreach ($hotelname as $hotel) {
            ?>
            <option> <?php echo $hotel; ?> </option>
            <?php } ?>
          </select>

          <select name="hotel2" id="hotel" required>
            <option>-Select Hotel Here-</option>
            <?php 
              $hotelname = array("TABLE BAY HOTEL", "CAPE GRACE HOTEL");
              foreach ($hotelname as $hotel) {
            ?>
            <option> <?php echo $hotel; ?> </option>
            <?php } ?>
          </select><br>
        </div>
                
        <div id="reserve_form">
          <label class="form">Check in : </label><input type="date" class="textbox" id="pick_date" name="pickup_date" onchange="cal()"/><br>
          <label class="form">Check out : </label><input type="date" class="textbox" id="drop_date" name="dropoff_date" onchange="cal()">
          <div id="numdays"><label class="form">Total days : </label><input type="text"  id="numdays2" name="numdays"/>
          </div>
        </div>
        <div>
              </center>

        <script type="text/javascript">
          //Getting number of days
          function GetDays()
          {
            var dropdt = new Date(document.getElementById("drop_date").value);
            var pickdt = new Date(document.getElementById("pick_date").value);
            return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
          }
          //Calling number days
          function cal()
          {
            if(document.getElementById("drop_date"))
            {
              document.getElementById("numdays2").value=GetDays();
            }  
          }
        </script>
               
        <input id="submitButon" class="btn btn-outline-primary btn-md" role="button" type="Submit" value="SUBMIT">
             
      </form>
    </div>

    <?php
      //LINKING EXTERNAL PHP PAGE

        //Logical arguments
        //Logical outputs for hotel one
        if($_POST)
        {
          echo"<div class='container ContainerGap'>";
           
              
                include 'class.php';
              
                echo"<div class='col-4-sm ' style='padding:5rem 5rem; margin-top:1rem; border: 1px solid black;'>";
                
                if ($_POST['hotel1'] == $hotelname[0])
                {
                  $hotel = new Hotel1;
                            
                  $hotel -> name = $_POST['hotel1'];
                  $hotel -> photo =  'sun.jpeg';
                  $hotel -> price = 500;
                  $hotel -> checkin = $_POST['pickup_date'];
                  $hotel -> checkout = $_POST['dropoff_date'];
                  $hotel -> numberdays = $_POST['numdays'];
                  //$hotel -> totalprice = $totalprice;
                  $hotel -> pool = 'True';
                  $hotel -> bar = 'True';
                  $hotel -> spa = 'True';
                  $hotel -> kidfriendly = 'True';

                  $hotel -> print_hotel();
                }
                elseif ($_POST['hotel1'] == $hotelname[1])
                {
                  $hotel = new Hotel1;

                  $hotel -> name = $_POST['hotel2'];
                  $hotel -> photo = 'hotels.jpg'; 
                  $hotel -> price = 350;
                  $hotel -> checkin = $_POST['pickup_date'];
                  $hotel -> checkout = $_POST['dropoff_date'];
                  $hotel -> numberdays = $_POST['numdays'];
                // $hotel -> totalprice = $totalprice;
                  $hotel -> pool = 'True';
                  $hotel -> bar = 'False';
                  $hotel -> spa = 'False';
                  $hotel -> kidfriendly = 'True';

                  $hotel -> print_hotel();
                }
                //Getting total price of hotels
                $numberdays = $_POST['numdays'];
                $totalprice;
                //Formula   
                $totalprice = $numberdays * $hotel->price;

                echo "<center><font size = '5px'>Total price: R".$totalprice."</font size></center>";
                echo"<br>";
                echo"<a class='btn btn-outline-primary btn-md' href='Booking.php' role='button'>Book now</a>"; 
              echo"</div>";
                        
          echo"<div class='col-4-sm ' style='padding:5rem 5rem; margin-top:1rem; border: 1px solid black;'>";
            //Logical outputs for hotel two
                    
            if ($_POST['hotel2'] == $hotelname[0])
            {
              $hotel = new Hotel2;
                              
              $hotel -> name = $_POST['hotel2'];
              $hotel -> photo =  'sun.jpeg';
              $hotel -> price = 500;
              $hotel -> checkin = $_POST['pickup_date'];
              $hotel -> checkout = $_POST['dropoff_date'];
              $hotel -> numberdays = $_POST['numdays'];
              //$hotel -> totalprice = $totalprice;
              $hotel -> pool = 'True';
              $hotel -> bar = 'True';
              $hotel -> spa = 'True';
              $hotel -> kidfriendly = 'True';

              $hotel -> print_hotel();
            }
            elseif ($_POST['hotel2'] == $hotelname[1])
            {
              $hotel = new Hotel2;

              $hotel -> name = $_POST['hotel2'];
              $hotel -> photo = 'hotels.jpg'; 
              $hotel -> price = 350;
              $hotel -> checkin = $_POST['pickup_date'];
              $hotel -> checkout = $_POST['dropoff_date'];
              $hotel -> numberdays = $_POST['numdays'];
              //$hotel -> totalprice = $totalprice;
              $hotel -> pool = 'True';
              $hotel -> bar = 'False';
              $hotel -> spa = 'False';
              $hotel -> kidfriendly = 'True';

              $hotel -> print_hotel();
            }

            //Getting total price of hotels
            $numberdays = $_POST['numdays'];
            $totalprice;
                              
            $totalprice = $numberdays * $hotel->price; 
            echo "<center><font size = '5px'>Total price: R".$totalprice."</font size></center>";
            echo"<br>";
            echo"<a class='btn btn-outline-primary btn-md' href='Booking.php' role='button'>Book now</a>"; 
          echo"</div>";
        } 
     

    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
  </body>
</html>   
