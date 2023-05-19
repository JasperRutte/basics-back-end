<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>good-morning</title>
    <link rel="stylesheet" href="style.css">
    <?php
    date_default_timezone_set("Europe/Amsterdam");
    $time = date("H:i");
    $hour = intval(date("H"));
//    $hour = intval(2);
    $time_of_day = "";
    $file = "images/";
    if ($hour < 6){
        $time_of_day = "nacht";
        $background = $file . "night.png";
    } elseif ($hour < 12) {
        $time_of_day = "morgen";
        $background = $file . "morning.png";
    } elseif ($hour < 18) {
        $time_of_day = "middag";
        $background = $file . "afternoon.png";
    } else {
        $time_of_day = "avond";
        $background = $file .  "evening.png";
    }
    ?>
</head>
<body style="background-image: url(<?php echo $background;?>);"

<div class="time">
    <h1>Goede <?php echo $time_of_day;?></h1>
    <h2>Het is nu <?php echo $time; ?></h2>
</div>



</body>
</html>