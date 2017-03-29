<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>

    <?php
        #variables: TODAS las variables se declaran con $
        $num1 = 10;
        $num2 = 20;
        $suma = $num1 + $num2;

        //echo 'La suma es: $suma';  <--- Usando comillas simples te va a imprimir el nombre de la variable.

        //echo "La suma es: $suma";  <---De esta forma te imprime el valor de la variable.

        #La concatenación de cadenas se hace con el punto.
        echo 'La suma es: '. $suma; 

        # Ciclos, condicionale, switch, etc son lo mismo que en JS.

    ?>

    </h1>
</body>
</html>