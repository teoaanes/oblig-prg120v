<?php
?>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Registrer klasse</title>
</head>

<body>
    <h1>Registrer klasse</h1>
    <p>I skjemaet nedenfor kan du registrere en ny klasse</p>
    <form method="post" action="" onSubmit="return bekreft()">
        <input type="text" id="registrerKlasseKode" name="registrerKlasseKode" required placeholder="Klassekode">
        <input type="text" id="registrerKlasseNavn" name="registrerKlasseNavn" required placeholder="Klassenavn">
        <input type="text" id="registrerStudiumKode" name="registrerStudiumKode" required placeholder="Sudiumkode">
        <br>
        <input type="submit" value="Registrer">
    </form>
</body>
