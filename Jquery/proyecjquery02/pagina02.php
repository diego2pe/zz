<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery/jquery.js"></script>
    <title>Jquery</title>
    <script>
        $(document).ready(function()
        {
            $("#boton").click(function()
            {
                alert("Buenos dias amigos!!!!");
            });
        });
    </script>
</head>
<body>
<center>
    <input type="button" id="boton" value="saludo"/>
</center>
</body>
</html>