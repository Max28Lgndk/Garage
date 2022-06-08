<?php
session_start();
echo isset($_SESSION['login']);
if(isset($_SESSION['login'])) {
    header('LOCATION:gar-menu.php'); die();
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv='content-type' content='text/html;charset=utf-8' />
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="text-center">Login</h1>
    <?php
    if(isset($_POST['submit'])){
        $email = $_POST['e-mail']; $password = $_POST['password'];
        if($email === 'admin' && $password === 'password'){
            $_SESSION['login'] = true; header('LOCATION:gar-menu.php'); die();
        } {
            echo "<div class='alert alert-danger'>E-mail en wachtwoord komen niet overeen.</div>";
        }
    }
    ?>
    <form action="gar-menu.php" method="post">
        <div class="form-group">
            <label for="e-mail">e-mail:</label>
            <input type="email" class="form-control" id="e-mail" name="e-mail" required>
        </div>
        <div class="form-group">
            <label for="pwd">wachtwoord:</label>
            <input type="password" class="form-control" id="pwd" name="password" required>
        </div>
        <button type="submit" name="submit" class="btn btn-default">Login</button>
    </form>
</div>
</body>
</html>