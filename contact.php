<?php

include('header.php');
?>
<div class="container mt-5" style="width: 60%">
      <div class="row">

          <div class="col-12">



  <div class="form-group">
    <label >le nom</label>
    <input type="text" id="nom" class="form-control" placeholder="Entrer votre nom">
  </div>
  <div class="form-group">
    <label >email</label>
    <input type="email" id="email" class="form-control" placeholder="Entrer votre email">
  </div>
  <div class="form-group">
    <label >objectif</label>
    <textarea id="message" class="form-control" rows="3"></textarea>
  </div>
   <button type="submit" onclick="mes();" class="btn btn-primary d-block mx-auto">Envoyer</button>














          </div>



      </div>




    </div>

    <script >

 

     function mes(){

      let nom = document.getElementById('nom').value;
      let email = document.getElementById('email').value;
      let message = document.getElementById('message').value;
       console.log(nom,email,message);


    if(nom != "" && email != "" && message != ""){



       let xhttp = new XMLHttpRequest();
       xhttp.open("POST", "email.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.onload = function() {

     // let data =JSON.parse(this.responseText);
      console.log(this.responseText);

 
    }

  xhttp.send("nom="+nom+"&email="+email+"&message="+message);


       nom = document.getElementById('nom').value="";
       email = document.getElementById('email').value="";
       message = document.getElementById('message').value="";


              alert("le messsage a ete envoyer ");

      console.log("envo");
      }else{

        alert("remplir tout les champs ");
      }

  }





</script>


<?php

include('footer.php');
?>