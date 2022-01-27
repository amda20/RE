<?php
/*
require_once "DB.php";
*/
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Reuseit</title>
</head>
<body>
<form style="width: 300; margin: auto; border: solid 1px; padding: 0 1em; background-color: burlywood">
    <img src="images/K.jpg" onclick="window.open('https://www.kansasworkwear.com/da-dk')" title="www.kansasworkwear.com" class="logo" alt=""/></a>
<br><br>
    <form method="post" action="insert.php">
        <label>Brugernavn:</label><br><br><input type="Brugernavn" placeholder="Brugernavn" name="Brugernavn"><br><br>
        <label>Password:</label><br><br><input type="Password" placeholder="Password" name="Password"><br><br>
    <input type="checkbox"> Remember me<br> <br>
    <a href="Registrer.php">Registrer</a><br> <br>
    Forgot Password?<hr>
        <button type="submit" name="submit">Sign ind</button>
        <br><br>
    </form>
</form>
</body>

