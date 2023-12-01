<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery/jquery.js"></script>
    <title>PHP</title>
    <script>
        $(document).ready(function() {
            $("#btenviar").click(function() 
            {
                $("#form").attr('action', 'controlador.php');
                $("#form").attr('method', 'GET');
                $("#form").submit();
                
            });
        });
    </script>
</head>
<body>
    <center>
        <form id="form">
            <table>
                <tr>
                    <td>Numero:</td>
                    <td><input type="text" id="txtn1" name="txtn1"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td><input type="button" id="btenviar" value="enviar"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>