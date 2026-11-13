<?php
?>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Se studenter</title>
</head>

<body>
    <h1>På denne siden kan du se studentene som er registrert i systemet</h1>
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
</body>