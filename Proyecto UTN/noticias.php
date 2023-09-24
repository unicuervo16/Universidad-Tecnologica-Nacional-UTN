<?php

$noticias = array(
    array(
        'titulo' => 'Los gatitos son los animales más tiernos',
        'imagen' => 'Gatitos.jpg',
        'texto' => 'Para los amantes de los gatos, es evidente que son los animales más tiernos.'
    ),
    array(
        'titulo' => 'Los perros son los animales más tiernos',
        'imagen' => 'Perritos.jpg',
        'texto' => 'Para los amantes de los perros, es evidente que son los animales más tiernos.'
    ),
    array(
        'titulo' => '¡Se pudrió todo!<br> Fuerte debate entre Gatos y Perros. ¿Quién es el animal más tierno?',
        'imagen' => 'GatitosVSPerritos.jpg',
        'texto' => 'Se armó la podrida. La recontra tuerca. ¡No se deciden por el podio!'
    ),
    array(
        'titulo' => 'Pandas, nueva tendencia en ternura. Quita del podio a Gatos y Perros.',
        'imagen' => 'Panditas.jpg',
        'texto' => 'Se acabó la discusión. Hay un nuevo líder de la ternura.'
    )
);
?>

<!DOCTYPE html>
<html>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .grid-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
        padding: 20px;
    }

    .grid-item {
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        padding: 20px;
        text-align: center;
    }

    .grid-item img {
        max-width: 100%;
        height: auto;
        max-height: 200px;
    }

    .centered-text {
        text-align: center;
        font-size: 20px;
    }

    .emojis {
        animation: blink-emojis 3s infinite;
        display: inline-block;
        opacity: 0;
    }

    @keyframes blink-emojis {

        0%,
        100% {
            opacity: 0;
        }

        25%,
        75% {
            opacity: 1;
        }
    }

    .centered-heading {
        text-align: center;
    }

    .centered-text {
        text-align: center;
        font-size: 20px;
    }

    .typed-text {
        display: inline-block;
        white-space: nowrap;
        overflow: hidden;
        border-right: 0.15em solid orange;
        animation: typing 2s steps(40) infinite alternate;
    }

    @keyframes typing {
        from {
            width: 0;
        }

        to {
            width: 100%;
        }
    }
</style>

<head>
    <meta charset="utf-8" />
    <title>Programador web con PHP y MySQL</title>
    <link href="estilos.css" rel="stylesheet" />
</head>

<body>
    <section id="contenedor">
    <?php include('header.php');?>
        <section id="contenido">
            <div>
                <h1 class="centered-heading">Noticias de la semana</h1>
                <h4 class="centered-text">
                    <u>Los animales => nos invaden</u>
                    <span class="emojis">(😺,🐶,🐼)</span>
                </h4>
                <br>
                <br>
                <div class="grid-container">
                    <?php
                    for ($i = 0; $i < count($noticias); $i++) { ?>
                        <div class="grid-item">
                            <h3><?php echo $noticias[$i]['titulo']; ?></h3>
                            <img src="Noticias-IMG/<?php echo $noticias[$i]['imagen']; ?>" alt="<?php echo $noticias[$i]['titulo']; ?>">
                            <p><?php echo $noticias[$i]['texto']; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php include('footer.php');?>
    </section>
</body>

</html>