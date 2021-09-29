<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

    <?php

    class Vecindario{

        private $puertas;
        private $pisos;
      


function __construct($puertas, $pisos)
{
    $this->puertas = $puertas;
    $this->pisos = $pisos;
}


    function calccasas () {
        $numcasas=($this->puertas* $this->pisos);

        


      

        echo $numcasas;
    
        }
        
    }

   $Vecindario = new Vecindario(3,8);

    $Vecindario->calccasas();
    



    ?>


</body>

</html>