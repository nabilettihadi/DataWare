<?php
include 'connect_database.php';

$idMembre = $_POST['id'];

$deleteSql = "DELETE FROM Membre WHERE IDMembre=$idMembre";
if (mysqli_query($conn, $deleteSql)) {
    echo "Membre supprimé avec succès";
} else {
    echo "Erreur lors de la suppression du membre: " . mysqli_error($conn);
}

mysqli_close($conn);
?>