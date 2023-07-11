<?php


    class Operaciones {
        private $numero;
        private $mostrar;
        private $naranja = 1500;
        public function getNumero(){
            return $this->numero;
        }
        public function setNumero($numero){
            $this-> numero = $numero;
        }
        public function getMostrar(){
            return $this->mostrar;
        }

        public function tomarDatos (){
            // print_r($_SESSION);
            if (!isset($_SESSION['numero'])) {
                $_SESSION['numero'] = array();
            }
            $nNaranjas = array(
                'Numero' => $this->numero,
            );
            
            
            array_push($_SESSION['numero'], $nNaranjas);
            print_r($_SESSION['numero']);
        }
        public function calculo(){
            print_r($_SESSION['numero']);
            foreach($_SESSION['numero'] as $key ){                             
                print_r($key);
                if ($key['Numero'] >= 10) { 

                     $resultado = ($key['Numero']*$this->naranja) * 0.15;
                     $this->mostrar = ($key['Numero']*$this->naranja)-$resultado;
                    //  echo "$". $this->mostrar;
                }
            }
            return  $this->mostrar;
        }
    }

?>