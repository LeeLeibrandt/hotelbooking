<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/style.css" text="text/css">
    <title>Hotel Travago</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="img/AVENGERS LOGO VERSION 2.png" width="200px"alt="avenger">
      </a>
      <center><h1>LERACA Hotel</h1>
 
    </nav>

    <div class="container">
      <!--user inputs-->
      <form action="index.php" method="post" class="form">
          Please provide following details below:<br>
          <input type="text" name="name" placeholder="Name" required><br>
          <input type="text" name="surname" placeholder="Surname" required><br>
          <input type="email" name="email" placeholder="Email" required><br>

          Hotel Details <br>
          <!--Dropdown output hotel name array-->
          <select name="hotel" id="hotel" required>
            <option>---Select Hotel---</option>
            <?php
              $hotelname = array("Hotel 1", "Hotel 2", "Hotel 3", "Hotel 4");
              foreach ($hotelname as $hotel) {
            ?>
            <option> <?php echo $hotel; ?> </option>
              <?php } ?>
          </select><br>

          Check-In <input type="date" name="calenderIn" required> 
          Check-Out <input type="date" name="calenderOut" required><br>
        <input type="submit">
    </div>
    </div><br>

    <div class="container">
      <div class="grid-container">
        <div class="grid-item"><h3>User Details</h3>
        <?php
          //user input details on submit
          if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['hotel']) && isset($_POST['calenderIn'])&& isset($_POST['calenderOut']))
          {
            //declare variables
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $hotel = $_POST['hotel'];
            $checkin = $_POST['calenderIn'];
            $checkout = $_POST['calenderOut'];
          }

          function greeting($n, $s, $e, $h, $i, $o)
          {
            return "<br />" . "$n". "$s" ."$e". "$h". "$i". "$o";
          }

          //outputting details of user
          echo "<div class = 'banner'>";
            echo "<strong>Name:</strong>" ." ". $name;
            echo "<br />";
            echo "<strong>Surname:</strong>" ." ". $surname;
            echo "<br />";
            echo "<strong>Email</strong>:" ." ". $email;
            echo "<br />";
            echo "<strong>Hotel selected:</strong>" ." ". $hotel;
            echo "<br />";  
            echo "<strong>Check-In:</strong>" ." ". $checkin;
            echo "<br />";
            echo "<strong>Check-Out:</strong>" ." ". $checkout;
          echo "</div>";  
          ?>
        </div>

        <div class="grid-item"><h3>Hotel 1</h3>
        <?php
          //user input details on submit
          if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['hotel']) && isset($_POST['calenderIn'])&& isset($_POST['calenderOut']))
          {
            //declare variables
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $hotel = $_POST['hotel'];
            $checkin = $_POST['calenderIn'];
            $checkout = $_POST['calenderOut'];
          }

          function hello($n, $s, $e, $h, $i, $o)
          {
            return "<br />" . "$n". "$s" ."$e". "$h". "$i". "$o";
          }

          //outputting details of user
          echo "<div class = 'banner'>";
            echo "<strong>Name:</strong>" ." ". $name;
            echo "<br />";
            echo "<strong>Surname:</strong>" ." ". $surname;
            echo "<br />";
            echo "<strong>Email</strong>:" ." ". $email;
            echo "<br />";
            echo "<strong>Hotel selected:</strong>" ." ". $hotel;
            echo "<br />";  
            echo "<strong>Check-In:</strong>" ." ". $checkin;
            echo "<br />";
            echo "<strong>Check-Out:</strong>" ." ". $checkout;
          echo "</div>";  
          ?>
        </div>

        <div class="grid-item"><h3>Hotel 2</h3>
        <?php
          //user input details on submit
          if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['hotel']) && isset($_POST['calenderIn'])&& isset($_POST['calenderOut']))
          {
            //declare variables
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $hotel = $_POST['hotel'];
            $checkin = $_POST['calenderIn'];
            $checkout = $_POST['calenderOut'];
          }

          function world($n, $s, $e, $h, $i, $o)
          {
            return "<br />" . "$n". "$s" ."$e". "$h". "$i". "$o";
          }

          //outputting details of user
          echo "<div class = 'banner'>";
            echo "<strong>Name:</strong>" ." ". $name;
            echo "<br />";
            echo "<strong>Surname:</strong>" ." ". $surname;
            echo "<br />";
            echo "<strong>Email</strong>:" ." ". $email;
            echo "<br />";
            echo "<strong>Hotel selected:</strong>" ." ". $hotel;
            echo "<br />";  
            echo "<strong>Check-In:</strong>" ." ". $checkin;
            echo "<br />";
            echo "<strong>Check-Out:</strong>" ." ". $checkout;
          echo "</div>";  
          ?>
        </div>
        
       
      </div>
    </div>  

        








    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>