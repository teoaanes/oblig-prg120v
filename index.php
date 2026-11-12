<?php
?>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Obligatorisk oppgave</title>
</head>
<body>
    <main>
        <h1>Klasseoversikt</h1>
        <p>På denne siden kan du se, registrere, endre eller slette klasser, og studendter</p>
        <nav>
            <div class="navbar">
                <button>Klasse</button>
                <button>Studenter</button>
            </div>
            <div class="navbarKlasse usynlig">
                <button>Se</button>
                <button>Registrer</button>
                <button>Endre</button>
                <button>Slett</button>
            </div>
            <div class="navbarStudent usynlig">
                <button>Se</button>
                <button>Registrer</button>
                <button>Endre</button>
                <button>Slett</button>
            </div>
        </nav>
        <div class="klasseBokser">
            <div class="klasseBoks" id="seKlasse" name="seKlasse">

            </div>
            <div class="klasseBoks" id="registrerKlasse" name="registrerKlasse">

            </div>
            <div class="klasseBoks" id="endreKlasse" name="endreKlasse">

            </div>
            <div class="klasseBoks" id="slettKlasse" name="slettKlasse">

            </div>
        </div>
        <div class="studentBokser">
            <div class="studentBoks" id="seStudent" name="seStudent">

            </div>
            <div class="studentBoks" id="registrerStudent">

            </div>
            <div class="studentBoks" id="endreStudent">

            </div>
            <div class="studentBoks" id="slettStudent">

            </div>
        </div>

    </main>
</body>