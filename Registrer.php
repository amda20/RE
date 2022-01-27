<?php ?>
<!DOCTYPE html>
<html lang="">
<head>
    <title>Registrer</title>
    <meta charset="utf-8">
    <link href="S.css" rel="stylesheet" type="text/css" />
</head>
<body>
   <form style="width: 300; margin: auto; border: solid 1px; padding: 0 1em; background-color: burlywood">
       <img src="images/K.jpg" onclick="window.open('https://www.kansasworkwear.com/da-dk')" title="www.kansasworkwear.com" class="logo" alt=""/></a>
       <br><br>
       <form>
           <label><input type="text" placeholder="Bruger navn"/><br>
           <label><input type="mobil" placeholder="Mobil nr"/></label><br>
           <label><input type="password" placeholder="Password"/></label><br>
               <label><input type="text" placeholder="E-mail"/><br></label>
           <label><input type="text" placeholder="Adresse"/></label><br><br>
                       <input type="radio" name="gender" value="male" id="gender-male"/>
                       <label for="gender-male">Male</label>
                       <input type="radio" name="gender" value="female" id="gender-female"/>
                       <label for="gender-female">Female</label><br>
               <br>
              <input type="submit" value="Registrer"/>
               <br><br>
       </form>
   </body>
</html>
