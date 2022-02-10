<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 17/10/2017
 * Time: 09:05
 * Updated: 06/11/2019
*/

/**
 * 1) En utilisant les 3 variables déclarées, affichez le texte suivant:
 * Rasmus Lerdorf est l'inventeur de PHP qui actuellement est dans sa version 7.
 * Utilisez les apostrophes et pas les guillemets
 */

echo '<h3>1) En utilisant les 3 variables déclarées, affichez le texte suivant:</h3>';

$langage = 'PHP';
$version = 6;
$createur = 'Rasmus Lerdorf';

echo $createur.' est l\'inventeur de '.$langage.' qui actuellement est dans sa version '.($version += 1).'.';


/**
 * 2) Modifiez le type de la variable en chaîne de caractères et affichez le nouveau type
 */

echo '<h3>2) Modifiez le type de la variable en chaîne de caractères et affichez le nouveau type</h3>';

$val = 123;

settype($val, 'string');
echo gettype($val);


/**
 * 3) Dans un fichier externe "param.inc.php" créez 2 constantes de configuration:
user = login
password = admin
 * Affichez dans ce fichier les valeurs des constantes
 * Votre user est: login
 * Votre password est: admin
 *
 */

echo '<h3>3) Affichez dans ce fichier les valeurs des constantes</h3>';

require 'inc/param.inc.php';

echo 'Votre user est: '.USER.'<br>';
echo 'Votre password est: '.PASSWORD.'<br>';


/**
 * 4) Affichez si les nombres stockés dans les trois variables sont déclarés par ordre croissant ou non
 */

echo '<h3>4) Affichez si les nombres stockés dans les trois variables sont déclarés par ordre croissant ou non</h3>';

$a = 1; // 2
$b = 3; // 3
$c = 5; // 5

if($a < $b && $b < $c && $a < $c)
{
    echo 'Déclaré par ordre croissant';
}
else
{
    echo 'Pas déclaré par ordre croissant';
}


/**
 * 5) Affichez si la valeur de la variable est un entier ou pas. Ensuite, détruisez cette variable
 */

echo '<h3>5) Affichez si la valeur de la variable est un entier ou pas. Ensuite, détruisez cette variable</h3>';

$val = 12.5;

if(is_integer($val))
{
    echo 'Est un entier';
}
else
{
    echo 'N\'est pas un entier';
}

unset($val);


/**
 * 6) Réalisez un script permettant d'attribuer un grade à un étudiant en fonction des points obtenus:
    <  10: Echec
    >= 10: Satisfaction
    >= 14: Distinction
    >= 16: Grande distinction
    >= 18: Plus grande distinction
 * Les points seront évalués seulement si la variable n'est pas vide.
 */

echo '<h3>6) Réalisez un script permettant d\'attribuer un grade à un étudiant en fonction des points obtenus:</h3>';

$points = '18';

if(!empty($points))
{
    if ($points < 10)
    {
        echo 'Echec';
    }
    elseif ($points >= 18)
    {
        echo 'Plus grande distinction';
    }
    elseif ($points >= 16)
    {
        echo 'Grande distinction';
    }
    elseif ($points >= 14)
    {
        echo 'Distinction';
    }
    elseif ($points >= 10)
    {
        echo 'Satisfaction';
    }
}
else
{
    echo 'La variable est vide, définissé là.';
}
