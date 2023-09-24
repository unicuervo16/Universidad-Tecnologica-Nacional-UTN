<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Programador web con PHP y MySQL</title>
    <link href="estilos.css" rel="stylesheet" />
</head>

<body>
    <section id="contenedor">
        <?php include('header.php'); ?>
        <section id="contenido">
            <div id="uni4_1">
                <?php
                echo '<h1><a>PHP</a> es un lenguaje de programación ampliamente utilizado y especialmente diseñado para el desarrollo de aplicaciones web dinámicas y sitios web interactivos.</h1>';
                echo '<h2>PHP se ejecuta en el servidor web y se utiliza para generar contenido dinámico en tiempo real en las páginas web.</h2>';
                echo '<h3>Caracteristicas:</h3>' . '<ul>
    <li>Programación del Lado del Servidor</li>
    <li>Generación Dinámica de Contenido</li>
    <li>Integración con HTML</li>
    <li>Acceso a Bases de Datos</li>
    <li>Amplia Comunidad y Recursos</li>
    <li>Lenguaje de Código Abierto</li>
    </ul>';
                ?>
            </div>
            <div id="uni4_2">
                <?php
                echo 'EVALUACIÓN' . '<br>';
                echo 'INTEGRADORA' . '<br>';
                echo 'PHP y MySQL' . '<br>';
                ?>
            </div>
            <div id="uni4_3">
                <?php
                $entero = 8;
                $cadenaDeCaracteres = 'Aprobado!';
                $booleano = true;
                echo 'Si el educando logra una nota superior a ' . '<b>' . $entero . '</b>' . ' en sus examenes del curso de PHP nivel intermedio,' . '<br>' . 'esto retornara en el programa ' . '<b>' . $booleano . '</b>' . ', lo cual es equivalente a ' . '<b> true </b>' . ' y la pantalla imprimirá ' . '<b>' . $cadenaDeCaracteres . '<br>';
                echo 'Entero: ' . $entero . '<br>';
                echo 'Cadena de Caracteres: ' . $cadenaDeCaracteres . '<br>';
                echo 'Booleano: ' . $booleano . '<br>';
                ?>
            </div>
            <div id="uni4_4">
                <?php
                $valor1 = 2;
                $valor2 = 9;
                $valor3 = 18;
                echo 'Explorando la tabla del 9.<br>';
                echo 'Si tenemos como ejemplo la siguiente tabla:<br>';
                for ($i = 1; $i < 11; $i++) {
                    echo 'Si 9 es multiplicado por ' . $i . ' el resultado es igual a ' . ($i * $valor2) . '<br>';
                };
                echo '<div style="text-align: center;"><h2>¡Pregunta!</h2>';
                echo '¿El numero 18 esta dentro de la tabla del 9?<br>';
                echo '<s style="color:grey";>¡NO HAGAS TRAMPA!</s><br><br></div>Respuesta: Si. Porque si multiplicamos ' . $valor1 . ' por ' . $valor2 . ' nos da como resultado ' . $valor3 . '. <br>(Secretito de matematicos: si multiplicamos 9 por 2 tambien nos da 18).';
                echo '<br><br><br><br><br>
                    Las variavles usadas fueron:<br>' .
                    '$valor1: 2<br>' .
                    '$valor2: 9<br>' .
                    '$valor3: 18<br>' .
                    '$i: 1 (la cual se incrementa en 1 hasta llegar a 10)<br>y se utilizo la multiplicacion como operador matematico.';
                ?>
            </div>
        </section>

        <?php
        include('footer.php');
        ?>
    </section>
</body>

</html>