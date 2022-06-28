<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/stylesheetteams.css">
    <title>
        Teams
    </title>
</head>
<body>

<ul>
    <li><a href="../index.php">Home</a></li>
    <li><a href="../pages/evenementen.php">evenementen</a></li>
    <li><a href="../pages/games.php">games</a></li>
    <li><a href="../pages/teams.php">teams</a></li>
</ul>

<?php
/* Starten database connectie */
include "../includes/functionsDB.php";
startConnection();

/* query aanmaken */
$query = "SELECT * FROM teams;";
$result = executeQuery($query);


echo "<table>";
echo "<tr>";
echo "<th>teamnaam</th>";
echo "<th>speler 1</th>";
echo "<th>speler 2</th>";
echo "<th>speler 3</th>";
echo "<th>speler 4</th>";
echo "<th>speler 5</th>";
echo "<th>speler 6</th>";
echo "</tr>";

while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    echo "<tr>";
    echo "<td>". $row["teamnaam"] . "</td>";
    echo "<td>". $row["spelernaam1"] . "</td>";
    echo "<td>". $row["spelernaam2"] . "</td>";
    echo "<td>". $row["Spelernaam3"] . "</td>";
    echo "<td>". $row["spelernaam4"] . "</td>";
    echo "<td>". $row["spelernaam5"] . "</td>";
    echo "<td>". $row["spelernaam6"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
