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

   <!--MAIN PROGRAM-->
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
          Compare hotels by selecting one from each dropdown: <br>
          <!--Dropdown output hotel name array-->
          1 <select name="hotel1" id="hotel" required>
            <option>---Select Hotel Here---</option>
            <?php
              $hotelname = array("The New Tulbagh Hotel", "DoubleTree by Hilton Hotel", "Sea Point Inn", "Mojo Hotel");
              foreach ($hotelname as $hotel) {
            ?>
            <center><option> <?php echo $hotel; ?> </option>
              <?php } ?></center>
          </select>

          2 <select name="hotel2" id="hotel" required>
            <option>---Select Hotel Here---</option>
            <?php 
              $hotelname = array("The New Tulbagh Hotel", "DoubleTree by Hilton Hotel", "Sea Point Inn", "Mojo Hotel");
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

    <?php
      //LINKING EXTERNAL PHP PAGE
      include 'class.php';
   
    ?>

        








    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>