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

    <p>Poser plusieurs conditions à la fois. Pour cela, on aura besoin de nouveaux mots-clés. Voici les principaux à connaître </p>

    <table>
        <thead>
            <tr>
                <th scope="row" colspan="3">
                    Les mot-clé et symbole de condition multiple
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Mot-clé</th>
                <th>sinification</th>
                <th>Symbole équivaleant</th>
            </tr>
            <tr>
                <td>AND</td>
                <td>et</td>
                <td>&&</td>
            </tr>
            <tr>
                <td>OR</td>
                <td>Ou</td>
                <td>||</td>
            </tr>
        </tbody>
    </table>

    <h4> Exemple d'utilisation miltiple si de sou </h4>

    <p><img src="img/fig-05-Condition-php.JPG" alt="image Condition-php"></p>

    <?php
    $isEnabled = true;
    $isOwner = false;

    if ($isEnabled && $isOwner) {
        echo '<p> Accès à la recette validé ✅</p>';
    } else {
        echo '<p> Accès à la recette interdit ! ❌</p>';
    }
    ?>

    <?php
    $isEnabled = true;
    $isOwner = false;
    $isAdmin = true;

    if (($isEnabled && $isOwner) || $isAdmin) {
        echo '<p> Accès à la recette validé ✅</p>';
    } else {
        echo '<p> Accès à la recette interdit ! ❌</p>';
    }
    ?>

    <h3>Ecrire les comdotion autrement !</h3>

    <p class="conseille">Sachez que les deux codes ci-dessous donnent exactement le même résultat :</p>

    <h4>Ecriture php clasique</h4>

    <p><img src="img/fig-06-Condition-php.JPG" alt="image Condition-php"></p>

    <?php
    $chickenRecipesEnabled = true;

    if ($chickenRecipesEnabled) {
        echo '<h1> ex: <i> Liste des recettes à base de poulet </i> </h1>';
    }
    ?>

    <h4> Une autre fason d'écrire du php</h4>

    <p><img src="img/fig-07-Condition-php.JPG" alt="image Condition-php"></p>


    <?php $chickenRecipesEnabled = true; ?>

    <?php if ($chickenRecipesEnabled) : ?> <!-- Ne pas oublier le ":" -->

        <h1> ex: <i> Liste des recettes à base de poulet </i> </h1>

    <?php endif; ?><!-- Ni le ";" après le endif -->

    <p class="conseille">
        La syntaxe pour utiliser la condition diffère un peu :
        <br>Il n'y a pas d'accolade.
        <br>On ajoute : après la parenthèse fermante de l'instruction if .
        <br>Et il faut ajouter une instruction endif; .
    </p>

    <h4>un exempl du tilisation</h4>
    <p><img src="img/fig-08-Condition-php.JPG" alt="image Condition-php"></p>

    <?php $axeOK = true; ?>

    <?php if ($axeOK) : ?>

        <p> Resulta ex1: vous pouver aserder a se menue</p>

        <ul>
            <p> ex1 menue administater </p>
            <li>ex1 admine profile</li>
            <li>ex1 admine modification</li>
            <li>ex1 admine supresion article</li>
        </ul>
        <br>
    <?php elseif (!$axeOK) : ?>

        <p>vous net pas un amisnietrateur</p>

    <?php endif; ?><!-- Ni le ";" après le endif -->

    <h4>invese de lexemple presedent</h4>
    <p><img src="img/fig-09-Condition-php.JPG" alt="image Condition-php"></p>

    <?php $axeOK2 = false; ?>

    <?php if ($axeOK2) : ?>

        <p> vous pouver aserder a se menue</p>

        <ul>
            <p> menue administater </p>
            <li>ex admine profile</li>
            <li>ex admine modification</li>
            <li>ex admine supresion article</li>
        </ul>

    <?php elseif (!$axeOK2) : ?>

        <p>Resulta ex2: Vous net pas un amisnietrateur</p>

    <?php endif; ?>

    <h2>Utilisez la condition <strong> switch </strong> pour optimiser votre code</h2>

    <p>
        En théorie, les structures à base de if… elseif… else que je viens de vous montrer suffisent pour
        traiter n'importe quelle condition.
    </p>

    <p><img src="img/fig-10-Condition-php.JPG" alt="image Condition-php"></p>

    <?php
    $grade = 16;

    if ($grade === 0) {
        echo "Il faudra revoir tout le cours !";
    } elseif ($grade === 5) {
        echo "Tu dois réviser plusieurs chapitres";
    } elseif ($grade === 7) {
        echo "Il te manque quelques révisions pour atteindre la moyenne";
    } elseif ($grade === 10) {
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    } elseif ($grade === 12) {
        echo "Tu es assez bon";
    } elseif ($grade === 16) {
        echo "Tu te débrouilles très bien !";
    } elseif ($grade === 20) {
        echo "Excellent travail, c'est parfait !";
    } else {
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
    }
    ?>

    <h2> Dans ce cas il vaux mieux utliser <strong>switch</strong> </h2>
    <p class="conseille">
        Comme vous le voyez : c'est lourd, long, et répétitif.

        Dans ce cas, on peut utiliser une autre structure plus souple : c'est switch !

        Voici le même exemple avec switch (le résultat est le même, mais le code est plus adapté) :
    </p>

    <p><img src="img/fig-11-Condition-php.JPG" alt="image Condition-php"></p>


    <p>Réponce aficher par le code exemple :
        <?php
        $grade = 13.5;
        $note = NULL;

        switch ($grade) // on indique sur quelle variable on travaille
        {
            case  0: // dans le cas où $grade vaut 0
                echo "devoir non rendue";
                break;

            case $note = ($grade < 0): // dans le cas grade a un valeur négative
                echo "NOTE NEGATIVE";
                break;

            case $note = ($grade <= 5): // dans le cas où $grade vaut 5 ou moin mais pas 0
                echo "Il faudra revoir tout le cours !";
                break;

            case $note = ($grade <= 7): // dans le cas où $grade vaut 7 ou moin mais pas 5 ou moin de 5
                echo "Tu dois réviser plusieurs modules";
                break;

            case $note = ($grade <= 9):
                echo "Il te manque quelques révisions pour atteindre la moyenne "; // dans le cas où $grade vaut 9 ou moin mais pas 7
                break;

            case 10: // etc. etc.
                echo "Tu as pile poil la moyenne, c'est un peu juste… </p>"; // dans le cas où $grade egale 10
                break;

            case $note = ($grade <= 12):
                echo "Tu es assez bon"; // dans le cas où $grade vaut 12 ou moin mais pas 10
                break;

            case $note = ($grade <= 16):
                echo "<p> Response réalise gace au scripte de l'ilustration suivante. </p>";
                echo "Tu te débrouilles très bien !"; // dans le cas où $grade vaut 16 ou moin mais pas 12
                echo " La varible \$grade veau:" . $grade . " La varible \$note vaux :" . $note;
                break;

            case $note = ($grade <= 20):
                echo "Excellent travail, c'est parfait !"; // dans le cas où $grade vaut 20 ou moin mais pas 16
                break;

            default:
                echo "Désolé, je n'ai pas de message à afficher pour cette note";
        }
        ?>
    <p>Tout fois cette ecriture de switch montre ses limite car: </p>
    <ul>
        <li>$grade = 1</li>
        <li>$grade = 2</li>
        <li>$grade = 3</li>
        <li>$grade = 4</li>
        <li>$grade = 6</li>
        <li>$grade = 8</li>
        <li>$grade = 9</li>
        <li>$grade = 11</li>
        <li>$grade = 13</li>
        <li>$grade = 14</li>
        <li>$grade = 15</li>
        <li>$grade = 17</li>
        <li>$grade = 18</li>
        <li>$grade = 19</li>
        <li>ou tout autre resusulta 1.5 1.6 ... non ecri dans la condition</li>
        <li>la repoce prevue par defaat <strong> defaut: echo "Désolé, je n'ai pas de message à afficher pour cette note"; </strong> </li>
        <li>Sera aficher</li>
    </ul>

    <p class="conseille">Pour nieux comprendre switch a <a href="https://www.php.net/manual/fr/control-structures.switch.php">voire la doc php</a></p>


    <p>
        La conditon switch serai idele pour la creation d'un reveille ,
        <br>ou tout autre cas avec un grand nombre de valeurs différentes.
        <br> une amelioration du code presedant.
    </p>
    <p><img src="img/fig-12-Condition-php.JPG" alt="image Condition-php"></p>

    <h2>les ternaires : des conditions condensées</h2>

    <p>Il existe une autre forme de condition, beaucoup moins fréquente: Il s'agit de ce qu'on appelle les ternaires.</p>

    <p>
        Un ternaire est une condition condensée qui sert à faire deux choses sur une seule ligne :
        <br>1.Tester la valeur d'une variable dans une condition.
        <br>2.Affecter une valeur à une variable selon que la condition est vraie ou non.
    </p>

    <p>exemple à base de if… else qui met un booléen $majeur à vrai ou faux selon l'âge du visiteur :</p>

    <?php
    $userAge = 34;

    if ($userAge >= 18) {
        $isAdult = true;
        echo "<p>La condition (\$userAge >= 18 ) verifier et: vrais valeur <strong>true</strong> atribuer a \$isadult vaut :" . $isAdult . "</p>";
    } else {
        $isAdult = false;
    }
    ?>

    <p>Exemple </p>
    <p><img src="img/fig-13-Condition-php.JPG" alt="image Condition-php"></p>
    <h3>On peut faire la même chose en une seule ligne grâce à une structure ternaire :</h3>

    <p>Exenple </p>
    <p><img src="img/fig-14-Condition-php.JPG" alt="image Condition-php"></p>

    <?php
    $userAge = 24;

    $isAdult = ($userAge >= 18) ? true : false;

    echo "<p>La condition (\$userAge >= 18 ) verifier et: vrais valeur <strong>true</strong> atribuer a \$isadult vaut :" . $isAdult . "</p>";

    // Ou mieux, dans ce cas précis
    $isAdult = ($userAge >= 18);
    ?>

    <p>Autre exemple dutilisation de ternaire: <a href="https://fr.php.brj.cz/operateurs-ternaires-en-php---condition-en-une-ligne"> voire: fr.php.brj.cz</a> </p>
</div>

<h2>Pour Résumé </h2>
<p>
    Les conditions permettent à PHP de prendre des décisions en fonction de la valeur des variables.
</p>
<p>
    La forme de condition la plus courante est if ... elseif ... else qui signifie « si »… « sinon si »… « sinon ».
</p>
<p>
    On peut combiner des conditions avec les instructions&& (« et ») et|| (« ou »).
</p>
<p>
    Si une condition comporte de nombreux elseif , il peut être plus pratique d'utiliser la condition switch.
</p>
<p>
    Les ternaires sont des conditions condensées qui font un test sur une variable, et en fonction des résultats de ce test,
    elles donnent une valeur à une autre variable.
</p>
<p> Elles sont cependant plus rarement utilisées.</p>

<p class="conseille">Entrénez vous regulierment!!! Consulter regulierment: <strong> <a href="https://www.php.net/manual/fr/control-structures.switch.php"> LA DOC PHP </a> </strong> Perment de progreser ! </p>