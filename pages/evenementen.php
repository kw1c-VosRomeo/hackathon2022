<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/stylesheetEV.css">
    <title>
        Evenementen
    </title>
</head>
<body>

<ul>
    <li><a href="../index.php">Home</a></li>
    <li><a class="active" href="../pages/evenementen.php">evenementen</a></li>
    <li><a href="../pages/games.php">games</a></li>
    <li><a href="../pages/teams.php">teams</a></li>
    <li style="float:right"><a href="../login/login.php">login</a></li>
</ul>

<?php
/* Starten database connectie */
include "../includes/functionsDB.php";
startConnection();

/* query aanmaken */
$query = "SELECT * FROM evenementen;";
$result = executeQuery($query);


echo "<table>";
echo "<tr>";
echo "<th>Naam</th>";
echo "<th>Datum</th>";
echo "<th>Tijd</th>";
echo "<th>Plaats</th>";
echo "</tr>";

while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    echo "<tr>";
    echo "<td>". $row["naam"] . "</td>";
    echo "<td>". $row["datum"] . "</td>";
    echo "<td>". $row["tijd"] . "</td>";
    echo "<td>". $row["plaats"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>






