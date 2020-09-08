<?php 
include('header.php');
if(isset($_POST['submit'])):
    
    $Nom=htmlentities($_POST['Nom']);
    $prenom=htmlentities($_POST['prenom']);
    $email=htmlentities($_POST['email']);
    $password=htmlentities($_POST['password']);
    $sql= " INSERT INTO client(`NOM`, `PRENOM`, `EMAIL`, `PASSWORD`) VALUES ('$Nom','$prenom','$email','$password')";
    if(mysqli_query($con,$sql)){
        echo '<div class="alert alert-success">thank you for siging up</div>';
    }else{
        echo 'bad'.$sql .mysqli_error($con);
    }
endif;

?>
<div class="container">
<form action="inscription.php" method="post">
  
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="Nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">prenom</label>
    <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
 
  </div>
  
 
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="password" onkeyup="passwordVerify()">
  </div>

  
  <button type="submit" name="submit" class="btn btn-primary">sign up</button>
</form>
</div>


<div style="margin-bottom: 220px;">
</div>
<script>
 function passwordVerify(){
      var password = document.getElementById("password").value;
      var pass     = document.getElementById("password");
        console.log(password);
        if(password.match("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})")){
          pass.style.borderColor = '#2CB33E';
        }else{
          pass.style.borderColor = '#F81F2E';
        }
  }

</script>
<?php
include('footer.php');
?>