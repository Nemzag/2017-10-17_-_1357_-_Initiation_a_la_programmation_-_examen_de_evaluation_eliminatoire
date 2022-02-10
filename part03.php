<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 17/10/2017
 * Time: 09:??
 * Updated: 06/11/2019
*/

/**
Créez un système de navigation de 4 liens: Accueil - Evénements - Nos services - Contact

Le paramètre  et le texte du lien seront enregistrés dans un tableau (array) et une boucle permettra d'afficher le menu.

Lors d'un clic sur un lien, affichez simplement un titre différent par page.
 */

?>

<?php
$menus = ['accueil' => 'Accueil', 'evenements' => 'Evénements', 'services' => 'Nos services', 'contact' => 'Contact'];

foreach($menus as $key => $value)
{
    echo '<a href="?page='.$key.'">'.$value.'</a>&nbsp;&nbsp;';
}

if(!isset($_GET['page']))
{
    $_GET['page'] = 'accueil';
}

if($_GET['page'] == 'contact')
{
    echo '<h1>Contacts</h1>';
}
elseif($_GET['page'] == 'evenements')
{
    echo '<h1>Evénements</h1>';
}
elseif($_GET['page'] == 'services')
{
    echo '<h1>Nos services</h1>';
}
else
{
    echo '<h1>Accueil</h1>';
}
?>

