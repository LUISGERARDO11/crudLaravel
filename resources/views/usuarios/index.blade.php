<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<form action="{{ url('/usuariosr') }}" method="POST">
    @csrf <!-- Aquí se incluye el token CSRF -->
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="apellidoPaterno">Apellido Paterno:</label>
    <input type="text" id="apellidoPaterno" name="apellido_p" required>

    <label for="apellidoMaterno">Apellido Materno:</label>
    <input type="text" id="apellidoMaterno" name="apellido_m" required>

    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="correo" required>

    <label for="telefono">Número de Teléfono:</label>
    <input type="tel" id="telefono" name="numero">

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="contrasenia" minlength="8" 
    pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,15}$"
    maxlength="15" required>

    <label for="fechaNacimiento">Fecha de Nacimiento:</label>
    <input type="date" id="fechaNacimiento" name="fecha_nacimiento">

    <button type="submit">Registrar</button>
</form>

</body>
</html>
