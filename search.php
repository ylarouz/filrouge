<?php
include('header.php');
$search = isset($_POST['search']) ? ($_POST['search']):'';
// $search = $_POST['search'];
// print_r($search);
$sql = "SELECT * FROM produit WHERE NOM LIKE '%$search%' ";
$result = query($sql);
if (mysqli_num_rows($result)>0):
?>
<?php while($row = mysqli_fetch_assoc($result)):?>

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
<?php else: ?>
    <div class="alert alert-info text-center">aucun produit </div>
<?php endif; ?>
<div style="margin-bottom: 220px;">
</div>
<?php
include('footer.php');
?>
