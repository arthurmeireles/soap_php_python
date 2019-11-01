<?php
    class server {
        public function soma($a, $b){
            return $a+$b;
        }
        public function subtracao($a, $b){
            return $a-$b;
        }
        public function divisao($a, $b){
            return $a/$b;
        }
        public function multiplicacao($a, $b){
            return $a*$b;
        }

    }
    // indica onde vai encontrar o servidor
    $parametros = array(
        'uri' => 'localhost:5000/server.php',
    );

    $server = new SoapServer (null, $parametros);
    $server->setObject(new server());
    
    //serve para pegar as requisições da URL
    $server->handle();
    