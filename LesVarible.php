<?php
require "dt-head.html";
require "header-nav.html";
?>

<main>
    <article>
        <h1>les base php n°1</h1>

        <h2 class="sous_patie">les variable php</h2>
        <p>
        <p class="conseille">Les variables sont indispensables à tout langage de programmation.</p>
        Definition: les variable php: <br>
        sont des infomation tenporer stocer le temps de gener la page web presente en memoir vie, constitier de deux element<strong> non et valeur</strong>
        <br>En php le <strong>non</strong> comence par <strong>$</strong>
        <br> la valeur et linfomation que la variable contien et ses cette infomation qui peu varier ex 38 valeur variable age $age = 38;
        <br> en php les variable se termine par un ; poin vergule.
        <br>les varible peuve stker diferente valeur :
        </p>
        <!-- tabeau generique  -->
        <table>
            <thead>
                <tr>
                    <th scope="row" colspan="3">valeur stroquer par les variable</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Valeur</th>
                    <th>type</th>
                    <th>exemple</th>
                </tr>
                <tr>
                    <td>Chaine de caractéres</td>
                    <td>string</td>
                    <td>$autorName ='david';</td>
                </tr>
                <tr>
                    <td>Nombre entiers</td>
                    <td>int</td>
                    <td>$age = 38;</td>
                </tr>
                <tr>
                    <td>Nonbres décimeaux</td>
                    <td>flat</td>
                    <td>$poducPrice = 12.99;</td>
                </tr>
                <tr>
                    <td>Booléens</td>
                    <td>bool</td>
                    <td>$isAllowed = true;</td>
                </tr>
                <tr>
                    <td>Rien</td>
                    <td>NULL</td>
                    <td>$auteurQantiter = NULL;</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th scope="row" colspan="3">les variables</th>
                </tr>
            </tfoot>
        </table>
        <!-- fin de tablaeau generique -->

        <p>les variale sintax php</p>
        <div class="demonstration">
            <h3>Demonstration :</h3>
            <p>chaine de caracter aficher avce le scpte suivant</p>
            <?php
            echo "bonjour je suis ecrit en php";
            $userAge = 17; //la varible cre vaut 17
            $userAge = 22; //la varible modifier vaut 22
            $userAge = 38; //la varible modifer vaut 38
            /*
                La variable $userAge  va être créée et 
                prendre pour valeur, dans l'ordre : 17,22,38.
                */
            echo '<br>' . $userAge;
            echo '<h3>Utilisez les types de données</h3>';
            // on peu auci inser des balise html avce php

            // sting
            $fullname = "David Soutarson";
            $email = 'mon-super-email@gmail.com';

            // atetion simple cote '' ou doule cote "" 
            $variable1 = "Mon \"nom\" est David";
            $variable2 = 'Je m\'appelle David';

            echo '<p class= "conseille"> Attention, petit piège : 
                si vous voulez insérer un guillemet 
                simple alors que le texte est entouré de guillemets simples,
                 il faut l\'échapper en insérant un antislash devant. 
                Il en va de même pour les guillemets doubles. </P>';

            //Le type float  (nombre décimal)
            $prix = 12.90;

            //Le type bool  (booléen)
            $isAuthor = true;
            $isAdministrator = false;

            //Une variable vide avec NULL
            $noValue = NULL;
            ?>

            <p>Ce code php a etait inser </p>
            <p><img src="img\fig-01-php.JPG" alt="image test"> </p>
            <h2>Concaténez une variable</h2>
            <p><img src="img/fig-02-php.JPG" alt="image teste"></p>
            <p>le scripte si de sue donnne le resuta suivant</p>

            <?php
            $nom_visteur = "paule shemite";
            echo "<p>bonjour ";
            echo $nom_visteur;
            echo "bien venue sur le site !</p>";

            echo "<p>inclure des varible dan une chaine de caracter avec {}  </p>";

            echo "<p>Bonjour {$fullname} et bienvenue sur le site !</p>";

            echo '<p>Bonjour ' . $fullname . ' et bienvenue sur le site !</p>';
            ?>
            <h2>Faites des calculs simples don le resuta et stquer en variable</h2>

            <!-- tableau des sinbole matematique simple -->
            <table>
                <thead>
                    <tr>
                        <th scope="row" colspan="2">Les opérations de base</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Synbole</th>
                        <th>Signification</th>
                    </tr>
                    <tr>
                        <th>+</th>
                        <th>Adition</th>
                    </tr>
                    <tr>
                        <th>-</th>
                        <th>Soustraction</th>
                    </tr>
                    <tr>
                        <th>*</th>
                        <th>Multiplication</th>
                    </tr>
                    <tr>
                        <th>/</th>
                        <th>Division</th>
                    </tr>
                    <tr>
                        <th>%</th>
                        <th>modulo</th>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="row" colspan="2">Après, pour vous en servir, ça coule de source.</th>
                    </tr>
                </tfoot>
            </table>
            <?php
            #ce script contien des calcle sinple
            $number1 = 2 + 4; // $number prend la valeur 6
            $number2 = 5 - 1; // $number prend la valeur 4
            $number3 = 3 * 5; // $number prend la valeur 15
            $number4 = 10 / 2; // $number prend la valeur 5

            // Allez on rajoute un peu de difficulté
            $number5 = 3 * 5 + 1; // $number prend la valeur 16
            $number6 = (1 + 2) * 2; // $number prend la valeur 6

            $number7 = 10;
            $result = ($number7 + 5) * $number7; // $result prend la valeur 150

            echo "<p> les resulta pour le script suivant <br>" . $number1 . "<br>" . $number2 . "<br>" . $number3 . "<br>" . $number4 . "<br>" . $number5 . "<br>" . $number6 . "<br>" . $number7 . "<br>" . $result . "<br> fin </p>";

            ?>
            <p><img src="img/fig-03-php.JPG" alt="image teste"></p>

            <p class="conseille">
                Il est possible de faire un autre type d'opération un peu moins connu : le modulo.
                Cela représente le reste de la division entière. <br>
                Par exemple, 6 / 3 = 2 et il n'y a pas de reste. En revanche, 7 / 3 = 2 (car le nombre 3 « rentre » 2 fois dans le nombre 7)
                et il reste 1. Vous avez fait ce type de calculs à l'école primaire, souvenez-vous !
                Le modulo permet justement de récupérer ce reste
            </P>

            <?php
            $number8 = 10 % 5; // $number prend la valeur 0 car la division tombe juste
            $number9 = 10 % 3; // $number prend la valeur 1 car il reste 1

            echo "<p> les resulta pour le script suivant <br>" . $number8 . "<br>" . $number9 . "<br> fin </p>"
            ?>

            <p><img src="img/fig-04-php.JPG" alt="image teste"></p>

        </div>
        <h2>En résumé</h2>

        <p>
            Une variable est une petite information qui reste stockée en mémoire le temps de la génération de la page PHP. Elle a un nom et une valeur. <br>
            Il existe plusieurs types de variables qui permettent de stocker différents types d'informations : <br>
            du texte ( string ), des nombres entiers ( int ), des nombres décimaux (float), des booléens pour stocker vrai ou faux ( bool ), etc.<br>
            En PHP, un nom de variable commence par le symbole dollar : $age , par exemple.<br>
            La valeur d'une variable peut être affichée avec l'instruction echo .<br>
            Il est possible de faire des calculs mathématiques entre plusieurs variables : addition, soustraction, multiplication…<br>
            Maintenant que vous savez comment on travaille avec les variables, nous allons nous pencher sur un autre concept important : les conditions
        </p>
    </article>
    </body>

    </html>