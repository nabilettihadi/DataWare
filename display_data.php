<?php
include 'connect_database.php';

// Fetch members
$memberSql = "SELECT * FROM Membre";
$memberResult = mysqli_query($conn, $memberSql);

// Fetch teams
$teamSql = "SELECT * FROM Equipe";
$teamResult = mysqli_query($conn, $teamSql);

echo "<div class='mb-8'>";
// Display member table
if (mysqli_num_rows($memberResult) > 0) {
    echo "<h2 class='text-2xl font-bold mb-4 text-center'>Tableau des Membres</h2>";
    echo "<div class='overflow-x-auto'>";
    echo "<table class='table-auto w-full'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th class='px-4 py-2 border'>ID Membre</th>";
    echo "<th class='px-4 py-2 border'>Nom</th>";
    echo "<th class='px-4 py-2 border'>Prénom</th>";
    echo "<th class='px-4 py-2 border'>Email</th>";
    echo "<th class='px-4 py-2 border'>Téléphone</th>";
    echo "<th class='px-4 py-2 border'>Rôle</th>";
    echo "<th class='px-4 py-2 border'>ID Équipe</th>";
    echo "<th class='px-4 py-2 border'>Statut</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($row = mysqli_fetch_assoc($memberResult)) {
        echo "<tr>";
        echo "<td class='px-4 py-2 border'>" . $row["IDMembre"] . "</td>";
        echo "<td class='px-4 py-2 border'>" . $row["Nom"] . "</td>";
        echo "<td class='px-4 py-2 border'>" . $row["Prenom"] . "</td>";
        echo "<td class='px-4 py-2 border'>" . $row["Email"] . "</td>";
        echo "<td class='px-4 py-2 border'>" . $row["Telephone"] . "</td>";
        echo "<td class='px-4 py-2 border'>" . $row["Role"] . "</td>";
        echo "<td class='px-4 py-2 border'>" . $row["IDEquipe"] . "</td>";
        echo "<td class='px-4 py-2 border'>" . $row["Statut"] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</div>";
} else {
    echo "<p class='text-center'>0 results for Members</p>";
}

echo "</div>";

echo "<div class='mb-8'>";
// Display team table
if (mysqli_num_rows($teamResult) > 0) {
    echo "<h2 class='text-2xl font-bold mb-4 text-center'>Tableau des Équipes</h2>";
    echo "<div class='overflow-x-auto'>";
    echo "<table class='table-auto w-full'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th class='px-4 py-2 border'>ID Équipe</th>";
    echo "<th class='px-4 py-2 border'>Nom Équipe</th>";
    echo "<th class='px-4 py-2 border'>Date de Création</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($row = mysqli_fetch_assoc($teamResult)) {
        echo "<tr>";
        echo "<td class='px-4 py-2 border'>" . $row["IDEquipe"] . "</td>";
        echo "<td class='px-4 py-2 border'>" . $row["NomEquipe"] . "</td>";
        echo "<td class='px-4 py-2 border'>" . $row["DateCreation"] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</div>";
} else {
    echo "<p class='text-center'>0 results for Teams</p>";
}

echo "</div>";

mysqli_close($conn);
?>

