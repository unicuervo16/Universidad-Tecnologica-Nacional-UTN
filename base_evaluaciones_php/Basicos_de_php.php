<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conocimientos de PHP Básicos</title>
    <style>
        .container {
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #a1aeb7;
        }
        .imgs{
            width: auto;
            height: 325px;
            border: 1px solid transparent; 
            border-image: linear-gradient(to bottom, #ABB8C3 15%, BLACK 80%) 1;
        }

    
    </style>
</head>

<body>
    <div class="container">
        <h1>Conocimientos de PHP Básicos</h1>
        <a>Variables </a><a>Bucles </a><a>Funciones </a>


        <h2>Variables</h2>
        <p>En PHP, puedes usar diferentes tipos de variables:</p>

        <h3>Booleanos(Boolean)</h3>
        <div class="code-editor">
            <img src="Carbon/Booleanos.png" class="imgs">
        </div>

        <h3>Enteros(Integer)</h3>
        <div class="code-editor">
        <img src="Carbon/Int.png" class="imgs">
        </div>

        <h3>Flotantes(Float)</h3>
        <div class="code-editor">
        <img src="Carbon/Float.png" class="imgs">
        </div>

        <h3>Cadena de Caracteres(String)</h3>
        <div class="code-editor">
        <img src="Carbon/String.png" class="imgs">
        </div>

        <h3>Vectores(Array)</h3>
        <div class="code-editor">
        <img src="Carbon/Array.png" class="imgs">
        </div>

        <h2>Funciones</h2>
        <p>Puedes crear y usar funciones en PHP:</p>

        <h3>Función sin argumentos</h3>
        <div class="code-editor">
        <img src="Carbon/Funcion.png" class="imgs">
        </div>

        <h3>Función con argumentos y retorno</h3>
        <div class="code-editor">
        <img src="Carbon/Funcion-parametros.png" class="imgs">
        </div>
        <br><br>
    </div>
    <?php
        include('footer.php');
        ?>
</body>

</html>