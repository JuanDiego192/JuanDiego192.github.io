<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Registro Cursos</title>
</head>
<body>

    <?php 
        include("config/registrar.php");
        if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        $messageType = $_SESSION['message_type'];
        echo "<div class='message $messageType' id='message'>$message</div>";
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
        }
    ?>

    <div class="form-container">
    <form action="config/registrar.php" method="POST">
        <h2>Hola</h2>
        <p>Inicia tu registro</p>

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombres">
            <img class="input-icon" src="imagenes/name.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Correo">
            <img class="input-icon" src="imagenes/email.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono">
            <img class="input-icon" src="imagenes/phone.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña">
            <img class="input-icon" src="imagenes/password.svg" alt="">
        </div>
        <select class="form-select" aria-label="Default select example" name="curso">
            <option selected>Seleccione el curso a inscribirse</option>
            <option value="Fundamentos de programación">Fundamentos de programación</option>
            <option value="Base de datos">Base de datos</option>
            <option value="Seguridad Informática">Seguridad Informática</option>
            <option value="Inteligencia Artificial">Inteligencia Artificial</option>
        </select>

        <input class="btn" type="submit" name="register" value="Registrar">
    </form>
        <form action="redirect.php" method= "post">
                <button type="submit" class="boton_revisar" name="revisar_registros">Revisar registros</button>
        </form>
    </div>
    <script>
        const message = document.getElementById('message');
        if (message) {
            setTimeout(() => {
                message.classList.add('hidden');
            }, 3000);
        }
    </script>
</body>
</html>