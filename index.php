<?php
?>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Obligatorisk oppgave</title>
</head>
<body>
    <main>
        <h1>Velkommen</h1>
        <p>Trykk på knappene for å navigere deg til riktig side</p>
        <nav>
            <div class="navbar">
                <button class="knapp" id="klasseKnapp">Klasse</button>
                <button class="knapp" id="studentKnapp">Studenter</button>
            </div>
            <div class="navKlasse usynlig">
                <a class="knapp" href="se-klasse.php">Se klasse</a>
                <a class="knapp" href="registrer-klasse.php">Registrer klasse</a>
                <a class="knapp" href="endre-klasse.php">Endre klasse</a>
                <a class="knapp" href="slett-klasse.php">Slett klasse</a>
            </div>
            <div class="navStudent usynlig">
                <a class="knapp" href="se-student.php">Se studenter</a>
                <a class="knapp" href="registrer-student.php">Registrer studenter</a>
                <a class="knapp" href="endre-student.php">Endre studenter</a>
                <a class="knapp" href="slett-student.php">Slett studenter</a>
            </div>
        </nav>
    </main>
    <script src="funksjoner.js"></script>
</body>