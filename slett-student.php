<?php
?>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Slett student</title>
</head>

<body>
    <h1>Slett student</h1>
    <form method="post" action="" onSubmit="return bekreft()" id="velgStudentListe" name="velgStudentListe">Velg student</form>
        <select name="student">
            <option value="">Velg Student</option>
            <?php include("scripts.php"); StudentListeValg(); ?>
        </select>
        <input type="submit" value="Slett student" id="slettStudentKnapp" name="slettStudentKnapp" />
    </form>
    <script src="funksjoner.js"></script>
</body>

