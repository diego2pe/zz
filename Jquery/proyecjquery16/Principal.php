<!DOCTYPE html>
<?php
$codigo=array('0001','0002','0003','0004','0005','0006');
$nombre=array('IVAN','LARISSA','ALBERTO','ANDRES','ENMA','MAFALDA');
$apellido=array('PETRLIK','PETRLIK','PETRLIK','PETRLIK','VASQUEZ','AZABACHE');
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
                var cod=$('input:radio[name=elegir]:checked').val();
                var nom=$('#nomb').val();
                var ape=$('#ape').val();
                $.ajax(
                {
                    type:"POST",
                    url:"reporte.php",
                    dataType:'html',
                    data:   {codigo:cod,nombre:nom,apellido:ape},
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
                    for($i=0;$i< count($codigo);$i++)
                    {   ?>
                    <tr>
                        <td>
                            <input type="radio" name="elegir" id="elegir" value="<?php echo $codigo[$i]; ?>"/>
                            <input type="hidden"  id="nomb" value="<?php echo $nombre[$i]; ?>">
                            <input type="hidden"  id="ape" value="<?php echo $apellido[$i]; ?>">
                        </td>
                        <td><?php echo $nombre[$i]; ?></td>
                        <td><?php echo $apellido[$i]; ?></td>
                    </tr>
                    <?php   }   ?>
            </table>

            <input id="boton" type="button" value="Mostrar la Selección!!"/>
        </form>
        <div id="reporte"></div>
    </center>
</body>
</html>