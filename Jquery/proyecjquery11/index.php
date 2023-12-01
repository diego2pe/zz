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
            $('#btn').click(function()
            {
                var palabra=$('#palabra').val();
                $.ajax({
                    url:'Controlador.php',
                    type:'POST',
                    data:'palabra='+palabra,
                    success:function(result){
                        $('#mostrar').html(result);
                    }
                });
            });
        });
    </script>
</head>
<body>
    <center>
        Palabra :<input type="text" id="palabra"><br>
        <input type="button" id="btn" value="calcular mayuscula">
        <br>
        <div id="mostrar"></div>
    </center>
</body>
</html>