<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartera Digital</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        input, button {
            margin-bottom: 10px;
            width: 100%;
            padding: 8px;
        }
    </style>
</head>
<body>

    <h1>Cartera Digital</h1>

    <!-- Formulario de Registro -->
    <h2>Registro de Usuario</h2>
    <form action="registrar_usuario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Registrar</button>
    </form>

    <!-- Formulario de Inicio de Sesión -->
    <h2>Iniciar Sesión</h2>
    <form action="iniciar_sesion.php" method="post">
        <label for="email_login">Correo Electrónico:</label>
        <input type="email" id="email_login" name="email_login" required>

        <label for="password_login">Contraseña:</label>
        <input type="password" id="password_login" name="password_login" required>

        <button type="submit">Iniciar Sesión</button>
    </form>

    <!-- Sección de Transferencias -->
    <h2>Realizar Transferencia</h2>
    <form action="realizar_transferencia.php" method="post">
        <label for="destinatario">Destinatario:</label>
        <input type="text" id="destinatario" name="destinatario" required>

        <label for="monto">Monto:</label>
        <input type="number" id="monto" name="monto" required>

        <button type="submit">Transferir</button>
    </form>

    <!-- Estado de Cuenta -->
    <h2>Estado de Cuenta</h2>
    <!-- Aquí puedes mostrar el historial de transacciones y el saldo actual -->

</body>
</html>