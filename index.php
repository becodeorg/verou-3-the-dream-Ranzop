<p> How much Russian army technology does your paycheck buy?<br> Click on the capital and submit to go there, and you will convene with Putin on a <i>reasonable</i> conversion rate </p>
<form action="/military-list.php" method="post">
<input type="radio" id="destination" name="destination" value="Moscow">
<label for="destination"> Moscow </label><br>
<!-- <input type="text" id="destination" name="destination"> -->
<input type="submit">
</form>
 <!-- in the label element, you indicate the 'for'; and this interact with the 'name' property for the input -->
<?php

var_dump($_POST);
echo $_POST['destination'];
$destination = $_POST['destination'];
echo $destination;




//TODO: after POST -> create a list of military technology you can buy
//TODO: add numbers/checkboxes containing how many of them you want
//TODO: also show the price
//TODO: get a paycheck value
//TODO: convert paycheck to input of tanks/planes/guns