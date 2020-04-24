
<html>
    <head>
        <title>Mi Obsertorio</title>
    </head>

    <body>
        <h1>Bienvenido a mi Observatorio!</h1>
        <ul>
            <?php
            $json = file_get_contents('http://observatorio-service/');
            $obj = json_decode($json);
            $galaxies = $obj->Galaxias;
            foreach ($galaxies as $galaxy) {
                echo "<li>$galaxy</li>";
            }
            ?>
        </ul>
    </body>
</html>
