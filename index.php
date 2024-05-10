<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <h1>PHP App</h1>
        <?php
          passthru('node ./astro-project/render.mjs');
        ?>
    </body>
</html>