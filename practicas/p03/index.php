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

<h2>Ejercicio 2</h2>
    <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
    <ul>
        <li>$a = “ManejadorSQL”;</li>
        <li>$b = 'MySQL’;</li>
        <li>$c = &$a;</li>
    </ul>
    <p>a. Ahora muestra el contenido de cada variable</p>
    <?php
        $a = "ManejadorSQL";
        $b = 'MySql';
        $c = &$a;

        echo $a;
        echo '<br>';
        echo $b;
        echo '<br>';
        echo $c;
    ?>
    <p>b. Agrega al código actual las siguientes asignaciones:</p>
    <ul>
        <li>$a = “PHP server”;</li>
        <li>$b = &$a;</li>
    </ul>
    <?php
        $a = "PHP server";
        $b = &$a;
    ?>
    <p>c. Vuelve a mostrar el contenido de cada uno</p>
    <?php
        echo $a;
        echo '<br>';
        echo $b;
        echo '<br>';
        echo $c;
    ?>
    <p>d. Describe en y muestra en la página obtenida qué ocurrió en el segundo bloque de
    asignaciones</p>
    <p>En el punto a, el uso de comillas no es tan importante en este ejemplo,
        pero el uso & es que apunta a la direccion de memoria de la variable a. 
        Entonces si se modifica a se modifica por consecuente b.
    </p>
</body>
</html>