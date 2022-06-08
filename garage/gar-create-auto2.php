<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Max Lagendijk">
    <meta charset="UTF-8">
    <title>gar-create-auto2.php</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1> garage create auto 2 </h1>
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
// autogegvens uit het formulier halen if (!empty($_POST))
$autokenteken      = $_POST["autokentekenvak"];
$automerk          = $_POST["automerkvak"];
$autotype          = $_POST["autotypevak"];
$autokmstand       = $_POST["autokmstandvak"];
$klantid           = $_POST["klantidvak"];

// klantgegevens invoeren in de tabel
require_once "gar-connect.php";
global $conn;
$sql = $conn->prepare("
insert into auto values
(:automerk, :autotype, :autokmstand, :autokenteken, :klantid)
");
$sql->execute([
    "autokenteken"     => $autokenteken,
    "automerk"         => $automerk,
    "autotype"         => $autotype,
    "autokmstand"      => $autokmstand,
    "klantid"          => $klantid
]);
echo "Uw auto is toegevoegd in ons systeem, bedankt.<br/>";
echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>
</body>
</html>

