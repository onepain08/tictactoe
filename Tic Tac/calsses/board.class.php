<?php 

    class Board{
        //properties
        public $size ;



        //methods
        public function __construct($size){
            $this->size =$size;
            for ($i=0; $i < $size ; $i++) { 
                echo '<button name="box" value="'.$i.'" >';
                echo "</button>";
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