<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Max Lagendijk">
    <meta charset="UTF-8">
    <title>gar-read-klant.php</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1> Overzicht van de klanten</h1>
<div class="navbar">
    <a href="gar-menu.php">index</a>
    <a href="contact.php">contact</a>
    <div class="dropdown">
        <button class="dropbtn">klant
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="gar-create-klant1.php">create            </a>
            <a href="gar-read-klant.php">   read              </a>
            <a href="gar-search-klant1.php">zoeken op klantID </a>
            <a href="gar-update-klant1.php">    update        </a>
            <a href="gar-delete-klant1.php">    delete        </a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">auto
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="gar-create-auto1.php">create             </a>
            <a href="gar-read-auto.php">   read               </a>
            <a href="gar-search-auto1.php">zoeken op kenteken </a>
            <a href="gar-update-auto1.php">    update         </a>
            <a href="gar-delete-auto1.php">    delete         </a>
        </div>
    </div>
</div>
<p>
    Dit zijn alle klant gegevens van ons systeem.
</p>
<?php
//tabel uitlezen en netjes afdrukken
require_once "gar-connect.php";
global $conn;
$klanten = $conn->prepare("
select  klantid,
        klantnaam,
        klantadres,
        klantpostcode,
        klantplaats
from    klant order by klantid asc 
");
$klanten->execute();
echo "<table>";
echo "<th> Klantgegevens";
    foreach($klanten as $klant)
{
    echo "<tr>";
    echo "<td>" . $klant["klantid"]           . "</td>";
    echo "<td>" . $klant["klantnaam"]         . "</td>";
    echo "<td>" . $klant["klantadres"]        . "</td>";
    echo "<td>" . $klant["klantpostcode"]     . "</td>";
    echo "<td>" . $klant["klantplaats"]       . "</td>";
    echo "</tr>";
}
echo "</table>";
    echo "<a href='gar-menu.php'> terug naar het menu </a>";
    ?>
</body>
</html>

