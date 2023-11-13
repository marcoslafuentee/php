
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <fieldset>
        <legend>Datos personales</legend>
        <form action="datos.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre"><br />
            Apellido <input type="text" name="apellido" id=""><br />
            Email <input type="email" name="email" id=""><br />
            Género <br />
            <input type="radio" name="genero" value="mujer" id="">Mujer<br />
            <input type="radio" name="genero" value="hombre" id="">Hombre<br />
            <input type="radio" name="genero" value="no aporta" id="">No aporta<br />


            <hr />
            Estudios <br />
            <select name="estudios" id="">
                <option value="ESO">ESO</option>
                <option value="bach">BACH</option>
                <option value="ciclo medio">CICLO MEDIO</option>
                <option value="ciclo superior">CICLO SUPERIOR</option>
                <option value="grado">GRADO</option>

            </select>
            <br>

            Idiomas
            <input type="checkbox" name="idiomas[]" value="ingles" id="">Inglés<br/>
            <input type="checkbox" name="idiomas[]" value="frances" id="">Francés<br/>
            <input type="checkbox" name="idiomas[]" value="aleman" id="">Aleman<br/>
            <input type="checkbox" name="idiomas[]" value="rumano" id="">Rumano<br/>
            <br>
            <input type="submit" value="Enviar" name="submit">

        </form>
    </fieldset>


</body>
</html>