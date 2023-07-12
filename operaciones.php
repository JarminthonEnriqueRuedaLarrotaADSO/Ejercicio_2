<?php


class Operaciones {
    private $numero;
    private $mostrar;
    private $naranja = 1500;
    public function getNumero() {
        return $this->numero;
    }
    public function setNumero($numero) {
        $this->numero = $numero;
    }
    public function getMostrar() {
        return $this->mostrar;
    }
    public function tomarDatos() {
        if (!isset($_SESSION['numero'])) {
            $_SESSION['numero'] = array();
        }
        $nNaranjas = array(
            'Numero' => $this->numero,
        );
        array_push($_SESSION['numero'], $nNaranjas);
        // Puedes imprimir el array después de agregar un elemento
        print_r($_SESSION['numero']);
    }
    public function calculo() {
        if (isset($_SESSION['numero']) && is_array($_SESSION['numero'])) {
            foreach ($_SESSION['numero'] as $key) {
                if ($key['Numero'] >= 10) {
                    $resultado = (intval($key['Numero']) * $this->naranja) * 0.15;
                    $this->mostrar = (intval($key['Numero']) * $this->naranja) - $resultado;
                    print_r($this->mostrar);
                } else {
                    $this->mostrar = (intval($key['Numero']) * $this->naranja);
                }
            }
        }
        return $this->mostrar;
    }
    
    

    
}

?>
