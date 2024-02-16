
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h2>Add New Teacher</h2>

        <form action="{{ route('teachers.store') }}" method="POST">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellido1">Primer Apellido:</label>
            <input type="text" id="apellido1" name="apellido1" required>

            <label for="apellido2">Segundo Apellido:</label>
            <input type="text" id="apellido2" name="apellido2" required>

            <label for="senecaUser">Usuario Seneca:</label>
            <input type="text" id="senecaUser" name="senecaUser" required>

            <label for="especialidad">Especialidad:</label>
            <input type="text" id="especialidad" name="especialidad" required>

            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>

<style>
        /* Container styles */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Heading style */
        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Label and input styles */
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Submit button style */
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</body>
</html>