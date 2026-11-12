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
                <button id="klasseKnapp">Klasse</button>
                <button id="studentKnapp">Studenter</button>
            </div>
            <div class="navKlasse usynlig">
                <a class="knapp" href="se-klasse.php">Se klasse</a>
                <a class="knapp" href="">Registrer klasse</a>
                <a class="knapp" href="">Endre klasse</a>
                <a class="knapp" href="">Slett klasse</a>
            </div>
            <div class="navStudent usynlig">
                <a class="knapp" href="">Se studenter</a>
                <a class="knapp" href="">Registrer studenter</a>
                <a class="knapp" href="">Endre studenter</a>
                <a class="knapp" href="">Slett studenter</a>
            </div>
        </nav>
    </main>
    <script src="funksjoner.js"></script>
</body>