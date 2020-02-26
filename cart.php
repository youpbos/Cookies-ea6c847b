<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bit Academy</title>
</head>

<body>
    <h1>Skateboard <small>(#1)</small></h1>
    <h1>Basketbal <small>(#2)</small></h1>
    <h1>Skeelers <small>(#3)</small></h1>
    <!-- maak hier de opdracht -->

    <form action="cart.php" method="_GET">
        <input type="number" name="number" id="">
        <button type="submit">submit</button>
    </form>
    <?php
    if ($_GET["number"] <= 3) {
        setcookie("cookie", $_GET["number"]);
        echo "Gekozen item : (#" . $_COOKIE["cookie"] . ")"; 
    }
    ?>
</body>

</html>