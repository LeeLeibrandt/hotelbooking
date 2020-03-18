<div class="grid-item">
    <?php
        //user input details on submit
        if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']))
        {
            //declare global variables
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
 
            function userInfo($n, $s, $e )
            {
            return "<br />" . "$n". "$s" ."$e";
            }

            //outputting details of user                
            echo "<center><font size='5px'>User Details</font></center>";
            echo "<br />";
            echo "<font size = '4px'>Name:" ." ". "$name</font size>";
            echo "<br />";
            echo "<font size = '4px'>Surname:" ." ". "$surname</font size>";
            echo "<br />";
            echo "<font size = '4px'>Email:" ." ". "$email</font size>";
        }         
    ?>
</div>

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
            echo "<center><font size='5px'> {$this->name} </font></center> ".self::BR;
            echo "<center><img src = '{$this->dir}{$this->photo}'></center>".self::BR;
            echo "<center><font size = '5px'>Daily Rate: R".$this->price . "</font size></center>".self::BR;
            echo "<center><font size = '4px'> Check In: ".$this->checkin."</font size></center>";
            echo "<center><font size = '4px'> Check Out: ".$this->checkout."</font size></center>";
            echo "<center><font size = '4px'> Number of days: ".$this->numberdays."</font size></center>";
            //echo "<center><font size = '5px'>Total price: R".$totalprice."</font size></center>";
            echo "<br />";
            echo "<center><font size = '4px'>Benefits:</font size></center>";
            echo "<br />";
            echo "Pool: ".$this->pool.self::BR;
            echo "bar: ".$this->bar.self::BR;
            echo "spa: ".$this->spa.self::BR;
            echo "kidfriendly: ".$this->kidfriendly.self::BR;          
        }
    }
?>

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
            echo "<center><font size='5px'> {$this->name} </font></center> ".self::BR;
            echo "<center><img src = '{$this->dir}{$this->photo}'></center>".self::BR;
            echo "<center><font size = '5px'>Daily Rate: R".$this->price . "</font size></center>".self::BR;
            echo "<center><font size = '4px'> Check In: ".$this->checkin."</font size></center>";
            echo "<center><font size = '4px'> Check Out: ".$this->checkout."</font size></center>";
            echo "<center><font size = '4px'> Number of days: ".$this->numberdays."</font size></center>";
            //echo "<center><font size = '5px'>Total price: R".$totalprice."</font size></center>";
            echo "<br />";
            echo "<center><font size = '4px'>Benefits:</font size></center>";
            echo "<br />";
            echo "Pool: ".$this->pool.self::BR;
            echo "bar: ".$this->bar.self::BR;
            echo "spa: ".$this->spa.self::BR;
            echo "kidfriendly: ".$this->kidfriendly.self::BR;                   
        }
    }
?>
    