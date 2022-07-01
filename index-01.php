<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
</head>
<body>
    <!-- HTML Comment -->
    <h1>Hello World!</h1>
    <?php
    //PHP Comment in one single line
    echo 'She is running away';
    echo '<br/>';
    echo 'Second Line';
    /*
    comment in
    several lines
    */
    ?>

    <?php
    echo '<br/>';
    //declare variable
    $name = 'Johnny Deep';
    $country = 'Canada';
    $city = 'Quebec';
    //vscode duplicate line __Shift + Alt + Up/Down arrow__
    $age = 42;
    //print variable
    echo $name;
    ?>

    <?php
    echo '<br/>';
    /*concatenation when using echo with single quotes
    Full Stop (period_period)
    */
    echo '<h1>My name is: '.$name.' </h1>';
    echo '<h1>My Age is: '.$age.' </h1>';
    //concatenation when using echo with double quotes
    echo "<h1>My city is: $city </h1>";    
    echo "<h1>My country is: $country </h1>";
    ?>


</body>
</html>