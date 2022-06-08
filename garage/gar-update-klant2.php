<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Max Lagendijk">
    <meta charset="UTF-8">
    <title>gar-update-klant2.php</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>garage update klant 2</h1>
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
dit formulier wordt gebruikt om klantgegevens te wijzigen in de tabel klant van de database garage
</p>
<?php
// klantid uit het formuier halen
$klantid = $_POST["klantidvak"];

// klantgegevens uit de tabel halen
require_once "gar-connect.php";
global $conn;
$klanten = $conn->prepare("
select klantid, klantnaam, klantadres, klantpostcode, klantplaats 
from klant
where klantid = :klantid
");
$klanten->execute(["klantid" => $klantid]);

//klantgegevens in een nieuw formulier laten zien
echo" <form action='gar-update-klant3.php' method='post'>";
foreach ($klanten as $klant)
{
    // klantid mag niet gewijzigd worden
    echo "klantid:" . $klant["klantid"];
    echo "<input type='hidden' name='klantidvak'";
    echo "value='" . $klant["klantid"] . " '> <br />";

    echo "klantnaam: <input type='text' ";
    echo "name='klantnaamvak'";
    echo "value= '" . $klant["klantnaam"]. "' ";
    echo " > <br />";

    echo "klantadres: <input type='text'";
    echo "name='klantadresvak'";
    echo "value= '" . $klant["klantadres"]. "' ";
    echo " > <br />";

    echo "klantpostcode: <input type='text' ";
    echo "name='klantpostcodevak'";
    echo "value= '" . $klant["klantpostcode"]. "' ";
    echo " > <br />";

    echo "klantplaats: <input type='text' ";
    echo "name='klantplaatsvak'";
    echo "value= '" . $klant["klantplaats"]. "' ";
    echo " > <br />";
}
echo "<input type='submit'>";
echo "</form>";
// er moet eigenlijk nog gecontroleerd worden op een bestaan klantid
?>
</body>
</html>