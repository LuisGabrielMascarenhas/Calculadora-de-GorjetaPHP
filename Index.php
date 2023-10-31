<?php
include_once 'php/Gorjeta.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gorjeta</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="divForm">
        <h1>Calculadora de Gorjeta</h1>
        <form method="get" class="formulario">
            <label for="valor">Valor da conta:</label>
            <input type="number" id="valor" name="valor" required>

            <label for="qualidade">Qualidade do atendimento:</label>
            <select name="qualidade" id="qualidade" required>
                <option value="10">Excelente 10%</option>
                <option value="8">Ótimo 8%</option>
                <option value="5">Bom 5%</option>
                <option value="2">Ruim 2%</option>
            </select>
            <button type="submit">Calcular Gorjeta</button>
        </form>
        <div class="exibirValor">
            <label for="valorGorjeta">Valor da Gorjeta</label>
            <input type="text" id="valorGorjeta" name="valorGorjeta" value="R$<?php if (isset($_GET['valor'])) {
                                                                                    $gorjeta = new Gorjeta($_GET['valor'], $_GET['qualidade']);
                                                                                    echo $gorjeta->getGorjeta();
                                                                                } ?>" readonly>
            <label for="valorTotal">Valor Total</label>
            <input type="text" id="valorTotal" name="valorTotal" value="R$<?php if (isset($_GET['valor'])) {
                                                                                $gorjeta = new Gorjeta($_GET['valor'], $_GET['qualidade']);
                                                                                echo $gorjeta->getValorTotal();
                                                                            } ?>" readonly>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>