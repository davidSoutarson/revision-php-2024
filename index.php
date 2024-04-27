<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/masteur.css">
    <title>Revision php 2024</title>
</head>

<body>
    <header class="header bgC_bleux">
        <h1 class="titre-banner couleur position">Revision php </h1>
    </header>

    <nav class="conteneur-menu-pricipale">
        <h1>menu de navigation</h1>
        <ul classe="menu">
            <li class="liste">
                <a class="iteme1" href="">
                    acceuille
                </a>
            </li>
            <li class="liste">
                <a class="iteme1" href="">
                    html
                </a>
            </li>
            <li class="liste">
                <a class="iteme2" href="">
                    css
                </a>
            </li>
            <li class="liste">
                <a class="iteme3" href="">
                    php
                </a>
            </li>
            <li class="liste">
                <a class="iteme3" href="">
                    javaScript
                </a>
            </li>
            <li class="liste">
                <a class="iteme3" href="">
                    MySql
                </a>
            </li>
            <li class="liste">
                <a class="iteme3" href="">
                    Autre
                </a>
            </li>
        </ul>
    </nav>

    <main>
        <article>
            <h1> une premire organisation teste </h1>
        </article>
        <article class="ar_php001">
            <!-- contnue hml php -->
            <h1 class="tire_ar_php">les basse de php</h1>
            <nav class="sommert-php">
                <h2> Sommert php</h2>
                <ul>
                    <li>
                        <a href="#" class="som_iteme">
                            voire...
                        </a>
                    </li>
                    <li>
                        <a href="#" class="som_iteme">
                            voire...
                        </a>
                    </li>
                    <li>
                        <a href="#" class="som_iteme">
                            voire...
                        </a>
                    </li>
                </ul>

            </nav>
            <h2> Qu'est que php ?, A quoi sert php ?, comment utiliser php ? </h2>

            <h3> DEFINITION:</h3>
            <p><a href="https://www.php.net/manual/fr/intro-whatis.php">Source:aller viter la documention PHP</a></p>
            <!-- pour le monenla definito et cacher -->
            <div>
                <p>voir def</p>
                <p class="cacher">
                    PHP (officiellement, ce sigle est un acronyme récursif pour PHP Hypertext Preprocessor)
                    est un langage de scripts généraliste et Open Source,
                    spécialement conçu pour le développement d'applications web.
                    Il peut être intégré facilement au HTML
                    <br>... <br>
                    Ce qui distingue PHP des langages de script comme le Javascript,
                    est que le code est exécuté sur le serveur, générant ainsi le HTML,
                    qui sera ensuite envoyé au client.Le client ne reçoit que le résultat du script,
                    sans aucun moyen d'avoir accès au code qui a produit ce résultat.
                    Vous pouvez configurer votre serveur web afin qu'il analyse tous
                    vos fichiers HTML comme des fichiers PHP.
                    Ainsi, il n'y a aucun moyen de distinguer les pages qui sont produites
                    dynamiquement des pages statiques.
                    <br>... <br>
                    Bien que le développement de PHP soit orienté vers la programmation pour les sites web,
                    <strong>vous pouvez en faire bien d'autres usages</strong>. Lisez donc la section
                    <a href="https://www.php.net/manual/fr/intro-whatcando.php">Que peut faire PHP ?</a>
                    ou bien le tutoriel d'introduction si vous êtes uniquement intéressé dans la programmation web.
            </div>
            </p>
            <p>Nous alon eclersire cas.</p>

            <h3>site statique :</h3>
            <p>
                Un site statique est réalisé uniquement à l'aide des langages HTML et CSS.
                Il fonctionne très bien, mais son
                <strong>contenu ne peut pas être mis à jour automatiquement :</strong>
                il faut que le <strong>webmaster modifie le code source pour y ajouter des nouveautés</strong>
                On parle aucie: de site "<i>ecrie en dure</i>".
            </p>
            <p>
                Un site statique est adapté pour un site « vitrine »
                (pour présenter par exemple son entreprise), mais sans aller plus loin.
            </p>
            <h3>site dinamique</h3>
            <p>
                les site dinaque permete linteration
                il contient au mois un des element suivent:
            <ul>
                <li>formulaire de contact</li>
                <li>panier</li>
                <li>formulaire dincription</li>
                <li>posibileter ajouter ou de comenter</li>
                <li>Exetera ...</li>
            </ul>
            </p>
            <p>
                Le contenu de ce type de site est dit « dynamique » parce qu'il peut changer sans l'intervention du webmaster dev web!
            </p>
            <h3>A quoi sert php?</h3>
            <p>
                php et un langage de programation pemetent de creer des site dinamique.
                en asoiation avec d'autre langage: html, css, javaSript, MySQL.
            </p>
            <h3>comment utiliser php ?</h3>
            <p>
                Pour "utiliser" developer php nous avaon besoin de quelque "outillie" logiciele.
                <br>navigater web: Google Chrome,Opera,Mozila Fierfox,ou tout autre navigateur auquel vous êtes habitué pour aller sur le Web
            <p class="conseille">tips! tester son site régulièrement sur différents navigateurs est une bonne pratique</p>
            <br>un éditer de texe : vs code
            <br>un sever locale : wamps
            <p>

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
        <!-- fin du premier article  -->

        <article class="ar_php002">
            <!-- contnue  php -->
            <h1 class="tire_ar_php">php 2</h1>
        </article>
        <article class="ar_php003">
            <!-- contnue  php -->
            <h1 class="tire_ar_php">php 3</h1>
        </article>
        <article class="ar_php004">
            <!-- contnue  php -->
            <h1 class="tire_ar_php">php 4</h1>
        </article>
        <article class="ar_php005">
            <!-- contnue  php -->
            <h1 class="tire_ar_php">php 5</h1>
        </article>

    </main>

    <footer class="footer bgC_gris">
        <h2>je suis peid de page </h2>
    </footer>
</body>

</html>