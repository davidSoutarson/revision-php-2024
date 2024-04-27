<?php
require "dt-head.html";
require "header-nav.html";
?>

<h1>les Condition php </h1>

<p>
    Une structure conditionnelle permet d'exécuter ou non une série d'instructions en fonction
    d'une condition d'origine (appellée aussi expression ou prédicat).
    Si le calcul de cette condition retourne TRUE alors le bloc d'instructions concerné est exécuté.
</p>

<p><a href="https://www.php.net/manual/fr/language.control-structures.php">voire la doc php</a> </p>

<ol>
    <li>Les synbole de comparesons</li>
    <li>le fonctionement de <strong>if else</strong></li>
    <li>les conditon multiples</li>
    <li>un exemple utile</li>
</ol>

<h2> les symbole de comparaison</h2>

<table>
    <thead>
        <tr>
            <th scope="row" colspan="3">symbole de comparaison</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>symbole </th>
            <th>signification </th>
            <th>definition sup</th>
        </tr>
        <tr>
            <td> == </td>
            <td>Est égal à</td>
            <td>
                L’égalité repose sur l’opérateur double égal.

            </td>
        </tr>
        <tr>
            <td> === </td>
            <td>Est absolument égal à</td>
            <td>
                Pour savoir si une valeur est identique en valeur et en type.
                <br>une forme d’égalité stricte, elle s’effectue avec l’opérateur
                tripe égal.
            </td>
        </tr>
        <tr>
            <td> > </td>
            <td>ESt supérieur à </td>
            <td></td>
        </tr>
        <tr>
            <td>
                < </td>
            <td> Est inférieur à </td>
            <td></td>
        </tr>
        <tr>
            <td> >= </td>
            <td> superieur ou égal </td>
            <td></td>
        </tr>
        <tr>
            <td>
                <= </td>
            <td>inferieur ou égal </td>
            <td> </td>
        </tr>
        <tr>
            <td>!==</td>
            <td>Est different</td>
            <td>
                La différence est marquée par l’opérateur point d’exclamation suivi du signe égal.
                Notons que le point d’exclamation exprime la négation.
            </td>
        </tr>
    </tbody>
</table>

<p class="conseille">
    Soyez attentif lore de l'utiliton des symbolle.
    <br>Garder aleprie Une condition peut être écrite en PHP sous différentes formes.
    <br>On parle de structures conditionnelles.
</p>

<p>Passon a la pratque :)</p>

<h2>la structur if else</h2>

<p>Voici ce qu'on doit écrire, dans l'ordre, pour utiliser cette condition.</p>

<p>Pour introduire une condition, on utilise le mot if qui signifie « si », en anglais.</p>

<p>On ajoute à la suite entre parenthèses la condition en elle-même (vous allez voir que vous pouvez inventer une infinité de conditions).</p>

<p>Enfin, on ouvre des accolades à l'intérieur desquelles on placera les instructions à exécuter si la condition est remplie.</p>

<div class="demonstration">
    <h3>Demonstration :</h3>

    <?php
    /* traduction isEnabled === est autorisé */
    $isEnabled = true; // la condition daccés

    if ($isEnabled === true) {
        echo "(Resuta de notre 1er condition:) Vous êtes autorisé(e) à accéder au site";
    }

    ?>

    <p><img src="img/fig-01-Condition-php.JPG" alt="image Condition-php"></p>

    <p>
        Ce qui compte ici, c'est qu'il y a <strong> deux possibilités </strong> :

        <br>Soit la condition est remplie et alors on affiche quelque chose.

        <br>Sinon, on saute "ignore" les instructions entre accolades, on ne fait rien.

    </p>

    <p>modifion la variable $isAllowedToEnter</p>
    <p>le mot-clé <strong>elseif</strong> qui signifie « sinon si » </p>
    <p>le mot-clé <strong>else</strong> qui signifie « sinon » </p>

    <p class="conseille">Pour vérifier si la variable est vide, vous pouvez taper : if ($variable === NULL)</p>

    <p><img src="img/fig-02-Condition-php.JPG" alt="image Condition-php"></p>

    <?php

    /* condition n°1 */
    $isAllowedToEnter = "Oui";

    // SI on a l'autorisation d'entrer
    if ($isAllowedToEnter === "Oui") {
        echo "<p> (resuta condition n°1)  instructions à exécuter quand on est autorisé à entrer </p>";
    } // SINON SI on n'a pas l'autorisation d'entrer
    elseif ($isAllowedToEnter === "Non") {
        echo "instructions à exécuter quand on n'est pas autorisé à entrer";
    } // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
    else {
        echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?";
    }

    /* condition n°2 */
    $isAllowedToEnter = "Non";

    // SI on a l'autorisation d'entrer
    if ($isAllowedToEnter === "Oui") {
        echo "instructions à exécuter quand on est autorisé à entrer";
    } // SINON SI on n'a pas l'autorisation d'entrer
    elseif ($isAllowedToEnter === "Non") {
        echo "<p> (resuta condition n°2)instructions à exécuter quand on n'est pas autorisé à entrer </p>";
    } //SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
    else {
        echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?";
    }

    /* condition n°3 */
    $isAllowedToEnter = "truc";

    // SI on a l'autorisation d'entrer
    if ($isAllowedToEnter === "Oui") {
        echo "instructions à exécuter quand on est autorisé à entrer";
    } // SINON SI on n'a pas l'autorisation d'entrer
    elseif ($isAllowedToEnter === "Non") {
        echo "instructions à exécuter quand on n'est pas autorisé à entrer";
    } //SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
    else {
        echo "<p> (resuta condition n°3) Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ? </p>";
    }

    ?>

    <h3>Teste des variables booléens</h3>

    <p>Les booléens sont ces variables qui valent :</p>

    <p>soit true (vrai) ;</p>

    <p>soit false (faux).</p>

    <p>Voici comment on teste une variable booléenne</p>

    <p><img src="img/fig-03-Condition-php.JPG" alt="image Condition-php"></p>

    <?php
    $boeleenTest = true;

    if ($boeleenTest) {
        echo "<br> (resutat du teste) Bienvenue petit nouveau. :o)";
    } else {
        echo "T'as pas le droit d'entrer !";
    }

    echo "<p> teston ci la vaviable boeleen est faux <p>";

    if (!$boeleenTest) {
        echo "<br>le varible boeleenTest veau faux";
    } else {
        echo "le varible boeleenTest veau vrai";
    }

    $jeVeauxFaux = false;

    if (!$jeVeauxFaux) {
        echo "<br>le varible jeVeauxFaux veau faux";
    }

    echo "<p>Ci desou exemple de script tester une valeur fause <strong>false </strong> </p>"
    ?>
    <p><img src="img/fig-04-Condition-php.JPG" alt="image Condition-php"></p>

    <h3> Posez des conditions multiples </h3>
</div>