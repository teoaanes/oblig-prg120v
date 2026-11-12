<?php
?>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Registrer klasse</title>
</head>

<body>
    <h1>Registrer klasse</h1>
    <form method="post" action="" onSubmit="return bekreft()">
        <input type="text" id="registrerKlasseKode" name="registrerKlasseKode" required>
        <input type="text" id="registrerKlasseNavn" name="registrerKlasseNavn" required>
        <input type="text" id="registrerStudiumKode" name="registrerStudiumKode" required>
        <input type="submit" value="Registrer">
    </form>
</body>
