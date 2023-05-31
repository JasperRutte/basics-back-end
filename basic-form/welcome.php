<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>

<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = test_input($_POST["name"]);
$email = test_input($_POST["email"]);
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <label><input type="text" name="name"></label>
    <br><br>
    E-mail: <label><input type="text" name="email"></label>
    <input type="submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name, "<br>";
echo $email;
?>

</body>
</html>