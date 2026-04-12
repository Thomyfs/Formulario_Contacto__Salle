<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario U La Salle</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 400px;
        }

        h1 {
            text-align: center;
            font-size: 22px;
            margin-bottom: 10px;
        }

        .description {
            text-align: center;
            font-size: 14px;
            color: #555;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            font-size: 14px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            resize: none;
            height: 100px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

        .link {
            text-align: center;
            margin-top: 15px;
        }

        .link a {
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Formulario de Contacto</h1>

    <p class="description">
        Bienvenido 👋  
        Por favor completa el siguiente formulario con tus datos personales y tu mensaje.  
        La información será registrada en nuestra base de datos para su respectivo seguimiento.
    </p>

    <form action="procesar.php" method="POST">

        <label>Nombre Completo</label>
        <input type="text" name="nombre" placeholder="Ej: Nicolas Perez" minlength="3" required>

        <label>Correo</label>
        <input type="email" name="email" required>

        <label>Mensaje</label>
        <textarea name="mensaje" required></textarea>

        <button type="submit">Enviar</button>

        <label>Teléfono</label>
        <input type="tel" name="telefono" placeholder="Número de teléfono" required>

        <label>Edad</label>
        <input type="number" name="edad" min="18" max="99" required>


            

    </form>

    <div class="link">
        <a href="procesar.php">Ver registros</a>
    </div>

</div>

</body>
</html>