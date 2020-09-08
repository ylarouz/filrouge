<?php
session_start();
// session_destroy();
// $_SESSION['produit'.$id];
print_r($_SESSION);
$servername = "localhost";
$username = "root";
$password = "";


try {
  $conn = new PDO("mysql:host=$servername;dbname=shop1", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>
 <?php foreach($_SESSION as $key => $value):?>
    <?php $id_cli = $_SESSION['id']?> 
            <?php if(substr($key,0,7) == "Product"):
                // print_r($value)
                  
                ?>
              <?php 

                $id=  $value['id'];
                $qte= $value['Quantity'];
                //  echo $value['title']
                $stmt = $conn->prepare("INSERT INTO commande (ID, total,produit) VALUES (?, ?, ?)"); 
                $stmt->execute(array(1,$value['Total'],$value['NOM']));  
                $stmt = $conn->prepare("UPDATE produit SET QTE=QTE-$qte WHERE ID_PRD = $id");
                $stmt->execute();
?>
            <?php endif;?>
          
<?php endforeach;
// redirect('index.php');
// function redirect(){
//   header('location:index.php');
// }

  header('Location: user.php');
  exit();

?>