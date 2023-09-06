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
        unset($a, $b, $c);
        $a = "ManejadorSQL";
        $b = 'MySql';
        $c = &$a;

        echo "\$a: $a";
        echo '<br>';
        echo "\$b: $b";
        echo '<br>';
        echo "\$c: $c";
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
        echo "\$a: $a";
        echo '<br>';
        echo "\$b: $b";
        echo '<br>';
        echo "\$c: $c";
    ?>
    <p>d. Describe en y muestra en la página obtenida qué ocurrió en el segundo bloque de
    asignaciones</p>
    <p>En el punto a, el uso de comillas no es tan importante en este ejemplo,
        pero el uso & es que apunta a la direccion de memoria de la variable a. 
        Entonces si se modifica a se modifica por consecuente b.
    </p>
    
    <h2>Ejercicio 3</h2>
    <p>3. Muestra el contenido de cada variable inmediatamente después de cada asignación,
    verificar la evolución del tipo de estas variables (imprime todos los componentes de los
    arreglo):</p>
    <ul>
        <li>$a = “PHP5”;</li>
        <li>$z[] = &$a;</li>
        <li>$b = “5a version de PHP”;</li>
        <li>$c = $b*10;</li>
        <li>$a .= $b;</li>
        <li>$b *= $c;</li>
        <li>$z[0] = “MySQL”;</li>
    </ul>
    <p>Evolucion</p>
    <?php
        unset($a, $b, $c, $z); /*eliminar de la memoria pq asi se soluciono el problema*/
        $a = "PHP5";
        echo "\$a: $a"; /*solo se le agrega una cadena a $a */
        echo '<br>';

        $z[] = &$a; /*z es una arreglo, en su primer espacio que es 0 almacena la direccion de memoria
        de la variale $a*/
        echo "\$z[]:"; print_r($z); /*print_r($z); muestra todos los componentes del arreglo*/
        echo '<br>';

        $b = "5a version de PHP"; /*solo se le agrega una cadena a $b */
        echo "\$b: $b";
        echo '<br>';

        $c = $b*10; /*en $c se le trata de asignar el resultado de la operacion de tratar de convertir 
        lo que tiene $b a numero y multiplicarlo por 10. $b inicia con un 5, entonces ese es el numero que agarra
        y multiplica*/
        echo "\$c: $c";
        echo '<br>';

        $a .= $b; /*Concatena lo que hay en $a con $b*/
        echo "\$a: $a";
        echo '<br>';

        $b *= $c; /*Vuelve a tratar de hacer una conversion pero se toma el 5 de $b y lo multiolica por el 50 de 
        $cS*/
        echo "\$b: $b";
        echo '<br>';

        $z[0] = "MySQL"; /*Se cambia lo que habia en la posicion 0 de $z, tenia la direccion de $a, pero
        tambien $a se modifico*/
        echo "\$z[]: ";
        print_r($z);
        echo '<br>';
    ?>

    <h2>Ejercicio 4</h2>
    <p>Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de  la matriz $GLOBALS o del modificador 
    global de PHP.</p>
    <?php
        unset($a, $b, $c, $z);
        $a = "PHP5";
        echo "\$a: " . $GLOBALS['a']; 
        echo '<br>';

        $z[] = &$a;
        echo "\$z[]: " . $GLOBALS['z'][0]; 
        echo '<br>';

        $b = "5a version de PHP";
        echo "\$b: " . $GLOBALS['b']; 
        echo '<br>';

        $c = $b * 10;
        echo "\$c: " . $GLOBALS['c']; 
        echo '<br>';

        $a .= $b;
        echo "\$a: " . $GLOBALS['a']; 
        echo '<br>';

        $b *= $c;
        echo "\$b: " . $GLOBALS['b'];
        echo '<br>';

        $z[0] = "MySQL";
        echo "\$z[]: " . $GLOBALS['z'][0];
        echo '<br>';
        /*No deberia de cambiar la ejecucion, pues no hay variables que estuvieran en otro ambito*/
    ?>
</body>
</html>