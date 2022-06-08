<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Max Lagendijk">
    <meta charset="UTF-8">
    <title>gar-search-klant2.php</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1> Uw kenteken zoeken </h1>
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
    Uw auto gegevens.
</p>
<?php
// klantid uit het formulier halen
$autokenteken = $_POST["autokentekenvak"];

// klantgegevens uit de tabel halen
require_once "gar-connect.php";
global $conn;
$autos = $conn->prepare("
select  autokenteken,
        automerk,
        autotype,
        autokmstand,
        klantid
from    auto
where   autokenteken = :autokenteken
");
$autos->execute(["autokenteken" => $autokenteken]);

// autogegevens laten zien
echo "<table>";
foreach ($autos as $auto)
{
    echo "<tr>";
    echo "<td>" . $auto["autokenteken"]           . "</td>";
    echo "<td>" . $auto["automerk"]               . "</td>";
    echo "<td>" . $auto["autotype"]               . "</td>";
    echo "<td>" . $auto["autokmstand"]            . "</td>";
    echo "<td>" . $auto["klantid"]                . "</td>";
    echo "</tr>";
}
echo "</table><br />";
echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>
</body>
</html>
