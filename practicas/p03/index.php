<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN”
“http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5</p>
    <?php
        //aqui va mi codigo php
        $_myvar;
        $_7var;
        //myvar; //invalida
        $myvar;
        $var7;
        $_element1;
        //$house*5; //invalida

        echo '<ul>';
        echo '<li>$_myvar es valida porque inicia con guion bajo.</li>';
        echo '<li>$_7var es valida porque inicia con guion bajo.</li>';
        echo '<li>$myvar es valida porque inicia con una letra.</li>';
        echo '<li>$var7 es valida porque inicia con una letra.</li>';
        echo '<li>$_element1 es valida porque inicia con un guion bajo.</li>';

        echo '</ul>';
    ?>
</body>
</html>