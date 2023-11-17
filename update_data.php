<?php
include 'connect_database.php';

$idMembre = $_POST['id'];
$newEmail = $_POST['email'];

$updateSql = "UPDATE Membre SET Email='$newEmail' WHERE IDMembre=$idMembre";
if (mysqli_query($conn, $updateSql)) {
    echo "Membre mis à jour avec succès";
} else {
    echo "Erreur lors de la mise à jour du membre: " . mysqli_error($conn);
}

mysqli_close($conn);
?>