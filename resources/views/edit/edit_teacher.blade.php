<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <h1>Edit teacher</h1>
   <form action="{{ route('update_teacher', $teacher->id) }}" method="POST">

        @csrf 
        @method('PUT')

        <label for="usuarioSeneca">Usuario Séneca: </label>
        <input type="text" name="usuarioSeneca" id="usuarioSeneca" value="{{$teacher->usuarioSeneca}}">

        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" value="{{$teacher->nombre}}">

        <label for="apellido1">Apellido 1: </label>
        <input type="text" name="apellido1" id="apellido1" value="{{$teacher->apellido1}}">

        <label for="apellido2">Apellido 2: </label>
        <input type="text" name="apellido2" id="apellido2" value="{{$teacher->apellido2}}">

        <label for="especialidad">Especialidad: </label>
        <input type="text" name="especialidad" id="especialidad" value="{{$teacher->especialidad}}">

        <button type="submit">Update teacher</button>
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

         /* Link style */
         a, button {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        button{
            border: 0px solid black;
        }

</style>