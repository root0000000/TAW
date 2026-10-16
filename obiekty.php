<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islandia</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <!-- <img title="abc" src="lialia.jpg" alt="lialia"> -->
    <header><a href="islandia.php">
            <h1>Zwiedzaj Islandię</h1>
        </a></header>
    <aside>
        <h3>Do zwiedzania</h3>
        <ul>
            <li>Wodospady:
                <?php
                $server = "localhost";
                $user = "root";
                $password = "";
                $database = "islandia";

                $connection = mysqli_connect($server, $user, $password, $database);

                $query = 'SELECT obiekty.nazwa FROM obiekty WHERE obiekty.panstwo = "Islandia" AND obiekty.idRodzaj = 10;';
                $result = mysqli_query($connection, $query);
                echo "<ol>";
                while ($tab = mysqli_fetch_array($result)) {
                    echo "<li>$tab[0]</li>";
                }
                echo "</ol>";
                ?>
            </li>
            <li>Siedliska zwierząt:
                <?php
                $query = 'SELECT obiekty.nazwa FROM obiekty WHERE obiekty.panstwo = "Islandia" AND obiekty.idRodzaj = 14;';
                $result = mysqli_query($connection, $query);
                echo "<ol>";
                while ($tab = mysqli_fetch_array($result)) {
                    echo "<li>$tab[0]</li>";
                }
                echo "</ol>";

                mysqli_close($connection);
                ?>
            </li>
        </ul>
    </aside>
    <main>
        <h2>Opis miejsca</h2>
        <section></section>
    </main>
    <footer>
        <hr>
        <p>Autor: 0000000000</p>
    </footer>
</body>

</html>