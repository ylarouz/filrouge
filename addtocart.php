<?php
include('header.php');
$IDvar = $_GET['id_product'];
$sqlquery = "SELECT * FROM `produit` WHERE ID_PRD =  '$IDvar'";
$Result = mysqli_query($con,$sqlquery);
// print_r($Result);
if (!$Result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
$row = mysqli_fetch_assoc($Result);

if(isset($_POST['ID_PRD'])){
    $ID_PRD = $_POST['ID_PRD'];
    $NOM = $_POST['NOM'];
    $Quantity = $_POST['Quantity'];

    $sqlQuery = "SELECT * FROM produit where ID_PRD = '$ID_PRD'";
    $Result = mysqli_query($con,$sqlQuery);
    $products = mysqli_fetch_array($Result);
    // if (!$Result) {
    //     printf("Error: %s\n", mysqli_error($con));
    //     exit();
    // }
    print_r($products);
    $_SESSION['Product'.$ID_PRD] = array(
        'id' => $products['ID_PRD'], 
        'NOM' => $products['NOM'],
        'Prix' => $products['PRICE'],
        'Quantity' => $Quantity,
        'Total' => $products['PRICE']*$Quantity,
    );
    $_SESSION['cpt'] +=1;
    $_SESSION['Toto'] +=  $_SESSION['Product'.$ID_PRD]['Total'];

    redirect('checkouts.php');
}

?>
<div class="container" style="width: 60%;">
    <div class="row bg-light shadow-lg my-5 justify-content-md-center">
        <div class="col-md-6 ">
              <div class="text-center">
     
                <img src="img/<?php echo$row['IMAGE'] ?>" alt="" class="img-fluid my-3 rounded">
                <p><?php echo $row['NOM'] ?></p>
                <p><?php echo $row['PRICE'] ?> DH</p>
                </div>
        </div>
                <div class="col-md-6 align-self-center">
                    <form method="POST" >
                        <p class="text-secondary">qte disponible est : <?php echo $row['QTE']?></p>
                    Quantity:
                    <input type="number" name="Quantity" value=1 class="form-control">
                    <input type="hidden" name="ID_PRD" value="<?php echo $row['ID_PRD']?>">
                    <input type="hidden" name="NOM" value="<?php echo $row['NOM'] ?>">
                    <input type="submit" href="addtocart.php?id_product=<?php echo $row['ID_PRD']?>" value="add to carte" class="btn btn-danger my-3">
                    </form>
                </div>
            </div>
</div>
