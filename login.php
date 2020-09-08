<?php 
include('header.php');
if(isset($_POST['submit'])):

    $email=htmlentities($_POST['email']);
    $password=htmlentities($_POST['password']);
    $sql= " SELECT * FROM client WHERE EMAIL='$email' AND PASSWORD='$password'";
    $result = mysqli_query($con,$sql);
    $sql1= " SELECT * FROM admin WHERE MATRICULE='$email' AND PASSWORD='$password'";
    $result1 = mysqli_query($con,$sql1);
    if(mysqli_num_rows($result)>0){
        
            
             //  die($password);
             $_SESSION['log']=true;
             $_SESSION['nom']=$row['NOM'];
             $_SESSION['id']=$row['ID'];
             redirect('user.php');
             // echo '<div class="alert alert-success">mot de passe ou email est incorect</div>';

        } elseif(mysqli_num_rows($result1)>0){
            $_SESSION['logadmin']=true;
           redirect('admin.php'); 
        } 
            else{

             echo '<div class="alert alert-danger">mot de passe ou email est incorect</div>';
           }
        
    
endif;

?>
<div class="container">
<form action="login.php" method="post">
  
 
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  
  <button type="submit" name="submit" class="btn btn-primary">login</button>
  <a href="inscription.php">create account here</a>
</form>
</div>
<div style="margin-bottom: 220px;">
</div>
<?php
include('footer.php');
?>
</body>

</html>