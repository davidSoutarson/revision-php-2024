<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/masteur.css">
    <title>Revision php 2024</title>
</head>


<ul>
    <li>
        <a href="/./revision-php-2024">Retour au cour</a>
    </li>
</ul>

<article class="besoin-du-devoir">

    <h1>devoire</h1>

    <p>1- lire atentivemet les consigne</p>

    <p>
        PHP expert - <strong>Génération</strong> de contenus et statistiques: </br>
        - <strong> Créer la structure </strong> d’une <strong> base de données .</strong> </br>
        - <strong>Générer aléatoirement</strong> les contenus de la base de données avec précision et fiabilité, <strong> en respectant les contraintes
            définies </strong> .<br />
    </p>

    <p>
        Consignes <br>
        Les élèves des <strong>trois</strong> écoles suivantes :<br>
        – École A ;<br>
        – École B ;<br>
        – École C.<br><br>

        Peuvent pratiquer les cinq sports suivants :<br>
        – boxe ;<br>
        – judo ;<br>
        – football ;<br>
        – natation ;<br>
        – cyclisme.<br>
    </p>


    <p>
        -1. Créer la structure de la base de données.</br>

        -2. Générer aléatoirement à la demande les contenus de la base de données.</br>

        -3. Restituer la liste des écoles en affichant pour chacune : </br>
        – le nombre d’élèves ;</br>
        – le nombre d’élèves pratiquant au moins un sport ;</br>
        – le nombre d’activités sportives pratiquées ;</br>
        – la liste des activités sportives pratiquées classées par ordre croissant en fonction du nombre d’élèves qui les
        pratiquent et en précisant ce nombre pour chacune des activités.</br>

        -4. Question complémentaire : Après avoir terminé le développement, quelle évolution fonctionnelle serait-il
        utile de mettre en œuvre ? <br>
    </p>

    <h2> comprende la consigne</h2>

    <p>
        Ce devoire consite a generer du contenus statiqtique aléatoirement en respectant les contraintes
        définies. <br> Ce contenue doit etre stoquer dans une basse de données Corectement sucturer.</br>
        A l' aide de cette base de doner aficher aléatoireme les resuta consenen une ecole. </br>
        En repecten la suture da fichage de la consigne.
    </p>



</article>

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
    $sport_pratiquer_par_ecole = 4;
    $sport_proposer = ['boxe', 'judo', 'fooball', 'natation', 'cyclisme',];

    $eleve_non_spotife = 250;
    $eleve_sprotif = 350;

    $pratique_un_sport = 100;
    $pratique_deux_sport = 200;
    $pratique_trois_sport = 50;




    $ecole_A  = [
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

        'nombre eleve' => $nombre_eleve,
        'sport proposer' => $sport_proposer,
        'sport pratiquer par ecole' => $sport_pratiquer_par_ecole,

        'eleve non spotife' => $eleve_non_spotife,
        'eleve sprotif' => $eleve_sprotif,

        'pratique un sport' => $pratique_un_sport,
        'pratique deux sport' => $pratique_deux_sport,
        'pratique trois sport' => $pratique_trois_sport,
    ];


    echo "<pre>";
    var_dump($table_des_ecole);
    echo "</pre>";

    ?>



</article>