<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Max Lagendijk">
    <meta charset="UTF-8">
    <title>gar-update-klant3.php</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>Uw auto gegevens wijzigen</h1>
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
    klantgegevens wijzigen in de tabel
    klantvan de database garage
</p>
<?php
$klantid           = $_POST["klantidvak"]; // komt niet uit het formulier (autoincrement)
$autokenteken      = $_POST["autokentekenvak"];
$automerk          = $_POST["automerkvak"];
$autotype          = $_POST["autotypevak"];
$autokmstand       = $_POST["autokmstandvak"];

// updaten klantgegevens
require_once "gar-connect.php";
global $conn;
$sql = $conn->prepare("
update auto set 
autokenteken       = :autokenteken,
automerk           = :automerk,
autotype           = :autotype,
autokmstand        = :autokmstand
where klantid      = :klantid
");
$sql->execute
([
    "klantid"          => $klantid,
    "autokenteken"     => $autokenteken,
    "automerk"         => $automerk,
    "autotype"         => $autotype,
    "autokmstand"      => $autokmstand,
]);
echo "de auto is gewijzigd. <br />";
echo "<a href='gar-menu.php'>terug naar het menu</a>";
?>
</body>
</html>
