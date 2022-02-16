<p> How much Russian army technology does your paycheck buy?<br> Click on the capital and submit to go there, and you will convene with Putin on a <i>reasonable</i> conversion rate </p>
<form method="post">
<input type="radio" id="destination" name="destination" value="Moscow">
<label for="destination"> Moscow </label><br>
<!-- <input type="text" id="destination" name="destination"> -->
<input type="submit">
</form>
 <!-- in the label element, you indicate the 'for'; and this interact with the 'name' property for the input -->
<?php

/* var_dump($_POST);
echo $_POST['destination']; */


if (empty($_POST)) {
}
else if (isset($_POST)){
    $destination = $_POST['destination'];
    echo "You've arrived in " . $destination . "<br>";
    echo "What military technology are you interested in?";
    echo "<ol>
                <li>Tanks</li>
                <li>Little Green Men</li>
                <li>Good ol' Rockets</li>
                <li>Nuclear Naval Vessels</li>
            </ol>";
    }




//TODO: after POST -> create a list of military technology you can buy
//TODO: add numbers/checkboxes containing how many of them you want
//TODO: also show the price
//TODO: get a paycheck value
//TODO: convert paycheck to input of tanks/planes/guns