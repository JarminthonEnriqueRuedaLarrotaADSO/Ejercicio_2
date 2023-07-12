<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="controlador.php" method="post">
                    <h3>Merca naranjas</h3>
                    <label for="" class="form-label">Diga cuántas naranjas va a comprar</label>
                    <input type="text" class="form-control" id="naranjas" name="naranjas">
                    <button class="btn btn-warning mt-2 w-100">Calcular</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <table class="table">
                    <thead>
                        <tr>
                            <th>Valor a pagar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo isset($_SESSION['valorAPagar']) ? $_SESSION['valorAPagar'] : ""; ?></td>
                        </tr>
                    </tbody>
            </table>
            </div>
        </div>

    </div>
</body>
</html>
