<?php
require 'config.php';
$id_client = $_SESSION["id_client"];

if (isset($_POST['done'])) {
    $dateDebut = $_POST['date_debut'];
    $dateFin = $_POST['date_fin'];
    $device = $_POST['device'];
    if($device === "PC"){
        $nombre_de_joueur = '1';
    }else{
        $nombre_de_joueur = $_POST['nombre_de_joueur'];
    }

    $sql_post = "SELECT *
    FROM post
    WHERE device = '$device'
      AND id_post NOT IN (
        SELECT id_post
        FROM reservation
        WHERE date_debut > '$dateDebut'
          AND date_fin < '$dateFin'
      )
    ";
    $query_post = mysqli_query($conn,$sql_post);
    if(mysqli_num_rows($query_post)>0){
        $row = mysqli_fetch_assoc($query_post);
        $post = $row["id_post"];
        $sql_reservation = "INSERT INTO reservation( `date_debut`, `date_fin`, `etat`, `nombre_de_joueur`, `id_post`, `id_client`)VALUES('$dateDebut','$dateFin','en attente','$nombre_de_joueur','$post','$id_client')";
        $query_reservation = mysqli_query($conn,$sql_reservation);
        if($query_reservation){
            header("location:index.php?reservation=true");
        }
    }else{
        header("location:index.php?reservation=false");
    }
} 
?>