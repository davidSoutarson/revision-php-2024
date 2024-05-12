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

<?php
require('creationTableau.php');
?>

<article>
    <h2>Afichage tatbleau fixe</h2>



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