<?php
require "dt-head.html";
require "header-nav.html";
?>
<h1>les boucles PHP & tableau 1/2 </h1>

<h2> I. les tableau</h2>

<p>Les tableaux sont des structures capables de conserver en mémoire plusieurs éléments. Et c'est ensuite grâce aux boucles que nous allons pouvoir :</p>

<p>1. Parcourir les tableau.</p>
<p>2. Les afficher des tableau à l'aide du langage HTML.</p>

<p class="conseille">
    Nous reviendrons sur les tableaux en détail dans le chapitre suivant.
    <br>C'est l'un des éléments les plus utiles de PHP.
    <br>Tout 'ou prsque' les applications on besoin de tableau.
    <br><strong>LA NOTION DE TABLEAU ET ESENCIELE A TOUT LANGAGE DE PROGRAMATION !</strong>
</p>

<p>
    En PHP, il existe un type de structure appelée "tableau".
    <br>Elle permet de gérer des objets ayant plusieurs propriétés qui ont besoin d'être rassemblées entre elles.
</p>

<p>
    Notez pour le moment que :
    <br>. un tableau se déclare entre crochets : [ ] ;
    <br>. il possède des indices : 0, 1, 2, … ;
    <br>. on peut accéder à un élément du tableau à partir de ces clés.
    <br>Mais la puissance des tableaux ne s'arrête pas là !
    <br>. Vous pouvez construire des tableaux de tableaux :
</p>
<p class="conseille">Les indices d'un tableau commencent à 0, et pas à 1.</p>

<div class="demonstration">
    <!-- contion les demontration et Exemple de ce chapiter -->
    <h2>Demonstration</h2>
    <p>ca concre dutilisation de tableu</p>
    <p>Dans une Aplication je veux ! Regouper, aficher, utiliser des information, propriétés, "variable" ayant un lien entre elles : voiture, utilisateur, ingrédien </p>
    <p>uliliser les tableau php</p>

    <p>
        <strong>Pour eviter ca par exemple:</strong>
        <br> user1
        <br> <s> $userName1 = 'Mickael Andrieu'; </s>
        <br> <s> $userEmail1 = 'Mickael.andrieu@exemple.com'; </s>
        <br> <s> $userPassword1 = 'S3cr3t'; </s>
        <br> <s> $userAge1 = 34; </s>

        <br> user2
        <br> <s> $userName2 = 'Paule Endré'; </s>
        <br> <s> $userEmail2 = 'paule.endré@exemple.com'; </s>
        <br> <s> $userPassword2 = 'P3sr5tw99'; </s>
        <br> <s> $userAge2 = 34; </s>
    </p>
    <p> Ces pas feau mes peux fair mieux !</p>
    <p>Comme cecie:</p>
    <?php

    echo "<p> <img src='img/fig-01-Tableau-php.JPG' alt=' ilustration code php' > </p>";
    #premier tableau
    $user1 = ["Mickael Andrieu", "Mickael.andrieu@exemple.com", "S3cr3t", 34];

    /* recuperon la pemier cle du tableau */
    echo " <p> recuperon la pemier cle du tableau: " . $user1[0] . "</p>";
    /* recuperon la cle n°2 du tableau */
    echo " <p> recuperon la cle n°2 du tableau: " . $user1[1] . "</p>";
    /* recuperon la cle n°3 du tableau */
    echo " <p> recuperon la cle n°3 du tableau: " . $user1[2] . "</p>";
    /* recuperon la cle n°4 du tableau */
    echo " <p> recuperon la cle n°3 du tableau: " . $user1[3] . "</p>";

    echo "<p>Reponce tableaux de tableaux :</p>";

    /*  tableaux de tableaux */
    $mickael = ["Mickael Andrieu", "mickael.andrieu@exemple.com", "S3cr3t", 34];
    $mathieu = ["Mathieu Nebra", "Matieu.nebra@exemple.com", "devine", 33];
    $laurene = ["Lauréne Castor", "laurene.castor@exemple.com", "P4sswroD", 28];

    $users = [$mickael, $mathieu, $laurene];

    echo "<p> Utilisateur: nom: " . $users[1][0] . "maile:" . $users[1][1] . " mots de passe: "
        . $users[1][2] . " ages:  " . $users[1][3] . "</p>";

    ?>
</div>

<h2>Utilisez une boucle simple : while</h2>

<p> une boucle est:</p>
<p>
    . Une structure qui fonctionne sur le même principe qu'une condition if… else .

    <br>. D'ailleurs il y a beaucoup de similitudes avec le chapitre sur les conditions.

    <br>. Une boucle permet de répéter des instructions plusieurs fois.

    <br>. En clair : c'est un gain de temps, c'est très pratique, et bien souvent indispensable.
