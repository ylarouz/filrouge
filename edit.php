<?php
include('header.php');
$IDvar = $_GET['id_product'];
$sqlquery = "SELECT * FROM `produit` WHERE ID_PRD =  '$IDvar'";
$Result = mysqli_query($con,$sqlquery);
// print_r($Result);

$row = mysqli_fetch_assoc($Result);

if(isset($_POST['ID_PRD'])){
    $ID_PRD = $_POST['ID_PRD'];
    $NOM = $_POST['NOM'];
    $Quantity = $_POST['Quantity'];

    $sqlQuery = "UPDATE produit set QTE= $Quantity WHERE ID_PRD=$ID_PRD";
    $Result = mysqli_query($con,$sqlQuery);
    $products = mysqli_fetch_array($Result);
    // if (!$Result) {
    //     printf("Error: %s\n", mysqli_error($con));
    //     exit();
    // }
    // print_r($products);
  

    redirect('admin.php');
}

?>

    <img src="img/<?php echo$row['IMAGE'] ?>" alt="" style="width: 200px; height:300px">
    <p><?php echo $row['NOM'] ?></p>
    <p><?php echo $row['PRICE'] ?></p>
   
<form method="POST" >
Quantity:
<input type="number" name="Quantity" value=<?php echo $row['QTE'] ?>>
<input type="hidden" name="ID_PRD" value="<?php echo $row['ID_PRD']?>">
<input type="hidden" name="NOM" value="<?php echo $row['NOM'] ?>">
<input type="submit"  value="edit" class="btn btn-warning">
</form>
