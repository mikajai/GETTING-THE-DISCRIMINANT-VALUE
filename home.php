<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETTING THE DISCRIMINANT VALUE</title>
    <link href="result.php">
</head>
<body>
    <h1>Discriminant of a Quadratic Equation</h1>
    <form method = "post">
        <label for = "a"> A: </label>
        <input type = "number" placeholder = "Value of A here" id = "a" name = "a" required><br><br>

        <label for = "b"> B: </label>
        <input type = "number" placeholder = "Value of B here" id = "b" name = "b" required><br><br>

        <label for = "c"> C: </label>
        <input type = "number" placeholder = "Value of C here" id = "c" name = "c" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

            $discriminantvalue = $b**2 - 4*$a*$c;

            header("Location: result.php?discriminant=$discriminantvalue");
            exit();
        }
    ?>
</body>
</html>