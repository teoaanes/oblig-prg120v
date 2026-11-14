<?php
function regKlasse(){
    $klassekode=$_POST["registrerKlasseKode"];
    $klassenavn=$_POST["registrerKlasseNavn"];
    $studiumkode=$_POST["registrerStudiumKode"];

    include("db-connect.php");
    $sqlSetning="SELECT * FROM klasse WHERE klassekode = '$klassekode'";
    $sqlResultat=mysqli_query($db, $sqlSetning) or die("oops");
    if(mysqli_num_rows($sqlResultat)>0){
    return "klassen er allerede registrert!";
    }
    else{
    $sqlSetning="INSERT INTO klasse (klassekode, klassenavn, studiumkode) VALUES ('$klassekode', '$klassenavn', '$studiumkode')";
    $resultat=mysqli_query($db, $sqlSetning) or die("noe gikk galt!"); /* Jeg er klar over at variabelen $resultat er unødvendig */
    return "Klassen ble registrert!";
    }
    }

$melding="";

if (isset($_POST["registrerKlasse"])) {
    $melding=regKlasse();
}
?>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Registrer klasse</title>
</head>

<body>
    <h1>Registrer klasse</h1>
    <p>I skjemaet nedenfor kan du registrere en ny klasse</p>
    <form method="POST" action="" onSubmit="return bekreft()">
        <input type="text" id="registrerKlasseKode" name="registrerKlasseKode" required placeholder="Klassekode">
        <input type="text" id="registrerKlasseNavn" name="registrerKlasseNavn" required placeholder="Klassenavn">
        <input type="text" id="registrerStudiumKode" name="registrerStudiumKode" required placeholder="Sudiumkode">
        <br><br>
        <input class="knapp" type="submit" value="Registrer" name="registrerKlasse">
    </form>
    <?php echo $melding; ?>
    <br><a class="knapp" href="index.php">Tilbake til start</a>
    <script src="funksjoner.js"></script>
</body>
