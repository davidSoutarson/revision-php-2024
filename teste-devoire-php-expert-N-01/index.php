<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/masteur.css">
    <title>Revision php 2024</title>
</head>


<ul>
    <li> <a href="/./revision-php-2024">Retour au cour</a> </li>
    <li> <a href="consigne.php">consigne</a> </li>
    <li> <a href="afichage.php">AFICHAGE</a></li>
    <li> <a href="index.php">devoire</a> </li>
</ul>

<article>
    <h2>Definire les Outiele php et Algoritme php du devoire en fontion des consignes</h2>

    <p> 1 Générer le nombre d'éléve par écoles de maniere aleatoire : $nombre_eleve </p>

    <?php

    echo "<p> EX monbre aleatoir  genéré avec php: </p>";
    echo rand(), "<br>";
    echo rand(0, 500), "<br>";
    echo rand(5, 15), "<br>";
    ?>

    <h2>monbre d' eleve par clase </h2>

    <?php
    # 1 aficher un tableau des clase
    #chap 10 11 12 13 "14" "15" 16 17



    $nombre_eleve = 600;
    $sport_proposer = ['boxe', 'judo', 'fooball', 'natation', 'cyclisme',];
    $sport_pratiquer_par_ecole = 4;

    $eleve_non_spotife = 250;
    $eleve_sprotif = 350;

    $pratique_un_sport = 100;
    $pratique_deux_sport = 200;
    $pratique_trois_sport = 50;




    $ecole_A  = [
        'nom' => 'Ecole A',
        'nombre eleve' => $nombre_eleve,
        'sport proposer' => $sport_proposer,
        'sport pratiquer par ecole' => $sport_pratiquer_par_ecole,

        'eleve non spotife' => $eleve_non_spotife,
        'eleve sprotif' => $eleve_sprotif,

        'pratique un sport' => $pratique_un_sport,
        'pratique deux sport' => $pratique_deux_sport,
        'pratique trois sport' => $pratique_trois_sport,
    ];

    $ecole_B  = [
        'nom' => 'Ecole B',
        'nombre eleve' => $nombre_eleve,
        'sport proposer' => $sport_proposer,
        'sport pratiquer par ecole' => $sport_pratiquer_par_ecole,

        'eleve non spotife' => $eleve_non_spotife,
        'eleve sprotif' => $eleve_sprotif,

        'pratique un sport' => $pratique_un_sport,
        'pratique deux sport' => $pratique_deux_sport,
        'pratique trois sport' => $pratique_trois_sport,
    ];

    $ecole_C  = [
        'nom' => 'Ecole C',
        'nombre eleve' => $nombre_eleve,
        'sport proposer' => $sport_proposer,
        'sport pratiquer par ecole' => $sport_pratiquer_par_ecole,

        'eleve non spotife' => $eleve_non_spotife,
        'eleve sprotif' => $eleve_sprotif,

        'pratique un sport' => $pratique_un_sport,
        'pratique deux sport' => $pratique_deux_sport,
        'pratique trois sport' => $pratique_trois_sport,
    ];


    $table_des_ecole = [
        'ecole A' => $ecole_A,
        'ecole B' => $ecole_B,
        'ecole C' => $ecole_C,
    ];

    $table_x_ecole = [
        $ecole_A,
        $ecole_B,
        $ecole_C,
    ];







    /*  echo "<pre>";
    var_dump($table_des_ecole);
    echo "</pre>"; */

    ?>

    <table>

        <?php
        $n = "";
        foreach ($table_des_ecole as $nom_des_ecole => $proprieter) {
            echo  "<thead>";
            echo "<th> proprieter </th>";
            echo "<th> : " . $nom_des_ecole . ' : </th> ';
            echo "</thead>";

            foreach ($proprieter as $nom_proprieter => $value) {

                $n++;

                echo "  <td>  " . $n . " " . $nom_proprieter . "</ td>";


                if (($n == 3) || ($n == 12) || ($n == 21)) {


                    echo "<td>";
                    foreach ($value as $tous_sport) {

                        echo  $tous_sport . "</br>";
                    };
                    echo "</td>";
                    echo "</tr>";
                } else {
                    echo "<td>  " . $value . "</ td> ";
                    echo "</tr>";
                }
            }
        }


        ?>
    </table>

    <p> teste afichage </p>

    <?php
    $x = "";



    for ($i = 0; $i < 3; $i++) {

        echo "<p>----------------------------</p>";

        foreach ($table_x_ecole[$i] as $a_protrietes => $a_valeur) {
            $x++;
            echo  "<p>" . $a_protrietes . $x . " : ";

            if (($x == 3) || ($x == 12) || ($x == 21)) {

                foreach ($a_valeur as $a_tous_sport) {
                    echo  $a_tous_sport . " , ";
                }
                echo "</p>";
            } else {
                echo $a_valeur . "</p>";
            };
        };
    }

    ?>


</article>