<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Max Lagendijk">
    <meta charset="UTF-8">
    <title>gar-delete-klant3.php</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>Auto verwijderen</h1>
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
    //moving information from form
    $autokenteken   = $_POST["autokentekenvak"];
    $verwijderen    = $_POST["verwijdervak"];
    // client information deleting
    if($verwijderen) {
                require_once "gar-connect.php";
                $sql = $conn->prepare("
                                                                DELETE FROM auto
                                                                Where   autokenteken = :autokenteken
                                ");
                $sql->execute(["autokenteken" => $autokenteken]);
                echo "Uw auto is verwijderd. <br />";
            }
            else
            {
                echo "Uw auto is niet verwijderd. <br />";
            }
    echo "<a href='gar-menu.php'>Terug naar het menu. </a>";
    ?>
</body>
</html>




