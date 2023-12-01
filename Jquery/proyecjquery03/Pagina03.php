<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery</title>
    <script>
        function mostrar(dato)
        {
            alert(dato.value);
        }
    </script>
</head>
<body>
<center>
    <select id="cbonumeros" onchange="mostrar(this)">
        <option value="0" selected>------</option>
        <option value="uno"       >Uno</option>
        <option value="dos"       >Dos</option>
    </select>
</center>
</body>
</html>