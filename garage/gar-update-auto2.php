<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Max Lagendijk">
    <meta charset="UTF-8">
    <title>gar-update-auto2.php</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>Uw auto gegevens wijzigen  </h1>
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
    dit formulier wordt gebruikt om autogegevens te wijzigen in de tabel auto van de database garage
</p>
<?php
// autokenteken uit het formuier halen
$autokenteken = $_POST["autokentekenvak"];

// autogegevens uit de tabel halen
require_once "gar-connect.php";
global $conn;
$autos = $conn->prepare("
select autokenteken, automerk, autotype, autokmstand, klantid 
from auto
where autokenteken = :autokenteken
");
$autos->execute(["autokenteken" => $autokenteken]);

//autogegevens in een nieuw formulier laten zien
echo" <form action='gar-update-auto3.php' method='post'>";
foreach ($autos as $auto)
{
    // autokenteken mag niet gewijzigd worden
    echo "autokenteken:" . $auto["autokenteken"];
    echo "<input type='hidden' name='autokentekenvak'";
    echo "value='" . $auto["autokenteken"] . " '> <br />";

    echo "automerk: <input type='text' ";
    echo "name='automerkvak'";
    echo "value= '" . $auto["automerk"]. "' ";
    echo " > <br />";

    echo "autotype: <input type='text'";
    echo "name='autotypevak'";
    echo "value= '" . $auto["autotype"]. "' ";
    echo " > <br />";

    echo "autokmstand: <input type='text' ";
    echo "name='autokmstandvak'";
    echo "value= '" . $auto["autokmstand"]. "' ";
    echo " > <br />";

    echo "klantid: <input type='text' ";
    echo "name='klantidvak'";
    echo "value= '" . $auto["klantid"]. "' ";
    echo " > <br />";
}
echo "<input type='submit'>";
echo "</form>";
// er moet eigenlijk nog gecontroleerd worden op een bestaand kenteken
?>
</body>
</html>
