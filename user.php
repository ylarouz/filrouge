<?php 
include('header.php');
$sql = " SELECT * FROM produit ";
$result = mysqli_query($con,$sql);



?>
<div class="container">
<div class="row">
<?php while($row = mysqli_fetch_array($result)): 

?>

<div class="card col-lg-3" style="width: 18rem;margin:45px">
  <img src="img/<?php echo $row['IMAGE'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['NOM'] ?></h5>
    <p class="card-text"><h5 class="card-title">prix : <?php echo $row['PRICE'] ?>dh</h5></p>
    <p class="card-text"><h5 class="card-title">quantité : <?php echo $row['QTE'] ?></h5></p>
    <a href="addtocart.php?id_product=<?php echo $row['ID_PRD'] ?>" class="btn btn-danger">add to cart</a>
  </div>
</div>
<?php endwhile; ?>
</div>
</div>
<div style="margin-bottom: 220px;">
</div>
<?php
include('footer.php');
?>

</body>

</html>