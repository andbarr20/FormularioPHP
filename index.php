<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    <form method="post" action="guardar.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="telefono">Telefono:</label>
        <input type="number" id="telefono" name="telefono" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" required></textarea><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
