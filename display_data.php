<?php
include 'connect_database.php';

$sql = "SELECT * FROM Membre";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID Membre</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Téléphone</th><th>Rôle</th><th>ID Équipe</th><th>Statut</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["IDMembre"] . "</td>";
        echo "<td>" . $row["Nom"] . "</td>";
        echo "<td>" . $row["Prenom"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["Telephone"] . "</td>";
        echo "<td>" . $row["Role"] . "</td>";
        echo "<td>" . $row["IDEquipe"] . "</td>";
        echo "<td>" . $row["Statut"] . "</td>";
        echo "</tr>";
        // Vous pouvez ajouter d'autres colonnes ici...
    }

    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>