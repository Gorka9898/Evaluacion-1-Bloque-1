<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

<?php 


    class Piramide {
        private $base;

        public function __construct($base) {
            $this->base = $base;
            
        }


        public function crearPiramide() {
            

                  $n=$this->base;

                $k = 2 * $n - 2;
              

                for ($i = 0; $i < $n; $i++)
                {

                    for ($j = 0; $j < $k; $j++)
                        echo "&nbsp";

                    $k = $k - 1;

                    for ($j = 0; $j <= $i; $j++ )
                    {

                        echo "* ";
                    }

                    echo "<br>";
                }
            }





    }

    // acuerdate de poner la base inpar

    $Piramide = new Piramide(7);
    $Piramide->crearPiramide();


?>


</body>

</html>