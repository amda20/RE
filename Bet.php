<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link href="S.css" rel="stylesheet" type="text/css" />
</head>
   <body>
   <form style="width: 300; margin: auto; border: solid 1px; padding: 0 1em; background-color: burlywood">
       <img src="images/K.jpg" onclick="window.open('https://www.kansasworkwear.com/da-dk')" title="www.kansasworkwear.com" class="logo" alt=""/></a>
       <br><br>
           <label><input type="text" placeholder="Bruger navn"/><br>
           <label><input type="mobil" placeholder="Mobil nr"/></label><br>
           <label><input type="text" placeholder="CPR-Nr"/></label><br>
               <label><input type="text" placeholder="Beløb"/></label><br>
                       <input type="radio" name="gender" value="male" id="gender-male"/>
                       <label for="gender-male">Male</label>
                       <input type="radio" name="gender" value="female" id="gender-female"/>
                       <label for="gender-female">Female</label><br>
                   <input type="radio" name="payment-method" value="card" id="payment-method-card" checked="true"/>
                   <label for="payment-method-card"><span><i class="fa fa-cc-visa"></i>Credit Card</span></label>
                   <input type="radio" name="payment-method" value="paypal" id="payment-method-paypal"/>
                   <label for="payment-method-paypal"> <span><i class="fa fa-cc-paypal"></i>Mobile Pay</span></label><br><br>
                   <label><input type="text" placeholder="Card Number"/></label><br>
                       <label><input type="text" placeholder="Card CVC"/><br></label>
                        <input type="date"/><br>
               <br><input type="checkbox" id="terms"/>
                            <label for="terms">I accept terms and conditions </label>
               <br>
               <input type="submit" value="Betal">
               <br><br>
       </form>
   </body>
</html>
