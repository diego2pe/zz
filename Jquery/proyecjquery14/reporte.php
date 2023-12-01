<?php
    $lista=$_POST['lista'];
    for ($i=0;$i< count($lista);$i++)
    {
        echo ''.$lista[$i].'<br>';
    }
?>