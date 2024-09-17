<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $_SESSION['favoriete_kleur'] = $_POST['kleur'];
    

    header("Location: " . $_SERVER['PHP_SELF'] . "?kleur=" . urlencode($_POST['kleur']));
    exit();
}


$verwerkteKleur = isset($_GET['kleur']) ? htmlspecialchars($_GET['kleur']) : null;
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kleur Voorkeur</title>
</head>
<body style="background-color: <?php echo $verwerkteKleur ? htmlspecialchars($verwerkteKleur) : '#FFFFFF'; ?>;">

<h1>Welkom!</h1>

<?php if ($verwerkteKleur): ?>
    <p>Je favoriete kleur is: <strong><?php echo htmlspecialchars($verwerkteKleur); ?></strong></p>
    <p>De achtergrond van deze pagina is aangepast aan jouw favoriete kleur.</p>
<?php else: ?>
    <p>Er is nog geen kleurvoorkeur ingesteld.</p>
<?php endif; ?>

<h2>Kies je favoriete kleur</h2>


<form method="POST" action="">
    <label for="kleur">Favoriete kleur:</label>
    <input type="text" id="kleur" name="kleur" required>
    <br><br>
    <input type="submit" value="Sla voorkeur op">
</form>

<?php if ($verwerkteKleur): ?>
    <br>
    <a href="?kleur=">Reset kleurvoorkeur</a>
<?php endif; ?>

</body>
</html>