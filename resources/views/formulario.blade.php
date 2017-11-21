<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form action="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            Usuario: <input type="text" name="NombreUsu">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>