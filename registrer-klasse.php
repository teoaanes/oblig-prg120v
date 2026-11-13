<?php
?>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Registrer klasse</title>
</head>

<body>
    <h1>Registrer klasse</h1>
    <p>I skjemaet nedenfor kan du registrere en ny klasse</p>
    <form method="POST" action="" onSubmit="return bekreft()" name="registrerKlasse">
        <input type="text" id="registrerKlasseKode" name="registrerKlasseKode" required placeholder="Klassekode">
        <input type="text" id="registrerKlasseNavn" name="registrerKlasseNavn" required placeholder="Klassenavn">
        <input type="text" id="registrerStudiumKode" name="registrerStudiumKode" required placeholder="Sudiumkode">
        <br><br>
        <input type="submit" value="Registrer">
    </form>
    <script src="funksjoner.js>"></script>
</body>

<?php
function regKlasse(){
    $klassekode=$_POST["registrerKlasseKode"];
    $klassenavn=$_POST["registrerKlasseNavn"];
    $studiumkode=$_POST["registrerStudiumKode"];

    include("db-connect.php");
    $sqlSetning="INSERT INTO klasse (klassekode, klassenavn, studiumkode) VALUES ('$klassekode', '$klassenavn', '$studiumkode')";
    mysqli_query($db, $sqlSetning) or die("noe gikk galt!");
}

if (isset($_POST["registrerKlasse"])) {
    regKlasse();
}
?>