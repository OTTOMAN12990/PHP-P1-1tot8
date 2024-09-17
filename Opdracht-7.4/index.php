<?php

$ipAdres = $_SERVER['REMOTE_ADDR'];


$serverPoort = $_SERVER['SERVER_PORT'];


$userAgent = $_SERVER['HTTP_USER_AGENT'];


?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gebruikersinformatie</title>
</head>
<body>

<h1>Informatie van de gebruiker</h1>

<p><strong>IP-adres van de gebruiker:</strong> <?php echo htmlspecialchars($ipAdres); ?></p>
<p><strong>Serverpoort:</strong> <?php echo htmlspecialchars($serverPoort); ?></p>
<p><strong>Besturingssysteem en browser (User Agent):</strong> <?php echo htmlspecialchars($userAgent); ?></p>

</body>
</html>