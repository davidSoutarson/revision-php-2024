<?php
require "dt-head.html";
require "header-nav.html";
?>
<h1>Les Boucles PHP & Tableau 2/2 </h1>
<div class="rapele">
    <h2>I. Les tableau rapele</h2>
    <p>
        il est possible d'enregistrer de nombreuses informations dans une seule variable grâce aux tableaux. On en distingue deux types :
        <br>1. Les tableaux numérotés.
        <br>2. Et les tableaux associatifs.
    </p>

    <p>
        Construisez un tableau numéroté:
        <br>Pour créer un tableau numéroté en PHP, on liste ses valeurs entre crochets<strong>[ ]</strong>
        <br> on peu ossie creer des tableau avec <strong> array </strong>
    </p>

    <h2>pusieur fason de creer des tableau php</h2>

    <p><img src="img/fig-02-Tableau-php.JPG" alt="ilutrasion php"></p>

    <?php

    $recipes01 = ['Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César',];

    // La fonction array permet aussi de créer un array
    $recipes02 = array('Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César');

    //Vous pouvez aussi créer manuellement le tableau, case par case :
    $recipes03[0] = 'Cassoulet';
    $recipes03[1] = 'Couscous';
    $recipes03[2] = 'Escalope Milanaise';
    $recipes03[3] = 'Salade César';

    echo "<p> <strong> print_r(\$tableau) </strong>  permet de verifier le contenu d'un tatbleau php. </p>";

    echo "<p> print_r(\$recipes01); ou print_r(\$recipes02); ou print_r(\$recipes03); donne le même resulta </p>";
    print_r($recipes01);
    echo "<p> même resulta </p>";
    print_r($recipes02);
    echo "<p> même resulta </p>";
    print_r($recipes03);

    echo "<p> _______________Séparation______________________ </p>";

    echo "<p> Resulta  avec une boucle while</p>";
    echo '<p><img src="img/fig-03-Tableau-php.JPG" alt="ilutrasion php"></p>';

    $i = 0;

    while ($i <= 3) {
        echo "<p>" . $recipes01[$i] . "</p>";
        $i++;
    };


    echo "<p> Même resulta avec une boucle for</p>";
    echo '<p><img src="img/fig-04-Tableau-php.JPG" alt="ilutrasion php"></p>';

    for ($i = 0; $i <= 3; $i++) {

        echo "<p>" . $recipes02[$i] . "</p>";
    };

    ?>

    <h2>Affichez un tableau numéroté</h2>

    <p>
        <strong> echo $recipes02[1]; </strong> // Cela affichera : Couscous par exemple.
        <br> n'oubliez pas que Couscous est en seconde position et donc qu'il a le numéro 1
        <br> étant donné qu'on commence à compter à partir de 0
    </p>

    <h2>Familiarisez-vous avec les tableaux associatifs</h2>

    <p>
        Les tableaux associatifs fonctionnent sur le même principe, sauf qu'au lieu de numéroter les cases,
        <br>on va les étiqueter en leur donnant à chacune un nom différent.
    </p>


</div>

<h2>Construisez un tableau associatif</h2>

<p>Nous pouvons stocker une objet sous la forme d'un tableau associatif, dans lequel chaque clé est une propriété de cette objet :</p>

<?php
// Une bien meilleure façon de stocker une recette !
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'john.doe@exemple.com',
    'enabled' => true,
];

$voiture = [
    'marque-DE' => ['wolwagen', 'mercedes', 'BMW', 'audi'],
    'marque-FR' => ['Renaud', 'peugot', 'citroene'],
    'marque-GB' => ['jagoire', 'astonemartine', 'mini', 'Rolls-Royce'],
    'marque-IT' => ['fiat', 'fearie', 'alfa-romeo', 'lamborghni', 'maserati', 'lancia'],
    'marque-us' => ['jeep', 'ford', 'chevrole', 'Buick', 'Cadillac', 'Chrysler', 'GMC', 'Lincoln', 'Hummer', 'Plymouth'],
    'marque-JP' => ['honda', 'nissan', 'Mitsubishi', 'Mazda', 'Subaru', 'Lexus', 'Suzuki', 'Toyota'],
    'marque-RU' => ['Lada', 'GAZ', 'UAZ'],
];

echo "<pre>";
print_r($voiture);
echo "</pre>";
?>