<?php
/**
 * Handlebars demo
 * 
 * @author Christian Studer <cstuder@existenz.ch>
 */

// Composer autoload
require_once('../vendor/autoload.php');

// Get data
$data = json_decode(file_get_contents('https://aareguru.existenz.ch/currentV2.php'));

// Get template
$template = file_get_contents('template.txt');

// Render with handlebars
$engine = new Handlebars\Handlebars;
$content = $engine->render($template, $data);

// Output HTML
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <title>Aare.guru - Handlebars Demo</title>
    </head>
    <body>
        <?php echo $content; ?>
    </body>
</html>
