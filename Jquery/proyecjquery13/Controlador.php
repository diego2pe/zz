<?php
    $op=$_GET['op'];
        switch($op)
        {
            case 1: {   ?>
                <table border="10">
                    <tr>
                        <td>CODIGO</td>
                        <td>NOMBRE</td>
                        <td>APELLIDO</td>
                    </tr>
                    <?php for($i=1;$i<=10;$i++) {   ?>
                    <tr>
                        <td>CCCCCC</td>
                        <td>XXXXXX</td>
                        <td>ZZZZZZ</td>
                    </tr> 
                    <?php   }?>
                </table>
                <?php
                break;
            }
        }
        
?>