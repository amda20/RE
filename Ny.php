<?php ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Produkt oprettelse</title>
    <link href="S.css" rel="stylesheet" type="text/css" />
</head>
<body>
<br>
<form method="post" style="width: 300; margin: auto; border: solid 1px; padding: 0 1em; background-color: burlywood">
    <img src="images/K.jpg" onclick="window.open('https://www.kansasworkwear.com/da-dk')" title="www.kansasworkwear.com" class="logo" alt=""/></a>
    <br><br>
    <label>Produkt navn:</label><input type="" placeholder="Skriv Navn"/><br>
    <label>Størrelse:</label><select><option>S</option><option>M</option><option>L</option></select></label><br>
             <label> Farve:</label><input type="text" placeholder="text"/><br>
    <label>Opstart Bid: </label><input type="datetime-local"/><br>
    <label>Afslutt Bid: </label><input type="datetime-local"/><br><br>
    <label>Opstart Pris:</label><input type="" placeholder="Beløb"/><br><br>
<form>
    <label>Produkt Kategori:</label>
    <select name="kategori">
        <option value="" selected>Valg</option>
        <option value="" >Jakke</option>
        <option value="" >Bukse</option>
        <option value="" >Diverse</option>
    </select>
    <br><br>
    <label>Produkt beskrivelse:</label><br>
<textarea <input type="" placeholder="Skriv text" maxlength="200"></textarea>
<br><br>
    <label for="file">Valg billedet</label>
    <input type="file" name="file"/><br><br>
    <input type="submit" value="Upload"/>
           <input type="Submit" value="Luk Auktion">
<br><br><br>
</form>
</body>
</html>
