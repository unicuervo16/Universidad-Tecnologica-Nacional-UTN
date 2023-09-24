<?php session_start();
#siempre debe ser la primera linea de codigo
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Programador web con PHP y MySQL</title>
    <link href="estilos.css" rel="stylesheet" />
</head>
<style>
    .error-card {
        background-color: #cc3c1c;
        color: white;
        border-radius: 5px;
        padding: 10px;
        text-align: center;
        width: 400px;
        margin: 0 auto;
        margin-top: 20px;
    }

    /* Estilos para la card */
    .card {
        width: 300px;
        margin: 0 auto;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    /* Estilos para los campos de entrada y el botón */
    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    .btn-primary {
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        display: block;
        margin: 0 auto;
    }
</style>

<body>
    <section id="contenedor">
        <?php include('header.php'); ?>
        <section id="contenido">
            <?php
            if (isset($_SESSION['clientes'])) {
                include('contenido_clientes.php');
            } else {
                echo '
                <div class="card">
                <h1 class="text-center">Iniciar Sesión</h1><br><br>
                <form action="validar_cliente.php" method="POST">
                    <div class="form-group">
                        <label for="correo">Correo Electrónico:</label>
                        <input type="email" id="correo" name="correo" placeholder="Usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña:</label>
                        <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                    </div>
                    <button type="submit" class="btn-primary">Iniciar Sesión</button>
                </form>
            </div>';
            }
            if (isset($_GET['error'])) {
                echo '<div class="error-card">Error! El usuario o la contraseña no son correctos.</div>';
            }
            ?>
            <br>
            <p style="color:grey; font: size 5px; text-align:center;">Solo lograras ingresar si eres cliente.<br><br><br>
            O si te doy una ayudita 🤔<br>
            correo: cliente@gmail.com<br>
            contraseña: phpintermedio</p>
        </section>
        <?php include('footer.php'); ?>
    </section>
</body>

</html>