<?php
    $startProgram = true;
    $finishProgram = false;

    $one = $two = $three = $four = $five = $six = $seven = $eight = '';

    function validateData($data): string {
        $data = trim($data);
        $data = stripslashes($data);
        return htmlspecialchars($data);
    }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['1']) OR !empty($_POST['2']) OR !empty($_POST['3']) OR !empty($_POST['4']) or !empty($_POST['5']) OR !empty($_POST['6'] OR !empty($_POST['7']) OR !empty($_POST['8']))) {
        $one = validateData($_POST['1']);
        $two = validateData($_POST['2']);
        $three = validateData($_POST['3']);
        $four = validateData($_POST['4']);
        $five = validateData($_POST['5']);
        $six = validateData($_POST['6']);
        $seven = validateData($_POST['7']);
        $eight = validateData($_POST['8']);

        $startProgram = false;
        $finishProgram = true;
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BE2O7 - eindopdracht - Mad libs</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="main">
    <div class="container">
        <h1>Mad Libs</h1>
        <div class="inner">
            <header>
                <span><a href="./paniek.php">Er heerst paniek...</a> <a href="./onkunde.php">Onkunde</a></span>
            </header>
            <main>
                <h2>Er heerst paniek...</h2>
                <?php if ($startProgram) { ?>
                <form method="post">
                    <label for="1">Welk dier zou je nooit als huisdier willen hebben?</label>
                    <input type="text" name="1" size="45"><br><br>
                    <label for="2">Wie is de belangrijkste persoon in je leven?</label>
                    <input type="text" name="2" size="45"><br><br>
                    <label for="3">In welk land zou je graag willen wonen?</label>
                    <input type="text" name="3" size="45"><br><br>
                    <label for="4">Wat doe je als je je verveelt?</label>
                    <input type="text" name="4" size="45"><br><br>
                    <label for="5">Met welk speelgoed speelde je als kind het meest?</label>
                    <input type="text" name="5" size="45"><br><br>
                    <label for="6">Bij welke docent spijbel je het liefst?</label>
                    <input type="text" name="6" size="45"><br><br>
                    <label for="7">Als je €100.000 hebt, wat zou je dan kopen?</label>
                    <input type="text" name="7" size="45"><br><br>
                    <label for="8">Wat is je favoriete bezigheid?</label>
                    <input type="text" name="8" size="45"><br>
                    <button type="submit">Versturen</button>
                </form>
                <?php } else if ($finishProgram) { ?>
                    <p>Er heerst paniek in het koningkrijk <?php echo $three?>. Koning <?php echo $six?> is ten einde raad en als koning <?php echo $six?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $two?>.</p>
                    <p>"<?php echo $two?>! Het is een ramp! Het is een schande!"</p>
                    <p>"Sire, Majesteit, Uwe Luidrichtigheid, wat is er aan de hand?"</p>
                    <p>"Mijn <?php echo $one?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $five?> voor hem gekocht!"</p>
                    <p>"Majesteit, uw <?php echo $one?> komt vast vanzelf weer terug?"</p>
                    <p>Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $eight?> leren?"</p>
                    <p>"Maar sire, daar kunt u toch uw <?php echo $seven?> voor gebruiken."</p>
                    <p>"<?php echo $two?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
                    <p><?php echo $four?></p>
                <?php } ?>
            </main>
            <footer>
                <span>Deze website is gemaakt door Ivo & Jasper</span>
            </footer>
        </div>
    </div>
</body>
</html>