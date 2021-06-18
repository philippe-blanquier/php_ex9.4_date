<?php
    declare(strict_types = 1);
    /*  Afficher le timestamp du jour.  
        Afficher le timestamp du mardi 2 août 2016 à 15h00.

        --> https://www.php.net/manual/en/function.date.php
            or
            https://www.php.net/manual/en/function.setlocale.php
            https://www.php.net/manual/en/function.strftime.php
    */
    //setlocale( LC_TIME, 'fr-FR');
    $dummyDate= new DateTime('08/02/2016 15:00');
    var_dump($dummyDate);
    $timeStamp= date_timestamp_get($dummyDate);
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 9.4 Date</title>
    </head>
    <body >
        <p>timestamp du mardi 2 août 2016 à 15h00: <?= $timeStamp ?></p>
    </body>
</html>