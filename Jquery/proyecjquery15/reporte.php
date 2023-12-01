<?php
    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    for ($i=0;$i< count($codigo);$i++)
    {
        echo ''.$codigo[$i].'   '.$nombre[$i].'   '.$apellido[$i].'<br>';
    }
?>