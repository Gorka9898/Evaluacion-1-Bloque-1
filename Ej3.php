<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

    <?php

    class Edad{

        private $edad;


function __construct($edad)
{
    $this->edad = $edad;
}


    function calcEdad () {


       if ( $this->edad>=0 &&  $this->edad<=100){


        if ( $this->edad>=0 &&  $this->edad<=10){

            echo "La edad esta entre 0 y 10";

        }
        if ( $this->edad>=10 &&  $this->edad<=20){

            echo "La edad esta entre 10 y 20";

        }
        if ( $this->edad>=20 &&  $this->edad<=30){

            echo "La edad esta entre 20 y 30";

        }
        if ( $this->edad>=30 &&  $this->edad<=40){

            echo "La edad esta entre 30 y 40";

        }
        if ( $this->edad>=40 &&  $this->edad<=50){

            echo "La edad esta entre 40 y 50";

        }
        if ( $this->edad>=50 &&  $this->edad<=60){

            echo "La edad esta entre 50 y 60";

        }
        if ( $this->edad>=60 &&  $this->edad<=70){

            echo "La edad esta entre 60 y 70";

        }
        if ( $this->edad>=70 &&  $this->edad<=80){

            echo "La edad esta entre 70 y 80";

        }
        if ( $this->edad>=80 &&  $this->edad<=90){

            echo "La edad esta entre 80 y 90";

        }
        if ( $this->edad>=90 &&  $this->edad<=100){

            echo "La edad esta entre 90 y 100";

        }
        



        
    
        }else{
            echo "El rango de edad no esta entre 0 y 100";
        }
        
    }}

   $Edad = new Edad(36);

    $Edad->calcEdad();
    



    ?>


</body>

</html>