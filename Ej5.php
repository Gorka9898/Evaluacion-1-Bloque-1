<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

<?php 
    class Entrada {
        private $altura;
        private $edad;
        private $acompañado;

        public function __construct($altura, $edad, $acompañado) {
            $this->altura = $altura;
            $this->edad = $edad;
            $this->acompañado = $acompañado;
            
        }


        public function puedeEntrar() {

            if (( $this->altura>=120) || ($this->edad>=10)) {
                
                echo "Esta persona puede entrar en la atraccion";
            }else if(($this->edad>=6) && ($this->acompañado==true)){

                echo "Esta persona puede entrar a la atraccion";


            }else{
                echo "Esta persona no puede entrar a la atraccion";
            }
           
    }





    }

    $Entrada = new Entrada(119,8,true);
    $Entrada->puedeEntrar();


?>


</body>

</html>