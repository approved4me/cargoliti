<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            font: 1em sans-serif;
            padding: 20px;
            margin: 0;
        }

        fieldset {
            max-width: 600px;
            margin: 0;
            background-color: #f1f1f1;
        }

        label {
            display: block;
            padding: 10px;
            text-decoration: underline;
            line-height: 1.6;
        }

        legend {
            background-color: #fff;
            border: 1px solid #000;
            padding: 2px 10px;
            font-size: 0.7em;
        }

        input[type=text],
        input[type=email],
        input[type=password],
        input[type=number],
        textarea,
        fieldset {
            width: 100%;
            border: 1px solid #333;
            margin: 0;
            padding: 6px 10px;
            box-sizing: border-box;
        }

        input[type=checkbox],
        input[type=radio] {
            transform: scale(1.5);
            height: 25px;
vertical-align: middle;
        }

        input:invalid {
            border: none;
            box-shadow: 0 0 5px 1px #4CAF50;
        }

        input:first-child {
            margin-top: 5px;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-transform: uppercase;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>Datenbank</legend>
        <form action="" method="POST">
            <input type="text" name="name" cols="35" placeholder="First name" required>
            <br />
            <br />
            <input type="password" name="" cols="35" placeholder="Passwort">
            <br />
            <br />
            <textarea name="" id="" cols="35" rows="10" placeholder="Message"></textarea>
            <br />
            <label for="n1">How old are you?</label>
            <input type="radio" name="gender" value="male" id="n1" checked> Male
            <br>
            <input type="radio" name="gender" value="female" id="n1"> Female
            <br>
            <input type="radio" name="gender" value="other" id="n1"> Other
            <br />
            <input type="checkbox" name="vehicle[]" value="Bike"> I have a bike
            <br>
            <input type="checkbox" name="vehicle[]" value="Car" checked> I have a car
            <br>
            <br />
            <input type="submit" value="submit"> </form>
    </fieldset>
    <?php

$name = $_POST["name"];
$gender = $_POST["gender"];
$vehicle =$_POST["vehicle"];

echo "<h3> Hello" . $name . "<br>" . $gender . "</h3>";

foreach($_POST['vehicle'] as $selected){
echo $selected."</br>";
}

?>

</body>

</html>
