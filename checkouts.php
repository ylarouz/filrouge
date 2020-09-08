<?php
include ('header.php');
// session_destroy();
// print_r($_SESSION);
?>
<table class="table">
    <tr>
        <td>NOM</td>
        <td>PRIX</td>
        <td>QUANTITY</td>
        <td>TOTAL</td>
    </tr>
    <?php
        foreach ($_SESSION as $key => $value):
            if(substr($key,0,7)=='Product'):
    ?>
    <tr>
        <td><?php  echo  $value['NOM']?></td>
        <td><?php  echo  $value['Prix']?></td>
        <td><?php  echo $value['Quantity']?></td>
        <td><?php  echo  $value['Total']?></td>
    </tr>
            <?php endif;
         endforeach; ?>
    
</table>
<div class="mx-auto text-center">
<table  class="mx-auto table " style="width:300px">
        <tr>
            <th>produit</th>
            <th>total</th>
        </tr>
        <tr>
            <td><?php echo $_SESSION['cpt']?></td>
            <td><?php echo $_SESSION['Toto']?>dh</td>
        </tr>
    </table><br>
    <button class="btn btn-danger"><a href="paye.php" style="color: #fff;">payer</a></button>
</div>