<?php

include('connexion.php');
include('function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://kit.fontawesome.com/dd615cfe68.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="header+footer.css">
    <link rel="stylesheet" href="acceuil.css">
    <link href="https://fonts.googleapis.com/css?family=Jost&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../js/header+footer.js"></script>
    
    <style>
    a{
        color : black;
        margin-left : 45px;
    }
     </style>
    <title>Document</title>
</head>

<body>
    <div id='ImgAcc'>
        <div id="Header">
            <img id="logo" src="img/logo.png" alt="">
            <div id="HeaderWithoutLogo">
                <div id="Rayons">
               
                    <!-- <img id="search" src="img/bars.png" alt=""> -->
                    <!-- <p>Rayons</p> -->
                </div>
                <div id="Recherche">
                <form action="search.php" method="post">

                <input name="search" type="text" placeholder="Lait,oeufs,coca.....">
                    <button type="submit"></button>
                </form>
                
                </div>

                
                <div id="Moncompte">
                    <img id="profil" src="img/profil.png" alt="">
                   
                   
                    <p>Mon Compte</p>
              
                </div>
                <a href="user.php">home</a>
                <?php
                if ((isset($_SESSION['log']) && $_SESSION['log']=true)){

                   echo '<a href="logout.php">déconnecté</a>';
                }
                

                



elseif ((isset($_SESSION['logadmin']) && $_SESSION['logadmin']=true)){

echo '<a href="addproduct.php">ajouter produit</a>';
echo '<a href="logout.php">déconnecté</a>';
}

else {
    echo '<a href="login.php">connecté</a>';
}
?>
                
                <div id="Panier">
                    <button id="BtnPanier">
                        <img src="img/panier.png" alt="" id="imgpanier">
                        <p id="Paragpanier" >0,00$</p>
                    </button>

                </div>

            </div>
            <div id="CliqueSearchMobile" style="display: none;">
                <div>
                    <div id="Recherche1">
                        <input type="text" placeholder="Lait,oeufs,coca.....">
                        <button><img src="img/search.png" alt=""></button>
                    </div>
                    <p id="Annuler">annuler</p>
                </div>
                <div id="Panier1">
                    <button>
                        <img src="img/panier.png" alt="">
                        <p>0,00$</p>
                    </button>
                </div>

            </div>
        </div>
        

    </div>
    <div id="Popup">
        <div id="Barreclose">
            <div id="Pcat">
                <p> Nos rayons</p>
            </div>
            <div id="close">
                <button id="btnFermer"><img src="img/close.png" alt=""></button>
            </div>
        </div>
        <form action="PageProduits.php" method="POST">
            <div id="Categories">
                <button name="TS" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="img/Categorie/Selection.png" alt="">
                        <p>Toute la séléction</p>
                    </div>
                </button>
                <button name="PL" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="img/Categorie/Produits-laitiers.png" alt="">
                        <p>Produits laitiers, oeufs, fromages</p>
                    </div>
                </button>
                <button name="BVP" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="img/Categorie/Boucherie.png" alt="">
                        <p>Boucherie, volaille, poissonnerie</p>
                    </div>
                </button>
                <button name="CTP" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="img/Categorie/Charcuterie.png" alt="">
                        <p>Charcuterie, traiteur, pain</p>
                    </div>
                </button>
                <button name="FL" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="img/Categorie/Fruits-legumes.png" alt="">
                        <p>Fruits, légumes </p>
                    </div>
                </button>
                <button name="S" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="img/Categorie/Surgeles.png" alt="">
                        <p>Surgelés</p>
                    </div>
                </button>
                <button name="ES" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="img/Categorie/Epecerie.png" alt="">
                        <p>Epicerie sucrée</p>
                    </div>
                </button>
                <button name="ESL" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="img/Categorie/Epicerie-salee.png" alt="">
                        <p>Epicerie salée</p>
                    </div>
                </button>
                <button name="B" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="img/Categorie/Boissons.png" alt="">
                        <p>Boissons</p>
                    </div>
                </button>
                <button name="BB" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="img/Categorie/Bebe.png" alt="">
                        <p>BéBé</p>
                    </div>
                </button>
                <button name="HBP" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="img/Categorie/Hygiene.png" alt="">
                        <p>Hygiène, beauté, parapharmacie</p>
                    </div>
                </button>
                <button name="E" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="img/Categorie/Entretien.png" alt="">
                        <p>Entretien</p>
                    </div>
                </button>
                <button name="A" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="img/Categorie/Animalerie.png" alt="">
                        <p>Animalerie</p>
                    </div>
                </button>
                <button name="ML" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="img/Categorie/Loisirs.png" alt="">
                        <p>Aller sur le site Maison &amp; Loisirs</p>
                    </div>
                </button>
                
            </div>
        </form>
    </div>
