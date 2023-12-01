<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario </title>
    <script src="jquery/jquery.js"></script>
    <script>
        $(document).ready(function()
        {
            $('#enviar').click(function()
            {
                var categorias= new Array();
                $("input[name='categoria[]']:checked").each(function()
                {
                    categorias.push($(this).val());
                });
                $("#formulario").attr('action', 'reporte.php');
                $("#formulario").attr('method', 'POST');
                $("#formulario").submit();
            });
        });
    </script>
</head>
<body>
    <center>
        <form id="formulario">
            <?php
            for($i=1;$i<=5;$i++)
            {  ?>
                <input type="checkbox" name="categoria[]" value="<?php echo $i ;?>" />
                <?php echo $i ;?><br>
            <?php
            }
            ?>
            <br><br>
            <input type="button" id="enviar" value="enviar"/>
        </form>
    </center>
</body>
</html>