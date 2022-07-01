# PHP
I'm going to share a few screenshots I've taken while learning "<b>PHP</b>"<br>
I'm using VSCode for coding and WinSCP to update a local directory with my VPS server<br>
by the way, the web server I'm using is Apache and it's running on Linux Ubuntu<br>
<br>
# Basic PHP code and the rendered page<br>
The first thing you'll learn when working with PHP is that unlike HTML, CSS, and JavaScript, which<br>
are handled by your web browser, PHP scripts make use of the PHP interpreter, so, first you must install php<br>
and only after that, you'll be able to use php, the interpreter process the code and return the results to the <br>
web server, in our case Apache, and Apache will pass it to the web browser<br>
<img src="/img/1.PHP-variable-print-text.png" alt="PHP Basics"><br>
## Copy the code<br>
Even though our page uses HTML the file must be saved with <b>.php</b> extension<br>
otherwise the PHP interpreter won't be able to process the PHP script embedded into HTML<br>
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>

<body>
    <?php
        echo "<h2>Hello world!</h2>";
        $name = "Albert Einstein";
        echo "<h1>My name is: $name</h1>";
        echo "<h2>It's a pleasure to meet you</h2>";
    ?>
</body>
</html>
```
# Emmet<br>
Emmet is an add-on available for many text editors (VScode, Atom, Sublime, etc.) that allow us to save time<br>
by using both built-in and also custom abbreviations that expands to full usefull lines of codes<br>
On VScode Emmet is already included, you'll see a suggestion everytime an abbreviation is found<br>
The following animation shows Emmet in action, it happens to be that "html:5" is one of Emmet's abbreviations<br>
that expands (select, and press TAB) to a basic HTML page that contains header, body and a few other useful lines of code<br>
<br>
<img src="/img/html5.gif" alt="Emmet in action"><br>
