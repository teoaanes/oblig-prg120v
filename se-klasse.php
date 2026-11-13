<?php
?>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Se klasse</title>
</head>

<body>
    <h1>På denne siden kan du se klassene som er registrert i systemet</h1>
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
</body>