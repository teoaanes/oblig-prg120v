<?php
$valgtKlasse="";
$melding="";
$beskjed="";
function visKlasse($valgtKlasse){
    include("db-connect.php");
    $sqlSetning="SELECT * FROM klasse WHERE klassekode = '$valgtKlasse'";
    $sqlResultat=mysqli_query($db, $sqlSetning);
    $resultat=mysqli_fetch_array($sqlResultat);

        $melding= "Du har valgt følgende klasse:" . "<br>" . "Klassekode: " . $resultat["klassekode"] . "<br>" . "Klassenavn: " . $resultat["klassenavn"] . "<br>" . "Studiumskode: " . $resultat["studiumskode"];
        return $melding;
}

if (isset($_POST["velgKlasseKnapp"])) {
    $valgtKlasse=$_POST["klasseValgt"];
    $melding=visKlasse($valgtKlasse);
}
/*
function slettStudent($valgtStudent){
    include("db-connect.php");
    $sqlSetning="DELETE FROM student WHERE brukernavn = '$valgtStudent'";
    $sqlResultat=mysqli_query($db, $sqlSetning);
    $beskjed= "Du har nå slettet bruker: " . $valgtStudent;
    return $beskjed;
    }

if (isset($_POST["slettStudentKnapp"])){
    $valgtStudent=$_POST["studentValgt"];
    $beskjed=slettStudent($valgtStudent);
    }*/
?>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Slett klasse</title>
</head>

<body>
    <h1>Slett klasse</h1>
    <form method="post" action="" onSubmit="return bekreft()" id="velgKlasseListe" name="velgKlasseListe">
        <select name="klasseValgt" required>
            <option value="" disabled selected>Velg klasse</option>
            <?php include("scripts.php"); klasseListeValg(); ?>
        </select>
        <input type="submit" value="Slett klasse" id="velgKlasseKnapp" name="velgKlasseKnapp">
    </form>
    <p><?php echo $melding;?></p>
    <script src="funksjoner.js"></script>
</body>