</p>

<p> Voilà ce qui se passe dans une boucle :</p>

<p>
    1. Comme d'habitude, les instructions sont d'abord exécutées dans l'ordre, de haut en bas.

    <br> 2. À la fin des instructions, on retourne à la première.

    <br> 3. On recommence à lire les instructions dans l'ordre.

    <br> 4. Et on retourne à la première, etc.
</p>

<p class="conseille">
    Les instructions seraient réexécutées à l'infini !
    C'est pour cela que, quel que soit le type de boucle, <strong>while ou for</strong> , il faut indiquer une condition.
    Tant que la condition est remplie, les instructions sont réexécutées.
    Dès que la condition n'est plus remplie, on sort enfin de la boucle. Ouf !
</p>

<h2> Voici comment faire avec une boucle simple : while </h2>

<div class="demonstration">
    <?php
    echo '<p><img src="img/fig-01-Boucle-php.JPG" alt="ilustation php"></p>
    <p> Une punition de 🤓 
    <br>  Si la punition avait été plus grosse, pas de problème ! Il aurait suffi de changer la condition, 
    <br> par exemple : mettre « TANT QUE c\'est inférieur ou égal à 500: $lignes <= 500) » pour l\'écrire 500 fois.
    <p/>
    <p>
    $lines++; est une façon plus courte d\'ajouter 1 à la variable. 
    <br>  On appelle cela l\'incrémentation (ce nom barbare signifie tout simplement que l\'on a ajouté 1 à la variable).
    </p> ';

    $lignes = 1;

    while ($lignes <= 10) {
        // instructions à exécuter dans la boucle
        echo " <br> Je ne doit pas regarder les mouche voler quand j'apprends le PHP. ";
        $lignes++;
    }

    echo "<p class='conseille'>Il faut toujours s'assurer que la condition sera fausse au moins une fois.
        <br>Si elle ne l'est jamais, alors la boucle s'exécutera à l'infini !
        <br>  PHP refuse normalement de travailler plus d'une quinzaine de secondes. 
        <br> Il s'arrêtera tout seul s'il voit que son travail dure trop longtemps, et affichera un message d'erreur.
        </p>";

    echo '<p> <img src= "img/fig-02-Boucle-php.JPG" alt="ilustration php"> </p>';

    $incrementation = 1;

    while ($incrementation <= 10) {
        // instructions à exécuter dans la boucle
        echo "  Ceci est la ligne n° :" . $incrementation . "</br>";
        $incrementation++;
    }

    echo '<p> <img src= "img/fig-03-Boucle-php.JPG" alt="ilustration php"> </p>';

    $moto = [
        [ //ligne 1
            'marque' => 'Honda',
            'modeles' => 'hornet',
            'cilindré' => '755 cm3',
        ],

        [ //ligne 2
            'marque' => 'Yamaha',
            'modeles' => 'mt7',
            'cilindré' => '690 cm3',
        ],

        [ //ligne 3
            'marque' => 'Suzuki',
            'modeles' => 'sv',
            'cilindré' => '646 cm3',
        ],

    ];

    # TESTE
    // print_r($moto);
    //echo '<br> Teste' . $moto[0]['marque'];

    echo " <p> <img src='img/fig-04-Boucle-php.JPG' alt='ilustration php'> </p> ";

    $lines = 3;
    $counter = 0;

    while ($counter < $lines) {
        echo '<p>' . $moto[$counter]['marque'] . ' ' . $moto[$counter]['modeles'] . ' ' . $moto[$counter]['cilindré'] . '<p />';
        $counter++;
    };

    echo "<p>Lecture avec une boucle for</p>";

    for ($lines = 0; $lines <= 2; $lines++) {
        echo '<p>' . $moto[$lines]['marque'] . ' ' . $moto[$lines]['modeles'] . ' ' . $moto[$lines]['cilindré'] . '<p />';
    };

    ?>
    <h3>En résumé</h3>
    <p>
        Les boucles demandent à PHP de répéter des instructions plusieurs fois.
        <br>Les deux principaux types de boucles sont :
        <br>while : à utiliser de préférence lorsqu'on ne sait pas par avance combien de fois la boucle doit être répétée ;
        <br><strong> for :</strong> à utiliser lorsqu'on veut répéter des instructions un nombre précis de fois.
        <br>L'incrémentation est une technique qui consiste à ajouter 1 à la valeur d'une variable.
        <br>La décrémentation retire au contraire 1 à cette variable. On trouve souvent des incrémentations au sein de boucles for .
        <br>Ce chapitre était important et il vous a été utile pour faire afficher des informations sur notre site.
        <br>Maintenant, nous allons voir comment organiser nos données grâce aux tableaux.
    </p>

</div>