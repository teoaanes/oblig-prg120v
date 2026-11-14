<?php
function regStudent(){
    $brukernavn=$_POST["registrerBrukernavn"];
    $fornavn=$_POST["registrerFornavn"];
    $etternavn=$_POST["registrerEtternavn"];
    $klassekode=$_POST["velgKlasseKode"];

    include("db-connect.php");
    $sqlSetning="SELECT * FROM student WHERE LOWER(brukernavn) = LOWER('$brukernavn')";
    $sqlResultat=mysqli_query($db, $sqlSetning) or die("oops");
    if(mysqli_num_rows($sqlResultat)>0){
    return "Studenten er allerede registrert!";
    }
    else{
    $sqlSetning="INSERT INTO student (brukernavn, fornavn, etternavn, klassekode) VALUES ('$brukernavn', '$fornavn', '$etternavn', '$klassekode')";
    $resultat=mysqli_query($db, $sqlSetning) or die("noe gikk galt!"); /* Jeg er klar over at variabelen $resultat er unødvendig */
    return "Studenten ble registrert!";
    }
    }

$melding="";

if (isset($_POST["registrerStudent"])) {
    $melding=regStudent();
}
?>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Registrer student</title>
</head>

<body>
    <h1>Registrer student</h1>
    <p>I skjemaet nedenfor kan du registrere en ny student</p>
    <form method="POST" action="" onSubmit="return bekreft()">
        <input type="text" id="registrerBrukernavn" name="registrerBrukernavn" required placeholder="Brukernavn">
        <input type="text" id="registrerFornavn" name="registrerFornavn" required placeholder="Fornavn">
        <input type="text" id="registrerEtternavn" name="registrerEtternavn" required placeholder="Etternavn">
        <select name="velgKlasseKode" required>
            <option value="" disabled selected>Velg Klasse</option>
            <?php include("scripts.php"); klasseListeValg(); ?>
        </select>
        <br><br>
        <input class="knapp" type="submit" value="Registrer" name="registrerStudent">
    </form>
    <?php echo $melding; ?>
    <br><a class="knapp" href="index.php">Tilbake til start</a>
    <script src="funksjoner.js"></script>
</body