<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Max Lagendijk">
    <meta charset="UTF-8">
    <title>gar-create-auto1.php</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>Vul hier uw autogegevens in</h1>
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
<p> In dit formulier staat alles wat u in moet voeren over uw auto. </p>
<form action="gar-create-auto2.php" method="post">
    autokenteken: <label>
        <input type="text" name="autokentekenvak">
    </label>
    automerk: <label>
        <input type="text" name="automerkvak">
    </label>
    autotype: <label>
        <input type="text" name="autotypevak">
    </label>
    autokmstand: <label>
        <input type="text" name="autokmstandvak">
    </label>
    klantid: <label>
        <input type="text" name="klantidvak">
    </label>
    <input type="submit">
</form>
</body>
</html>