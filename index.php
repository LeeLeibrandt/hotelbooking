<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css" text="text/css">
    <title>Hotel Trivago</title> 
  </head>

  <body>
   <!--MAIN PROGRAM-->

    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="img/AVENGERS LOGO VERSION 2.png" width="200px"alt="avenger">
      </a>
      <center><h1>LERACA Hotel</h1>  
    </nav>

   <center><div class="grid-item">
      <!--user inputs-->
      <form action="index.php" method="post" class="form">
          Please provide following details below:<br>
          <input type="text" name="name" placeholder="Name" required><br>
          <input type="text" name="surname" placeholder="Surname" required><br>
          <input type="email" name="email" placeholder="Email" required><br>

          Hotel Details <br>
          Compare hotels by selecting one from each dropdown: <br>
          <!--Dropdown output hotel name array-->
          1 <select name="hotel1" id="hotel" required>
            <option>---Select Hotel Here---</option>
            <?php
              $hotelname = array("Sea Point Inn", "Mojo Hotel");
              foreach ($hotelname as $hotel) {
            ?>
            <center><option> <?php echo $hotel; ?> </option>
              <?php } ?></center>
          </select>

          2 <select name="hotel2" id="hotel" required>
            <option>---Select Hotel Here---</option>
            <?php 
              $hotelname = array("Sea Point Inn", "Mojo Hotel");
              foreach ($hotelname as $hotel) {
            ?>
            <option> <?php echo $hotel; ?> </option>
              <?php } ?>
          </select><br>

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

          <div id="reserve_form">
            <div id="pickup_date"><p><label class="form">Check-In:</label><input type="date" class="textbox" id="pick_date" name="pickup_date" onchange="cal()"/></p></div>
            <div id="dropoff_date"><p><label class="form">Check-Out:</label><input type="date" class="textbox" id="drop_date" name="dropoff_date" onchange="cal()"></p></div>
            <div id="numdays"><label class="form">Number of days:</label><input type="text" class="textbox" id="numdays2" name="numdays"/>
          </div>
        <input type="submit">
      </form>
    </div>

    <?php
      /*Getting total price of days
      $_POST['numdays'] = $numberdays;
      $totalprice;
      
      $totalprice = $numberdays * $hotel->price; 
     echo $totalprice; */
    ?>

    <br> 

    <center>
    <?php
    
      //LINKING EXTERNAL PHP PAGE
      include 'class.php';
      
      //Logical arguments
      //Logical outputs for hotel one
      if($_POST)
      {
      echo "<div class='grid-item'>";
        if ($_POST['hotel1'] == $hotelname[0])
        {
          $hotel = new Hotel1;
          
          $hotel -> name = $_POST['hotel1'];
          $hotel -> photo =  'sun.jpeg';
          $hotel -> price = 500;
          $hotel -> checkin = $_POST['pickup_date'];
          $hotel -> checkout = $_POST['dropoff_date'];
          $hotel -> numberdays = $_POST['numdays'];
          $hotel -> totalprice = $totalprice;
          $hotel -> pool = 'true';
          $hotel -> bar = 'true';
          $hotel -> spa = 'true';
          $hotel -> kidfriendly = 'true';

          $hotel -> print_hotel();
        }
        elseif ($_POST['hotel1'] == $hotelname[1])
        {
          $hotel = new Hotel1;

          $hotel -> name = $_POST['hotel2'];
          $hotel -> photo = 'break.jpg'; 
          $hotel -> price = 350;
          $hotel -> checkin = $_POST['pickup_date'];
          $hotel -> checkout = $_POST['dropoff_date'];
          $hotel -> numberdays = $_POST['numdays'];
          $hotel -> totalprice = $totalprice;
          $hotel -> pool = 'true';
          $hotel -> bar = 'false';
          $hotel -> spa = 'false';
          $hotel -> kidfriendly = 'true';

          $hotel -> print_hotel();
        }
        echo "</div>";  

        //Logical outputs for hotel two
        echo "<div class='grid-item'>";
          if ($_POST['hotel2'] == $hotelname[0])
          {
            $hotel = new Hotel2;
            
            $hotel -> name = $_POST['hotel2'];
            $hotel -> photo =  'sun.jpeg';
            $hotel -> price = 500;
            $hotel -> checkin = $_POST['pickup_date'];
            $hotel -> checkout = $_POST['dropoff_date'];
            $hotel -> numberdays = $_POST['numdays'];
            $hotel -> totalprice = $totalprice;
            $hotel -> pool = 'true';
            $hotel -> bar = 'true';
            $hotel -> spa = 'true';
            $hotel -> kidfriendly = 'true';

            $hotel -> print_hotel();
          }
          elseif ($_POST['hotel2'] == $hotelname[1])
          {
            $hotel = new Hotel2;

            $hotel -> name = $_POST['hotel2'];
            $hotel -> photo = 'break.jpg'; 
            $hotel -> price = 350;
            $hotel -> checkin = $_POST['pickup_date'];
            $hotel -> checkout = $_POST['dropoff_date'];
            $hotel -> numberdays = $_POST['numdays'];
            $hotel -> totalprice = $totalprice;
            $hotel -> pool = 'true';
            $hotel -> bar = 'false';
            $hotel -> spa = 'false';
            $hotel -> kidfriendly = 'true';

            $hotel -> print_hotel();
          }
        echo "</div>"; 
      } 
    ?>
    </center>

    <?php
     /* $numberdays = $_POST['numdays'];
      $totalprice;
      
      $totalprice = $numberdays * $hotel->price; 
      echo $totalprice;*/
    ?>

  </body>
</html>   