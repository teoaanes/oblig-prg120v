<?php
$valgtStudent="";
$melding="";
$beskjed="";
function visStudent($valgtStudent){
    include("db-connect.php");
    $sqlSetning="SELECT * FROM student WHERE brukernavn = '$valgtStudent'";
    $sqlResultat=mysqli_query($db, $sqlSetning);
    $resultat=mysqli_fetch_array($sqlResultat);

        $melding= "Du har valgt følgende student:" . "<br>" . "Brukernavn: " . $resultat["brukernavn"] . "<br>" . "Navn: " . $resultat["fornavn"] . " " . $resultat["etternavn"] . "<br>" . "Klassekode: " . $resultat["klassekode"];
        return $melding;
}

if (isset($_POST["velgStudentKnapp"])) {
    $valgtStudent=$_POST["studentValgt"];
    $melding=visStudent($valgtStudent);
}

function slettStudent($valgtStudent){
    include("db-connect.php");
    $sqlSetning="DELETE FROM student WHERE brukernavn = '$valgtStudent'";
    $sqlResultat=mysqli_query($db, $sqlSetning);
    $beskjed= "Du har nå slettet bruker: " . $valgtStudent;
    return $beskjed;
    }

if (isset($_POST["slettStudentKnapp"]) && !empty($_POST["studentValgt"])){
    $valgtStudent=$_POST["studentValgt"];
    $beskjed=slettStudent($valgtStudent);
    }
else{
    echo "student ikke valgt";
}
?>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Slett student</title>
</head>

<body>
    <h1>Slett student</h1>
    <form method="POST" action="" id="velgStudent" name="velgStudent">
        <select name="studentValgt" required>
            <option value="" disabled selected>Velg Student</option>
            <?php include("scripts.php"); StudentListeValg(); ?>
        </select>
        <input class="knapp" type="submit" value="Velg student" id="velgStudentKnapp" name="velgStudentKnapp">
    </form>

    <form method="POST" action="" onSubmit="return bekreft()">
        <input type="hidden" name="studentValgt" value="<?php echo $valgtStudent; ?>">
        <p><?php echo $melding?></p>
        <p><?php echo $beskjed?></p>
        <input class="knapp" type="submit" value="Slett student" id="slettStudentKnapp" name="slettStudentKnapp">
    </form>
    <br><a class="knapp" href="index.php">Tilbake til start</a>
    <script src="funksjoner.js"></script>
</body>

