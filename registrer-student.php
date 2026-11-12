<?php
?>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Registrer student</title>
</head>

<body>
    <h1>Registrer student</h1>
    <p>I skjemaet nedenfor kan du registrere en ny student</p>
    <form method="post" action="" onSubmit="return bekreft()">
        <input type="text" id="registrerBrukernavn" name="registrerBrukernavn" required placeholder="Brukernavn">
        <input type="text" id="registrerFornavn" name="registrerFornavn" required placeholder="Fornavn">
        <input type="text" id="registrerEtternavn" name="registrerEtternavn" required placeholder="Etternavn">
        <select name="student">
            <option value="">Velg Klassekode</option>
            <?php include("scripts.php"); KlasseListeValg(); ?>
        </select>
        <br>
        <input type="submit" value="Registrer">
    </form>
</body>