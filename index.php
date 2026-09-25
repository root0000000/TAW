<?php
session_start();
if (isset($_SESSION["name"]) && $_SESSION["name"] == "admin") {
    header("Location: panel.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $admin = "admin";
    $haslo = "tajne123";
    if (isset($_POST["name"]) && isset($_POST["password"])) {
        if ($_POST["name"] == $admin && $_POST["password"] == $haslo) {
            $_SESSION["name"] = "admin";
            exit();
        }
        else {
            echo"Błędny login lub hasło";
        }
    }
    ?>
    <form method="post">
        <input name="name" type="text" id="name">
        <label for="name">login</label>
        <input name="password" type="password" id="pass">
        <label for="password">hasło</label>
        <button style="width: 50px; height: 50px;"></button>
    </form>
</body>

</html>