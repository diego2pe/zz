<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery/jquery.js"></script>
    <script>
        $(document).ready(function()
        {
            $("input[name=edad]").click(function()
            {
                cod= $('input:radio[name=edad]:checked').val();
                $("#formulario").attr('action', 'reporte.php');
                $("#formulario").attr('method', 'POST');
                $("#formulario").submit();
            });
        });
    </script>
</head>
<body>
    <center><form id="formulario">
        <?php
            for($i=1;$i<=5;$i++)
            {   ?>
                <input type="radio" name="edad" id="edad" value="<?php echo $i ;?>"> <?php echo $i ;?> </input> <br>
                <?php
            } ?>
        </form>
    </center>
</body>
</html>