<?php 
include('header.php');
if(isset($_POST['submit'])):
    
    $cat=htmlentities($_POST['catid']);
    $title=htmlentities($_POST['title']);
    $qte=htmlentities($_POST['qte']);
    $price=htmlentities($_POST['price']);
    $image=htmlentities($_POST['image']);
    if(empty($title) || empty($cat) || empty($qte) || empty($price) || empty($image)){
      $message='<div class="alert alert-danger text-center">remplisez les champs pour continuer.</div>';
    }else {
      
    
    $sql= " INSERT INTO produit(`ID_CAT`, `NOM`, `QTE`, `PRICE`, `IMAGE`) VALUES ('$cat','$title','$qte','$price','$image')";
    if(mysqli_query($con,$sql)){
        echo '<div class="alert alert-success">produit ajoute</div>';
    }else{
        echo 'bad'.$sql .mysqli_error($con);
    }
  }
endif;
?>

<div class="container">
<form action="addproduct.php" method="post">
  
 <?php
 if(!empty($message)){
   echo $message;
 }
 ?>
  <div class="form-group">
    <label for="exampleInputEmail1">cat id</label>
    <input type="text" name="catid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
 
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" >
 
  </div>
  
 
  <div class="form-group">
    <label for="exampleInputEmail1">QTE</label>
    <input type="number" name="qte" class="form-control"  >
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">price</label>
    <input type="number" name="price" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" name="image" class="form-control"  >

  </div>

  
  <button type="submit" name="submit" class="btn btn-primary">Ajouter </button>
</form>
</div>

<div style="margin-bottom: 220px;">
</div>
<?php
include('footer.php');
?>
</body>

</html>