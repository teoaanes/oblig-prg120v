<?php
$valgtKlasse="";
$melding="";
$beskjed="";
function visKlasse($valgtKlasse){
    include("db-connect.php");
    $sqlSetning="SELECT * FROM klasse WHERE klassekode = '$valgtKlasse'";
    $sqlResultat=mysqli_query($db, $sqlSetning);
    $resultat=mysqli_fetch_array($sqlResultat);

        $melding= "Du har valgt følgende klasse:" . "<br>" . "Klassekode: " . $resultat["klassekode"] . "<br>" . "Klassenavn: " . $resultat["klassenavn"] . "<br>" . "Studiumskode: " . $resultat["studiumkode"];
        return $melding;
}

if (isset($_POST["velgKlasseKnapp"])) {
    $valgtKlasse=$_POST["klasseValgt"];
    $melding=visKlasse($valgtKlasse);
}

function slettKlasse($valgtKlasse){
   include("db-connect.php");
   $sqlSjekk="SELECT COUNT(*) FROM student WHERE klassekode = '$valgtKlasse'";
   $sqlSend=mysqli_query($db, $sqlSjekk);
   $studentAntall=mysqli_fetch_array($sqlSend);
    if($studentAntall[0]==0){
        $sqlSetning="DELETE FROM klasse WHERE klassekode = '$valgtKlasse'";
        $sqlResultat=mysqli_query($db, $sqlSetning);
        $beskjed= "Du har nå slettet klasse: " . $valgtKlasse;
        return $beskjed;
    }
    else{
        $beskjed = "Klassen kunne ikke bli slettet, da den fortsatt inneholder elever";
        return $beskjed;
    }
}

if (isset($_POST["slettKlasseKnapp"]) && !empty($_POST["klasseValgt"])){
    $valgtKlasse=$_POST["klasseValgt"];
    $beskjed=slettKlasse($valgtKlasse);
    }
?>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Slett klasse</title>
</head>

<body>
    <h1>Slett klasse</h1>
    <form method="post" action="" onSubmit="" id="velgKlasseListe" name="velgKlasseListe">
        <select name="klasseValgt" required>
            <option value="" disabled selected>Velg klasse</option>
            <?php include("scripts.php"); klasseListeValg(); ?>
        </select>
        <input type="submit" value="Velg klasse" id="velgKlasseKnapp" name="velgKlasseKnapp">
    </form>
        <form method="POST" action="" onSubmit="return bekreft()">
        <input type="hidden" name="klasseValgt" value="<?php echo $valgtKlasse; ?>">
        <p><?php echo $melding?></p>
        <p><?php echo $beskjed?></p>
        <input class="knapp" type="submit" value="Slett klasse" id="slettKlasseKnapp" name="slettKlasseKnapp">
    </form>
    <br>
    <a class="knapp" href="index.php">Tilbake til start</a>
    <script src="funksjoner.js"></script>
</body>
