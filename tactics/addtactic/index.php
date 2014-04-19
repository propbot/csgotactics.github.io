<?php 
if(isset($_POST['submit'])){
    $to = "acrospore@gmail.com"; // this is your Email address
    $from = "acrospore@gmail.com"; // this is the sender's Email address
    $steam = $_POST['steam'];
    $map = $_POST['map'];
    $type = $_POST['type'];
    $tactic = $_POST['tactic'];
    $subject = "Form submission";
    $message = $steam . " wrote a tactic for " . $map . " with the type of " . $type . " and a tactic of " . "\n\n" . $tactic;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<head>
    <title>CS:GO Tactics</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>

<body>
    <div id="headerwrap" align="center">
    <div id="header">
        <div id="logo">CS:GO TACTICS</div>
        <div id="navbar">
            <ul>
                <li class="navitem"><a href="../../index.html">HOME</a></li>
                <li class="navitem"><a href="../index.html">TACTICS</a>
                <li class="navitem"><a >ADD TACTIC</a>
                <li class="navitem"><a href="../../about/index.html">ABOUT</a></li>
            </ul>
        </div>
    </div>
    </div>
    
    <div id="main" align='center'>
        <div>
            <h1>ADD TACTIC</h1>
            <form action="" method="post">
                Steam ID/Steam Profile:<br>
                <input type="text" name="steam"><br><br>
                Map:<br>
                <input type="text" name="map"><br><br>
                Type:<br>
                <select name="type">
                    <option value="eco">ECO/SAVING (low money)</option>
                    <option value="antieco">ANTI-ECO (win 1st round)</option>
                    <option value="buy">BUY (enough money to buy rifles)</option>
                    <option value="pistol">PISTOL ROUND (first round)</option>
                </select><br><br>
                Tactic:<br><textarea rows="5" cols="30" name="tactic"></textarea><br><br>
                <br><input type="submit" value="Submit Tactic" name="submit"><input type="reset" value="Reset">
                
            </form>
        </div>
    </div>
</body>
</html>