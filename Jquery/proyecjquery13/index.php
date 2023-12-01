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
            Listar();
            HabilitarDesaHabilitarBotones(false,true);
            
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
        function HabilitarDesaHabilitarBotones(a1,a2)
        {
            document.getElementById("btnnuevo").disabled=a1;
            document.getElementById("btneliminar").disabled=a2;
        }   
    </script>
</head>
<body>
    <center>
        <div id="tabla"></div><br>
        <table>
            <tr>
                <td><input type="button" id="btnnuevo" value="Nuevo"></td>
                <td><input type="button" id="btneliminar" value="Eliminar"></td>
            </tr>
        </table>
    </center>
</body>
</html>