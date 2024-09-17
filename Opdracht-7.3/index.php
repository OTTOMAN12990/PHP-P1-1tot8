<?php
session_start();


if (isset($_POST['taal'])) {
    $_SESSION['voorkeurstaal'] = $_POST['taal'];
    $taalBericht = "De taalvoorkeur is ingesteld op: " . htmlspecialchars($_POST['taal']);
}


if (isset($_GET['actie']) && $_GET['actie'] == 'verwijder') {
    unset($_SESSION['voorkeurstaal']);
    $taalBericht = "De voorkeurstaal is succesvol verwijderd.";
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taalvoorkeur Instellen</title>
</head>
<body>

<h1>Kies je voorkeurstaal</h1>


<form method="POST" action="">
    <label for="taal">Voorkeurstaal:</label>
    <select name="taal" id="taal">
        <option value="Nederlands" <?php if (isset($_SESSION['voorkeurstaal']) && $_SESSION['voorkeurstaal'] == 'Nederlands') echo 'selected'; ?>>Nederlands</option>
        <option value="Engels" <?php if (isset($_SESSION['voorkeurstaal']) && $_SESSION['voorkeurstaal'] == 'Engels') echo 'selected'; ?>>Engels</option>
    </select>
    <br><br>
    <input type="submit" value="Sla voorkeur op">
</form>

<?php

if (isset($taalBericht)) {
    echo "<p><strong>$taalBericht</strong></p>";
} elseif (isset($_SESSION['voorkeurstaal'])) {
    echo "<p>Je huidige voorkeurstaal is: " . htmlspecialchars($_SESSION['voorkeurstaal']) . "</p>";
} else {
    echo "<p>Er is nog geen voorkeurstaal ingesteld.</p>";
}
?>


<a href="?actie=verwijder">Verwijder taalvoorkeur</a>

</body>
</html>