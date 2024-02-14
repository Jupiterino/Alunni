<?php
require_once ("./Alunno.php");

class Classe{
   private $alunni = [];


   public function __construct(){
        $A1 = new Alunno("Thomas" , "Morreale" , 18);
        $A2 = new Alunno("Alexandru" , "Botez" , 18);
        $A3 = new Alunno("Maverik" , "Iriarte" , 39);
        $A4 = new Alunno("Alessio" , "Pan" , 19);

        $this->alunni = array($A1, $A2, $A3);
   }


   public function toString(){
       $s="";
       foreach($this->alunni as $x){
           $s = $s . $x -> toString();
       }
       return $s;
   }
   /*
   public search(){
       for($i=0; i<count($this->alunni); $i++){


          
       }
   }

*/


  
}


?>