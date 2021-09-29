<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

<?php 
    class Pot {
        private $potencia;
        private $cantidad;

        public function __construct($potencia, $cantidad) {
            $this->potencia = $potencia;
            $this->cantidad = $cantidad;
            
        }


        public function calcPot() {
            $i=1;

           do {
              

            $result= pow($i, $this->potencia );

            $i++;

            if ($result<= $this->cantidad) {
                echo "El resultado es " ;

                echo $result ;
    
                echo "<br>";
            }





           } while ($result <=  $this->cantidad);


    }





    }

    $Pot = new Pot(3,100);
    $Pot->calcPot();


?>


</body>

</html>