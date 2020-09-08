<?php 
include('header.php');
$sql = " SELECT * FROM produit ";
$result = mysqli_query($con,$sql);
// print_r($_SESSION);


?>
<div class="container">
<div class="row">
<?php while($row = mysqli_fetch_array($result)):

?>

<div class="card col-lg-3" style="width: 18rem;margin:45px">
  <img src="img/<?php echo $row['IMAGE'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['NOM'] ?></h5>
    <p class="card-text"><h5 class="card-title"><?php echo $row['PRICE'] ?>dh</h5></p>
    <p class="card-text"><h5 class="card-title">qte:<?php echo $row['QTE'] ?></h5></p>
    <div class="d-inline">
    <a href="edit.php?id_product=<?php echo $row['ID_PRD'] ?>" class="btn btn-warning mt-2  ">edit</a></div>
    <div class="d-inline">
    <a href="delete.php?id_product=<?php echo $row['ID_PRD'] ?>" class="btn btn-danger mt-2 ">delete</a></div>
  </div>
</div>
<?php endwhile; ?>
</div>
<div style="margin-bottom: 220px;">
</div>
</div>
<?php
include('footer.php');
?>
</body>

</html>