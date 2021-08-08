<?php 

    class Board{
        //properties
        public $size ;
        public $clicled;



        //methods
        public function __construct($size, $clicked){
            $this->size =$size;
            $this->clicked = $clicked;
            for ($i=0; $i < $size ; $i++) { 
                echo '<input type="submit" name="box'.$i.'"  value="" >';
                
                if($i != 0 && ($i+1) % 3 == 0){
                    echo "</br>";
                }
            }
            
        }
        
        public function test(){
            
        }
        

        public function getValue(){
            return $this->size;
        }



    }

    

?>