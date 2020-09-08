<?php
include('header.php');
$id = $_GET['id_product'];
$sql = " DELETE FROM produit WHERE ID_PRD = $id";


if(query($sql)){
    redirect('admin.php');
}else{
    echo 'error';
}