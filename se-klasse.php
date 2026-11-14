<?php
?>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Se klasse</title>
</head>

<body>
    <h1>Se klasser</h1>
    <p>På denne siden kan du se klassene som er registrert i systemet</p>
    <table>
        <thead>
            <th scope="col">Klassekode</th>
            <th scope="col">Klassenavn</th>
            <th scope="col">Studiumskode</th>
        </thead>
        <tbody>
            <?php include("scripts.php"); seKlasse(); ?>
        </tbody>
    </table>
    <br><a class="knapp" href="index.php">Tilbake til start</a>
</body>