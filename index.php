<!-- PHP logic goes on top -->

<!-- var_dump allows for strings -->
<!-- $GET will always exist, it will be an empty array that can filled later -->

<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);



if (empty($_GET)){
}
if (!empty($_GET)){
    @$paycheck = $_GET['paycheck'];
    @$tanks = $_GET['tanks'];
    @$choppers = $_GET['choppers'];
    @$soldiers = $_GET['soldiers'];
    $amountOfTanks = $paycheck/(4250000*0.88);
    $amountOfChoppers = $paycheck/(6000000*0.88);
    $amountOfSoldiers = $paycheck/(150000*0.88);
    var_dump($_GET);
    calculateMilitary($paycheck, $tanks, $choppers, $soldiers);
}
?>



<p id="welcomeMessage"> How much Russian army technology do you want?<br> You are a Russian general; как вас? Click on the capital and submit to go to Putin's office, there you will convene with <u>him</u> on a <i>reasonable</i> conversion rate </p>
<form id="firstForm" method="post">
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
    ?>
    <p #welcomeMessage style="color:green;">
    <!-- echo "<script type="text/Javascript">
    const welcome = document.getElementById("welcomeMessage");
    welcome.style.display="none";
    </script>"; -->
    <?php 
    echo "You've arrived in " . $destination . "<br>";
    echo "Check the military technology that you are interested in.";
    };
    ?>

<form id="payCheck" method = "get">
    <input type="number" id="paycheck" name="paycheck"> <br>First, fill in how much you want to spend (in EUR)<br>
<br> Then, consider what items you would like. <br> <br> Choose items by ticking the appropriate checkbox. After you press Submit, it will convert your sum into either tanks, choppers, soldiers or all of them together. <br> <br>
<form id="tanks" name="tanks" method="get">
<input type="checkbox" name="tanks" value="1"> 
T90-AM @ $4.25 Million per piece.
<form id="choppers" method="get">
<input type="checkbox" name="choppers" value="1">
Soviet Attack Helicopter @ $6 Million per piece.
<form id="soldiers" method="get">
<input type="checkbox" name="soldiers" value="1">
Little Green Men @ $150k per soldier per year.
<input type="submit">
</form>

<?php if (isset($paycheck, $choppers, $tanks, $soldiers)) { ?>
<p>You can buy <?php $amountOfTanks ?> tanks with that money <br>
            or, you could buy <?php $amountOfChoppers ?> choppers with that amount <br>
            or, if you like infantry: <?php $amountOfSoldiers ?>  is the amount of soldiers you will get for this money <br>
            Путин is happy with your strategic advice, and he will consider the budget... <br>
            Xорошо, you evade Gulag. . . For Now . . </p>
<?php } ?>
<?php



   /*1. write function that takes paycheck and divides it by the price of the military item
    3. convert value by dividing the paycheck into #tanks, choppers, soldiers, ... */

    function calculateMilitary ($paycheck, $tanks, $choppers, $soldiers) {
        if (($tanks === "1") && ($choppers === "1") && ($soldiers === "1")) {

        }
        else if (($tanks === "1") && ($choppers === "1")){
            echo "You can buy " . $amountOfTanks . " tanks with that money <br>
            or, you could buy " . $amountOfChoppers . " choppers with that amount <br>
            You're severely lacking in infantry though.<br>
            Путин glares at you, and shouts something <br>
            You get struck on the side of the neck and pass out <br>
            You wake up in Gulag.";
        }
        else if (($tanks === "1") && ($soldiers === 1)) {
            echo "You can buy " .$amountOfSoldiers . " soldiers with that money";
        }
        else if (($tanks === "1")){
            echo "You can buy " . $amountOfTanks . " tanks with that money. <br>
            But, your army is lacking in air and mobile ground forces... <br>
            Путин wishes you good luck facing the NAVO with that!! HAH. <br>
            Gulag it is for you.";
        }
        else if (($soldiers === "1") && ($choppers === "1")){
            echo "You can buy " . $amountOfChoppers . " choppers with that money <br>
            or, you could buy " . $amountOfSoldiers . " soldiers with that money <br>
            You're severely lacking in heavy ground forces though.<br>
            Straight to Gulag";
    }
        else if (($soldiers === "1") && ($tanks === "1")){
            echo "You can buy " . $amountOfTanks . " tanks with that money <br>
            or, you could buy " . $amountOfSoldiers . " soldiers with that money <br>
            You're severely lacking in air power, 
            the French assault fighters will ravage your troops <br>
            Putin decides to kill you. But you end up in Siberia instead. <br>
            Good luck over there!";
    }
    else if (($soldiers === "1")){
        echo "You can buy " . $amountOfSoldiers . " infantry units with that money. <br>
        But, your army is lacking in air and heavy ground forces... <br>
        NAVO will decimate you. Putin is not happy <br>
        Something about gulags...";
    }
    else if (($choppers === "1")) {
        echo "You can buy " . $amountOfChoppers . " choppers with that money <br>
        But your army is lacking ground forces.
        Like you have none.
        Putin looks at you weirdly. 
        как что?";
    }

    }