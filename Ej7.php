<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

<?php 
    class NumAsta1 {
        private $num;

        public function __construct($num) {
            $this->num = $num;
            
        }


        public function asta1() {
            $result=$this->num ;
            do {

                if ($this->num%2==0) {
                  
                    do {

                        
                       echo $result;
                       echo "<br>";


                       $result = $this->num/2;
                       $this->num= $this->num/2;


                    } while ($this->num >1 && $this->num%2==0);

                }else{

                    do {
                        echo $result;
                        echo "<br>";
    
                        $result = $this->num*3 + 1;
                        $this->num = $this->num*3 + 1;

                    } while ($this->num%2!=0);



                }




            } while ($this->num >1);

            echo "1";


    }





    }

    $NumAsta1 = new NumAsta1(50);
    $NumAsta1->asta1();


?>


</body>

</html>