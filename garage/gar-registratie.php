<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Max Lagendijk">
    <meta charset="UTF-8">
    <title>gar-create-auto1.php</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<form action="gar-menu.php">
    <div class="container">
        <h1>Registreer</h1>
        <p>Gebruik een e-mail en wachtwoord voor het aanmaken van uw account.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>

        <label for="psw"><b>wachtwoord</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <label for="psw-repeat"><b>Herhaal Wachtwoord</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
        <hr>

        <button type="submit" class="registerbtn">Registeer</button>
    </div>

    <div class="container signin">
        <p>Al een account?<a href="gar-inlogscherm.php">Log in </a>.</p>
    </div>
</form>

</body>
</html>