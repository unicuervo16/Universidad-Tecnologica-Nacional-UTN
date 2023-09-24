<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Programador web con PHP y MySQL</title>
    <link href="estilos.css" rel="stylesheet" />
    <style>
        .botones-list {
            display: flex;
            list-style-type: none;
            padding: 0;
        }

        .botones-item {
            flex: 1;
            height: 50px;
            border: solid 2px black;
            border-radius: 8px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        .botones-item:hover {
            scale: 1.05;
            border: solid 2px grey;
            background-color: lavender;
        }

        .botones-item:last-child {
            margin-right: 0;
        }

        @keyframes textBlink {

            0%,
            100% {
                color: black;
                text-shadow: none;
            }

            50% {
                color: red;
                text-shadow: 0 0 10px red;
            }
        }

        @keyframes textSize {

            0%,
            100% {
                transform: scale(1);
                text-shadow: none;

            }

            50% {
                transform: scale(1.05);
                text-shadow: 0 0 10px red;
            }
        }

        #img_item:hover {
            scale: 1.15;
        }
    </style>
</head>

<body>
    <?php
    $item = isset($_GET['item']) ? $_GET['item'] : '';

    $info_item = '';
    $precio_item = '';
    $img_item = '';
    $caract_item = '';

    if (empty($info_item)) {
        $info_item = 'Banco Venecia';
        $precio_item = '$ 450.00';
        $img_item = 'imagenes/venecia.jpg';
        $caract_item = 'Se trata de una colección de muebles de madera de eucaliptos, <b>certificada con el sello FSC (SWCOC-091)</b> y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
    }

    switch ($item) {
        case 'SC':
            $info_item = 'Sillón Capri';
            $precio_item = '$ 345.00';
            $img_item = 'imagenes/sillon1.jpg';
            $caract_item = 'Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
            break;
        case 'MI':
            $info_item = 'Mesa Ipanema';
            $precio_item = '$ 500.00';
            $img_item = 'imagenes/ipanema.jpg';
            $caract_item = 'Se trata de una colección de muebles de madera de eucaliptos, <b>certificada con el sello FSC</b> y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms';
            break;
        case 'BV':
            $info_item = 'Banco Venecia';
            $precio_item = '$ 450.00';
            $img_item = 'imagenes/venecia.jpg';
            $caract_item = 'Se trata de una colección de muebles de madera de eucaliptos, <b>certificada con el sello FSC (SWCOC-091)</b> y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
            break;
    }
    ?>

    <section id="contenedor">
        <?php include('header.php'); ?>
        <section id="contenido">
            <ul class="botones-list">
                <li class="botones-item"><a href="catalogo.php?item=SC" style="color: black !important;font-weight: bold;">Sillón Capri</a></li>
                <li class="botones-item"><a href="catalogo.php?item=MI" style="color: black !important;font-weight: bold;">Mesa Ipanema</a></li>
                <li class="botones-item"><a href="catalogo.php?item=BV" style="color: black !important;font-weight: bold;">Banco Venecia</a></li>
            </ul>

            <div id="items" style="display: flex; border: 4px double grey; padding: 10px;">

                <div id="info_item" style="flex: 1;font-size:30px; margin-top:22px;">
                    <p><?php echo $info_item; ?></p>
                </div>

                <div id="contenido_item" style="display: flex; flex: 2; align-items: center;">
                    <div id="img_item" style="flex: 1; padding-right: 10px;">
                        <img src="<?php echo $img_item; ?>" alt="">
                    </div>
                    <div id="precio_caract_item" style="flex: 2;">
                        <h4 style="animation: textBlink 2s infinite, textSize 2s alternate infinite; color: red; margin-left: 35%;">
                            <?php echo $precio_item; ?>
                        </h4>
                        <p><?php echo $caract_item; ?></p>
                    </div>
                </div>
            </div>
        </section>

        <?php include('footer.php'); ?>
    </section>
</body>

</html>
