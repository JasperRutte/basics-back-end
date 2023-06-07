<?php
    $startProgram = true;
    $finishProgram = false;

    $one = $two = $three = $four = $five = $six = $seven = '';

    function validateData($data): string {
        $data = trim($data);
        $data = stripslashes($data);
        return htmlspecialchars($data);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['1']) OR !empty($_POST['2']) OR !empty($_POST['3']) OR !empty($_POST['4']) or !empty($_POST['5']) OR !empty($_POST['6'] OR !empty($_POST['7']))) {
            $one = validateData($_POST['1']);
            $two = validateData($_POST['2']);
            $three = validateData($_POST['3']);
            $four = validateData($_POST['4']);
            $five = validateData($_POST['5']);
            $six = validateData($_POST['6']);
            $seven = validateData($_POST['7']);

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
                <h2>Onkunde</h2>
                <?php if ($startProgram) { ?>
                <form method="post">
                    <label for="1">Wat zou je graag willen kunnen?</label>
                    <input type="text" name="1" size="45"><br><br>
                    <label for="2">Met welke persoon kan je goed opschieten?</label>
                    <input type="text" name="2" size="45"><br><br>
                    <label for="3">Wat is je favoriete getal?</label>
                    <input type="text" name="3" size="45"><br><br>
                    <label for="4">Wat heb je altijd bij als je op vakantie gaat?</label>
                    <input type="text" name="4" size="45"><br><br>
                    <label for="5">Wat is je beste persoonlijke eigenschap?</label>
                    <input type="text" name="5" size="45"><br><br>
                    <label for="6">Wat is je slechste persoonlijke eigenschap?</label>
                    <input type="text" name="6" size="45"><br><br>
                    <label for="7">Wat is het ergste wat je kan overkomen?</label>
                    <input type="text" name="7" size="45"><br>
                    <button type="submit">Versturen</button>
                </form>
                <?php } else if ($finishProgram) { ?>
                    <p>Niet veel mensen kunnen <?php echo $one?> Neem bijvoorbeeld <?php echo $two?>. Zelfs met <?php echo $three?> <?php echo $four?> lukt het niet. Hij heeft zeker geen gebrekn aan <?php echo $five?> maar is soms wel een beetje <?php echo $six?>. Teveel <?php echo $six?> lijdt tot <?php echo $seven?></p>
                <?php } ?>
            </main>
            <footer>
                <span>Deze website is gemaakt door Ivo & Jasper</span>
            </footer>
        </div>
    </div>
</body>
</html>