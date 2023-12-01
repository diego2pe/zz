<!DOCTYPE html>
<?php
$nombre=array('IVAN','LARISSA','ALBERTO','ANDRES','ENMA','MAFALDA');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery/jquery.js"></script>
    <script>
        $(document).ready(function()
        {
            $("#boton").click(function()
            {
                var lista= new Array();
                $("input:checked").each(function()
                {
                    lista.push($(this).val());
                });
                $.ajax(
                {
                    type:"POST",
                    url:"reporte.php",
                    dataType:'html',
                    data: {lista:lista},
                    success: function(data) {
                        $('#reporte').html(data)
                    } 
                });
            });
        });
    </script>
</head>
<body>
    <center>
        <form id="form">
            <table>
                <?php
                    for($i=0;$i<count($nombre);$i++)
                    {   ?>
                        <tr>
                            <td>
                                <input type="checkbox" name="elegir[]" id="elegir" value="<?php echo $nombre[$i]; ?>"/>
                            </td>
                            <td>
                                <?php echo $nombre[$i]; ?>
                            </td>
                        </tr>
                    <?php   }?>
            </table>
            <input id="boton" type="button" value="Mostrar la Seleccion!!"/>
        </form>
        <div id="reporte"></div>
    </center>
</body>
</html>