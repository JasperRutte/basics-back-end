
<?php
$nameErr = $talentErr = $favPersonErr = $favNumErr = $vacationErr = $bestAttributeErr = $worseAttributeErr = $worseHappenErr = "";
$name = $talent = $favPerson = $favNum = $vacation = $bestAttribute = $worseAttribute = $worseHappen = "";
function test_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}
function requirements($formInfo){
    if (empty($_POST[$formInfo])) {
        $formInfo = "Is required!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <label><input type="text" name="name" value="<?php echo $name?>"></label>
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>

    Talent: <label><input type="text" name="talent" value="<?php echo $talent?>"></label>
    <span class="error">* <?php echo $talentErr;?></span>
    <br><br>

    favPerson: <label><input type="text" name="favPerson" value="<?php echo $favPerson?>"></label>
    <span class="error">* <?php echo $favPersonErr;?></span>
    <br><br>

    favNum: <label><input type="text" name="favNum" value="<?php echo $favNum?>"></label>
    <span class="error">* <?php echo $favNumErr;?></span>
    <br><br>

    vacation: <label><input type="text" name="vacation" value="<?php echo $vacation?>"></label>
    <span class="error">* <?php echo $vacationErr;?></span>
    <br><br>

    bestAttribute: <label><input type="text" name="bestAttribute" value="<?php echo $bestAttribute?>"></label>
    <span class="error">* <?php echo $bestAttributeErr;?></span>
    <br><br>

    worseAttribute: <label><input type="text" name="worseAttribute" value="<?php echo $worseAttribute?>"></label>
    <span class="error">* <?php echo $worseAttributeErr;?></span>
    <br><br>

    worseHappen: <label><input type="text" name="worseHappen" value="<?php echo $worseHappen?>"></label>
    <span class="error">* <?php echo $worseHappenErr;?></span>
    <br><br>

    <input type="submit" name="submit" value="Submit">




</form>

</body>
</html>

<!--if ($_SERVER["REQUEST_METHOD"] == "POST") {-->
<!--if (empty($_POST["name"])) {-->
<!--$nameErr = "Name is required";-->
<!--} else {-->
<!--$name = test_input($_POST["name"]);-->
<!--if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {-->
<!--$nameErr = "Only letters and white space allowed";-->
<!--}-->
<!--}-->
<!--}-->