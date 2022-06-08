<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Max Lagendijk">
    <meta charset="UTF-8">
    <title>gar-create-klant2.php</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
<h1> garage create klant 2 </h1>
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
<?php
// klantgegvens uit het formulier halen if (!empty($_POST))

$klantid        =NULL; // komt niet uit het formulier (autoincrement)
$klantnaam      = $_POST["klantnaamvak"];
$klantadres     = $_POST["klantadresvak"];
$klantpostcode  = $_POST["klantpostcodevak"];
$klantplaats    = $_POST["klantplaatsvak"];

// klantgegevens invoeren in de tabel
require_once "gar-connect.php";
global $conn;
$sql = $conn->prepare("
insert into klant values
(:klantid, :klantnaam, :klantadres, :klantpostcode, :klantplaats)
");
// manier 1 (of manier 2 gebruiken)
//$sql->bindParam(":klantid",       $klantid);
//$sql->bindParam(":klantnaam",     $klantnaam);
//$sql->bindParam(":klantadres",    $klantadres);
//$sql->bindParam(":klantpostcode", $klantpostcode);
//$sql->bindParam(":klantplaats",   $klantplaats);

//$sql-> execute(4);

// manier 2
$sql->execute([
    "klantid"       => $klantid,
    "klantnaam"     => $klantnaam,
    "klantadres"    => $klantadres,
    "klantpostcode" => $klantpostcode,
    "klantplaats"   => $klantplaats
]);
echo "Uw gegevens zijn toegevoegd in ons systeem.<br/>";
echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>
</body>
</html>

