
<form method="post" action="">
    <label for="numero">Ingrese un número:</label>
    <input type="text" name="numero" id="numero" required>
    <button type="submit">CALCULAR</button>
</form>

<?php
function calcularFactorial($numero) {
    $factorial = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = isset($_POST['numero']) ? intval($_POST['numero']) : 0;

    
    $factorial = calcularFactorial($numero);
    echo "El factorial de $numero es: $factorial";
}
?>

