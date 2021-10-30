<?php
class Controller{




    public function sortear($ng, $min, $max, $check) {

        $nsor = array();

        for($i = 0; $i < $ng; $i++ ) {
            $valor = rand($min, $max);
                if(in_array($valor, $nsor)){
                $ng++;
                }else{
                    array_push($nsor, $valor);
                }
        }  
             if($check == true){
             sort($nsor);
            }

        return $nsor;
    }
}
