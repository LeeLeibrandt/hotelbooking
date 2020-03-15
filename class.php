<div class="container">
      <div class="grid-container">
        <div class="grid-item"><center><h3>User Details</h3></center>
        <?php
          //user input details on submit
          if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']))
          {
            //declare variables
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
          }

          function userInfo($n, $s, $e )
          {
            return "<br />" . "$n". "$s" ."$e";
          }

          //outputting details of user
          echo "<div class = 'banner'>";
            echo "Name:" ." ". "<b>$name</b>";
            echo "<br />";
            echo "Surname:" ." ". "<b>$surname</b>";
            echo "<br />";
            echo "Email:" ." ". "<b>$email</b>";
          echo "</div>";  
          ?>
        </div>

        <div class="grid-item"><center><h3>Hotel 1</h3></center>
        <?php
          //user input details on submit
          if(isset($_POST['hotel1']) && isset($_POST['calenderIn'])&& isset($_POST['calenderOut']))
          {
            //declare variables
            $hotel1 = $_POST['hotel1'];
            $checkin = $_POST['calenderIn'];
            $checkout = $_POST['calenderOut'];
          }

          function hotelOne($h, $i, $o)
          {
            return "<br />" . "$h". "$i". "$o";
          }

          //outputting details of user
          echo "<div class = 'banner'>";
            echo "Hotel selected:" ." ". "<b>$hotel1</b>";
            echo "<br />";  
            echo "Check-In:" ." ". "<b>$checkin</b>";
            echo "<br />"; 
            echo "Check-Out:" ." ". "<b>$checkout</b>";
          echo "</div>";  
          ?>
        </div>

        <div class="grid-item"><center><h3>Hotel 2</h3></center>
        <?php
          //user input details on submit
          if(isset($_POST['hotel2']) && isset($_POST['calenderIn'])&& isset($_POST['calenderOut']))
          {
            $hotel2 = $_POST['hotel2'];
            $checkin = $_POST['calenderIn'];
            $checkout = $_POST['calenderOut'];
          }

          function hotelTwo($h, $i, $o)
          {
            return "<br />" . "$h". "$i". "$o";
          }

          //outputting details of user
          echo "<div class = 'banner'>";
            echo "Hotel selected:" ." ". "<b>$hotel2</b>";
            echo "<br />";  
            echo "Check-In:" ." ". "<b>$checkin</b>";
            echo "<br />";
            echo "Check-Out:" ." ". "<b>$checkout</b>";
          echo "</div>";  
          ?>
        </div>
        
       
      </div>
    </div>