
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="/style/style.css" />
        <meta charset="utf-8" />
        <title>Celsius to Fahrenheit Conversion Result</title>
    </head>
    <body>
    <dir>
    <?php
        if (isset($_POST["celcius"]) == TRUE) {
            $c = $_POST["celcius"];
            $f = ($c *  9/5) + 32;
            echo "$c degrees Celcius is $f degrees Fahrenheit.";
        }
        else {
            echo "You must enter a valid value for the temperature in Celcius.";
        }
    ?>
    </dir>
    </body>
</html>
