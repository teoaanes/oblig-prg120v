<?php

function klasseListeValg(){
    include("db-connect.php");

    $sqlSetning="SELECT * FROM klasse ORDER BY klassekode;";
    $sqlResultat=mysqli_query($db, $sqlSetning) or die("servertilkobling feilet");

    $antallResultat=mysqli_num_rows($sqlResultat);

    for ($teller=1; $teller<= $antallResultat; $teller++){
        $resultat=mysqli_fetch_array($sqlResultat);
        $klassekode=$resultat["klassekode"];
        $klassenavn=$resultat["klassenavn"];
        
        echo("<option value='$klassekode'> $klassenavn</option>");
        }
}

function studentListeValg(){}

?>