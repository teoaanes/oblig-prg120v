<?php
?>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Se studenter</title>
</head>

<body>
    <h1>Se studenter</h1>
    <p>På denne siden kan du se studentene som er registrert i systemet</p>
    <table>
        <thead>
            <th scope="col">Brukernavn</th>
            <th scope="col">Fornavn</th>
            <th scope="col">Etternavn</th>
            <th scope="col">Klassekode</th>
        </thead>
        <tbody>
            <?php include("scripts.php"); seStudent(); ?>
        </tbody>
    </table>
    <br><a class="knapp" href="index.php">Tilbake til start</a>
</body>