<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Max Lagendijk">
    <meta charset="UTF-8">
    <title>gar-update-klant2.php</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1> Auto verwijderen </h1>
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
    Uw kenteken wordt verwijderd uit ons systeem.
</p>

<?php
$autokenteken = $_POST["autokentekenvak"];
// autogegevens uit de tabel halen
require_once "gar-connect.php";
global $conn;
$auto= $conn->prepare("
                                        select  automerk,
                                                autotype,
                                                autokmstand,
                                                autokenteken,
                                                klantid
                                        from    auto
                                       where   autokenteken = :autokenteken
");
$auto->execute(["autokenteken" => $autokenteken]);
// autogegevens laten zien
echo "<table>";
foreach ($auto as $auto2)

{
                    echo "<tr>";
                        echo "<td>" . $auto2["autotype"]             . "</td>";
                        echo "<td>" . $auto2["automerk"]             . "</td>";
                        echo "<td>" . $auto2["autokmstand"]          . "</td>";
                        echo "<td>" . $auto2["autokenteken"]         . "</td>";
                        echo "<td>" . $auto2["klantid"]              . "</td>";
                    echo "</tr>";
}
echo "</table></<br>";
echo "<form action='gar-delete-auto3.php' method='post'>";
//klantid mag niet meer gewijzigd worden
echo "<input type='hidden' name='autokentekenvak' value= $autokenteken>";
// waarde 0 doorgeven als er niet gecheckt word
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "Verwijder deze auto? <br />";
echo "<input type='submit'>";
echo "</form>";
?>
</body>
</html>

