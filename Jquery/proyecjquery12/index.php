<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQUERY-AJAX</title>
    <script src="jquery/jquery.js"></script>
    <script>
        $(document).ready(function()
        {
            $("#btnlistar").click(function()
            {
                Listar();
            });
        });
        function Listar()
        {
            $.ajax({
                type:"GET",
                url:"Controlador.php",
                data: "op=1",
                success: function(datos){
                    $('#tabla').html(datos);
                }
            });
        }
    </script>
</head>
<body>
    <center>
        <table>
            <tr>
                <td><input type="button" id="btnlistar" value="Listar Persona"></td>
            </tr>
        </table>
        <br>
        <div id="tabla"></div>
    </center>
</body>
</html>