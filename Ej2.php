<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

    <?php

    class NUMMAYOR{

        private $num1;
        private $num2;
        private $num3;


function __construct($num1, $num2, $num3)
{
    $this->num1 = $num1;
    $this->num2 = $num2;
    $this->num3 = $num3;
}


    function calcMayor () {
        $mayor=0;

        if(($this->num1>=$this->num2) && ($this->num1>=$this->num3)){

            $mayor=$this->num1;


        }

        if(($this->num2>=$this->num3) && ($this->num2>=$this->num1)){

            $mayor=$this->num2;


        }

        if(($this->num3>=$this->num2) && ($this->num3>=$this->num1)){

            $mayor=$this->num3;


        }

        echo $mayor;
    
        }
        
    }

   $NUMMAYOR = new NUMMAYOR(9,8,6);

    $NUMMAYOR->calcMayor();
    



    ?>


</body>

</html>