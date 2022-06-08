<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>gar-contact</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>Contact</h1>
<div class="navbar">
    <a href="gar-menu.php">index</a>
    <a href="contact.php">contact</a>
    <a href="gar-registratie.php">maak een account</a>
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
<main>
    <div class="container">
        <div style="text-align:center">
        </div>
        <div class="row">

            <div class="column">
                <form>
                    <label for="fname">Voornaam</label>
                    <input type="text" id="fname" name="firstname" placeholder="Voornaam"> <br>
                    <label for="lname">Achternaam</label>
                    <input type="text" id="lname" name="lastname" placeholder="Achternaam"> <br>
                    <label for="Email">Email</label>
                    <input type="text" id="Email" name="Email" placeholder="Email"> <br>
                    <label for="number">telefoon nummer</label>
                    <input type="number" id="number" name="phonenumber" placeholder="telefoon nummer"
                    <label for="subject"></label>
                    <label>
                        <textarea>Stel hier uw vraag en wij zullen zo snel mogelijk antwoorden.</textarea>
                    </label> <br>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </form>
            </div>
        </div>
    </div>
</main>
</body>
</html>
