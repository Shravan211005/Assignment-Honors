<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <title>Assessment-1</title>
    <link rel="stylesheet" href="/pico.min.css" />
</head>

<body>
    <form method="post" action="Test.php">
        <label for="name">
        <h1>Name:</h1>
        </label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="food">Favoutite Food:</label>
        <input type="radio" id="pavbhaji" name="food" value="Pav Bhaji" required>
        <label for="pavbhaji">Pav Bhaji</label>
        <input type="radio" id="gulabjamun" name="food" value="Gulab Jamun" required>
        <label for="gulabjamun">Gulab Jamun</label>
        <input type="radio" id="puranpoli" name="food" value="Puran Poli" required>
        <label for="puranpoli">Puran Poli</label>
        <input type="radio" id="panipuri" name="food" value="Pani Puri" required>
        <label for="panipuri">Pani Puri</label><br><br>
        <input type="submit" name="submit" value="Submit" required>
    </form>
    <h1>
        <?php
        echo "<h1>$greet $name. Your favorite food is $food.</h1>";
        ?>
    </h1>
</body>