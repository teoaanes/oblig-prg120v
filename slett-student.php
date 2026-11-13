<?php
function visStudent(){
    include("db-connect.php");
    $valgtStudent=$_POST["studentValgt"];
    $sqlSetning="SELECT * FROM student WHERE brukernavn = '$valgtStudent'";
    $sqlResultat=mysqli_query($db, $sqlSetning);
    $resultat=mysqli_fetch_array($sqlResultat);
    
        echo $resultat["brukernavn"];
        echo $resultat["fornavn"];
        echo $resultat["etternavn"];
        echo $resultat["klassekode"];
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
        <input type="submit" value="Velg student" id="velgStudentKnapp" name="velgStudentKnapp">
    </form>
    <form method="POST" action="" onSubmit="return bekreft()">
        <p>Du har valgt følgende student:</p><br>
        <p></p>
        <input type="submit" value="Slett student" id="slettStudentKnapp" name="slettStudentKnapp">
    </form>
    <script src="funksjoner.js"></script>
</body>

