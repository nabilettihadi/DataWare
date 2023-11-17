<?php
include 'connect_database.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$role = $_POST['role'];
$idEquipe = $_POST['equipe'];
$statut = $_POST['statut'];

$insertSql = "INSERT INTO Membre (Nom, Prenom, Email, Telephone, Role, IDEquipe, Statut) VALUES ('$nom', '$prenom', '$email', '$telephone', '$role', $idEquipe, '$statut')";
if (mysqli_query($conn, $insertSql)) {
    echo "Nouveau membre ajouté avec succès";
} else {
    echo "Erreur lors de l'ajout du nouveau membre: " . mysqli_error($conn);
}

mysqli_close($conn);
?>