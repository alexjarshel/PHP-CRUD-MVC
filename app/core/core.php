<?php

    class core{
        public function start($urlget){


            $action = 'index';


            if(isset($urlget['pagina'])){
              $controler = ucfirst($urlget['pagina'].'controler');
            }else{
                $controler = "homeControler";
            }
              

            if(!class_exists($controler)){
                $controler = 'erroControler';
            
            }
            //echo($controler);     
            
            call_user_func_array(array(new $controler, $action), array());

        }
    }
    