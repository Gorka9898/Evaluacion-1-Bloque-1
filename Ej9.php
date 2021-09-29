<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

<?php 


    class Comision {
        private $venta;

        public function __construct($venta) {
            $this->venta = $venta;
            
        }


        public function comTotal() {

            $com=0;

            if ($this->venta<=10000) {

                $com = 5*$this->venta/100;
                echo $com;
                
            }else if($this->venta>10000 && $this->venta<=20000){
            
                $com = 8*$this->venta/100;
                echo $com;
                
            }elseif ($this->venta>20000 && $this->venta<=40000) {
            
                $com = 10*$this->venta/100;
                echo $com;
                
            }else {
            
                $com = 13*$this->venta/100;
                echo $com;
                 
            }





    }

    }
    $Comision = new Comision(10000);
    $Comision->comTotal();


?>


</body>

</html>