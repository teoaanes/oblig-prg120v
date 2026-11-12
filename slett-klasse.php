<?php
?>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Slett klasse</title>
</head>

<body>
    <h1>Slett klasse</h1>
    <form method="post" action="" onSubmit="return bekreft()" id="velgKlasseListe" name="velgKlasseListe">
        <select name="klasse">
            <option value="">Velg klasse</option>
            <?php include("scripts.php"); klasseListeValg(); ?>
        </select>
        <input type="submit" value="Slett klasse" id="slettKlasseKnapp" name="slettKlasseKnapp">
    </form>
    <script src="funksjoner.js"></script>
</body>
