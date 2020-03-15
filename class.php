<div class="container">
    <div class="grid-container">
        <div class="grid-item">
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
                    echo "<center><font size='5px'>User Details</font></center>";
                    echo "Name:" ." ". "<b>$name</b>";
                    echo "<br />";
                    echo "Surname:" ." ". "<b>$surname</b>";
                    echo "<br />";
                    echo "Email:" ." ". "<b>$email</b>";
                echo "</div>";    
            ?>
        </div>

        <div class="grid-item">
            <?php
                class Hotel1
                {
                    const BR = '<br />';

                    var $price;
                    var $name;
                    var $photo; 
                    var $dir = 'img/';

                    public function print_hotel()
                    {              
                        echo "<div class = banner>";
                            echo "<center><font size='5px'> {$this->name} </font></center> ".self::BR;
                            echo "<center><img src = '{$this->dir}{$this->photo}'></center>".self::BR;
                            echo "<center><font size = '5px'>Daily Rate: R".$this->price . "</font size></center>" .self::BR;
                            echo "Pool: ".$this->pool.self::BR;
                            echo "bar: ".$this->bar.self::BR;
                            echo "spa: ".$this->spa.self::BR;
                            echo "kidfriendly: ".$this->kidfriendly.self::BR;
                        echo "</div>";           
                    }
                }
        
                $hotel = new Hotel1;

                $hotel -> name = $_POST['hotel1'];
                $hotel -> photo =  'sun.jpeg';
                $hotel -> price = 500;
                $hotel -> pool = 'true';
                $hotel -> bar = 'true';
                $hotel -> spa = 'true';
                $hotel -> kidfriendly = 'true';

                $hotel -> print_hotel();

            ?>

        </div>

        <div class="grid-item">
            <?php
                class Hotel2 
                {
                    const BR = '<br />';

                    var $price;
                    var $name;
                    var $photo; 
                    var $dir = 'img/';

                    public function print_hotel()
                    {                      
                        echo "<div class = banner>";
                            echo "<center><font size='5px'> {$this->name} </font></center> ".self::BR;
                            echo "<center><img src = '{$this->dir}{$this->photo}'></center>".self::BR;
                            echo "<center><font size = '5px'>Daily Rate: R".$this->price . "</font size></center>".self::BR;
                            echo "Pool: ".$this->pool.self::BR;
                            echo "bar: ".$this->bar.self::BR;
                            echo "spa: ".$this->spa.self::BR;
                            echo "kidfriendly: ".$this->kidfriendly.self::BR;
                        echo "</div>";          
                    }
                }

                $hotel = new Hotel2;

                $hotel -> name = $_POST['hotel2'];
                $hotel -> photo = 'break.jpg'; 
                $hotel -> price = 250;
                $hotel -> pool = 'true';
                $hotel -> bar = 'false';
                $hotel -> spa = 'false';
                $hotel -> kidfriendly = 'true';

                $hotel -> print_hotel();
            ?>
        </div>
        
       
    </div>
</div>