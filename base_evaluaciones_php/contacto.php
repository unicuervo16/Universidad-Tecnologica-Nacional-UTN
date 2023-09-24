<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
<style>
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            height: 150px;
        }
        .btn-container {
            text-align: center;
        }

        .btn {
            background-color: #80C141;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #0056b3;
        }
        
    </style>
</head>

<body>
<section id="contenedor">
<?php include('header.php');?>
    <section id="contenido">
    <div class="container">
        <h2>Formulario de Consulta</h2>
        <form action="enviar_consulta.php" method="POST">
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" maxlength="30" required placeholder="Juan">
            </div>
            <div>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" maxlength="50" required placeholder="Pérez">
            </div>
            <div>
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" maxlength="100" required placeholder="correo@example.com">
            </div>
            <div>
                <label for="consulta">Consulta:</label>
                <textarea id="consulta" name="consulta" maxlength="255" required placeholder="Escribe tu consulta aquí"></textarea>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn">Enviar Consulta</button>
            </div>
        </form>
    </div>
    </section>

    <?php include('footer.php');?>
</body>
</html>