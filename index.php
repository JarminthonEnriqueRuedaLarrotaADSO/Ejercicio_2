<?php

session_start();

class ExpendioNaranjas {
    private $precioPorKilo;
    private $descuento;
    
    public function __construct($precioPorKilo, $descuento) {
        $this->precioPorKilo = $precioPorKilo;
        $this->descuento = $descuento;
        
        // Inicializar la variable de sesión si no existe
        if (!isset($_SESSION['clientes'])) {
            $_SESSION['clientes'] = array();
        }
    }
    
    public function agregarCliente($nombre, $kilosComprados) {
        $cliente = array(
            'nombre' => $nombre,
            'kilos' => $kilosComprados
        );
        array_push($_SESSION['clientes'], $cliente);
    }
    
    public function calcularPagoClientes() {
        $totalPagoClientes = 0;
        foreach ($_SESSION['clientes'] as $cliente) {
            $pagoCliente = 0;
            if ($cliente['kilos'] > 10) {
                $pagoCliente = $cliente['kilos'] * $this->precioPorKilo * (1 - $this->descuento);
            } else {
                $pagoCliente = $cliente['kilos'] * $this->precioPorKilo;
            }
            
            echo "El cliente " . $cliente['nombre'] . " debe pagar $" . $pagoCliente . "<br>";
            $totalPagoClientes += $pagoCliente;
        }
        
        echo "El total recibido por las compras es $" . $totalPagoClientes . "<br>";
    }
}

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expendio = new ExpendioNaranjas(1500, 0.15);

    // Agregar clientes
    $expendio->agregarCliente($_POST['nombre'], $_POST['kilos']);

    // Calcular pagos
    $expendio->calcularPagoClientes();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expendio de Naranjas</title>
</head>
<body>
    <h1>Expendio de Naranjas</h1>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nombre">Nombre del cliente:</label>
        <input type="text" id="nombre" name="nombre"><br>
        
        <label for="kilos">Kilos comprados:</label>
        <input type="text" id="kilos" name="kilos"><br>
        
        <button type="submit">Agregar cliente</button>
    </form>
</body>
</html>
