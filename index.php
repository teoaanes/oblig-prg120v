<?php
?>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Obligatorisk oppgave</title>
</head>
<body>
    <script src="funksjoner.js"></script>
    <main>
        <h1>Velkommen</h1>
        <p>Trykk på knappene for å navigere deg til riktig side</p>
        <nav>
            <div class="navbar">
                <button id="klasseKnapp">Klasse</button>
                <button id="studentKnapp">Studenter</button>
            </div>
            <div class="navKlasse usynlig">
                <button>Se klasse</button>
                <button>Registrer klasse</button>
                <button>Endre klasse</button>
                <button>Slett klasse</button>
            </div>
            <div class="navStudent usynlig">
                <button>Se studenter</button>
                <button>Registrer studenter</button>
                <button>Endre studenter</button>
                <button>Slett studenter</button>
            </div>
        </nav>
    </main>
</body>