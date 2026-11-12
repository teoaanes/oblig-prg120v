<?php
?>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Registrer klasse</title>
</head>

<body>
    <h1>Slett klasse</h1>
    <form method="post" action="" onSubmit="return bekreft()" id="velgKlasseListe" name="velgKlasseListe">Klasse</form>
        <select name="klasse">
            <option value="">Velg klasse</option>
            <?php include("scripts.php"); klasseListeValg(); ?>
        </select>
        <input type="submit" value="Endre klasse"
    <script src="funksjoner.js"></script>
</body>

<?php
    if (isset($_POST) [ve]
?>