<?php

/*****************************************/
/********** Les boucles : For ************/
/*****************************************/
echo '1.Nombre de mouton : <br>';
for ($i = 0; $i <= 10; ++$i) {
    echo $i.' mouton(s)<br>';
}
echo '<br><br>';
//----------------------------------------
//for : particulièrement utile pour pacourir un tableau
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
//count est une fonction proposée par php qui sert à compter le nombre d'éléments d'un tableau
echo '2.Les couleurs : <br>';
for ($i = 0; $i < count($couleurs); ++$i) {
    echo $couleurs[$i].'<br>';
}
echo '<br><br>';

//----------------------------------------
//Parcourir un tableau depuis la fin
echo '3.Les couleurs depuis la fin: <br>';
//n'oubliez pas qu'un tableau commence à l'index 0. C'est pour ça qu'on commence notre $i à la taille du tableau moins 1
for ($i = count($couleurs) - 1; $i >= 0; --$i) {
    echo $couleurs[$i].'<br>';
}
echo '<br><br>';
//----------------------------------------
//Parcourir un tableau multidimensionnel à 2 dimensions
$couleurs = array(
  array('rouge clair', 'rouge', 'rouge fonce'),
  array('bleu clair', 'bleu', 'bleu fonce'),
  array('vert clair', 'vert', 'vert fonce'),
  array('orange clair', 'orange', 'orange fonce'),
  array('marron clair', 'marron', 'marron fonce'),
);

echo '4.Les nuances de couleurs : <br>';
for ($i = 0; $i < count($couleurs); ++$i) {
    for ($j = 0; $j < count($couleurs[$i]); ++$j) {
        echo $couleurs[$i][$j].'<br>';
    }
}

echo '<br><br>';

/*****************************************/
/********** Les boucles : Foreach ********/
/*****************************************/
//parcourir un tableau simple
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
echo '5.Les couleurs : <br>';
foreach ($couleurs as $couleur) {
    echo $couleur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif
$vehicule = array(
  //clé => valeur
  'nom' => 'Aventador LP 700-4',
  'marque' => 'Lamborghini',
  'puissance' => 700,
  'prix' => 200000,
);
echo '6.Specificite de ma voiture : <br>';
//syntax : foreach($tableau as $cle => $valeur )
foreach ($vehicule as $propriete => $valeur) {
    echo $propriete.':'.$valeur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif multidimensionnel
$vehiculeConcession = array(
  'Bas de gamme' => array(
    'nom' => 'C1',
       'marque' => 'Citroen',
       'puissance' => 70,
       'prix' => 10000,
  ),
  'Milieu de gamme' => array(
    'nom' => 'Golf',
       'marque' => 'VW',
       'puissance' => 140,
       'prix' => 270000,
  ),
  'Haut de gamme' => array(
    'nom' => 'Aventador LP 700-4',
       'marque' => 'Lamborghini',
       'puissance' => 700,
       'prix' => 200000,
  ),
);
echo '7.Les voitures dans la concession :';
foreach ($vehiculeConcession as $gamme => $vehicule) {
    echo '<br>'.$gamme;
    foreach ($vehicule as $propriete => $valeur) {
        echo $propriete.' : '.$valeur.'<br>';
    }
}
echo '<br><br>';

/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/

//----------------------------------------
//Créer un tableau pour les mois de l'année et affiché tous les mois de Janvier à Décembre
//modifier et/ou remplacer les éléments ci-dessous
echo "8.Les mois depuis le debut de l'annee : <br>";
$mois = [
'janvier',
'février',
'mars',
'avril',
'mai',
'juin',
'juillet',
'août',
'septembre',
'octobre',
'novembre',
'décembre'
];
for ($i = 0; $i < count($mois); $i++) {
    echo $mois[$i] . ' <br/>';
}
echo '<br><br>';

//Afficher les mois de la fin de l'année jusqu'au début de l'année
//modifier et/ou remplacer les éléments ci-dessous
echo "9.Les mois depuis la fin de l'annee : <br>";
for ($i = count($mois); $i >= 0; $i--) {
  echo $mois[$i] . ' <br/>';
}
echo '<br><br>';
//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
$college = [
  'Sixieme' => [
    ['Nom' => 'Payet', 'Prenom' => 'Mickael'],
    ['Nom' => 'Hoareau', 'Prenom' => 'Christine'],
    ['Nom' => 'Maillot', 'Prenom' => 'Laure'],
  ],
  'Cinquieme' => [
    ['Nom' => 'Bourdon', 'Prenom' => 'Didier'],
    ['Nom' => 'Legitimus', 'Prenom' => 'Pascal'],
    ['Nom' => 'Campan', 'Prenom' => 'Bernard'],
    ['Nom' => 'Fois', 'Prenom' => 'Marina'],
    ['Nom' => 'Floresti', 'Prenom' => 'Florence'],
  ],
  'Quatrieme' => [
    ['Nom' => 'Willis', 'Prenom' => 'Bruce'],
    ['Nom' => 'Lawrence', 'Prenom' => 'Laurence'],
    ['Nom' => 'Johannson', 'Prenom' => 'Scarlett'],
    ['Nom' => 'Jackson', 'Prenom' => 'Samuel'],
  ],
];

echo '10.Les eleves du college : <br>';

function afficher_liste_eleve ($ecole) {
  foreach ($ecole as $classe => $eleves) {
    echo '<br/>' . $classe . ' : <br/><br/>';
    
    foreach ($eleves as $eleve) {
      echo $eleve['Nom'] .' : '. $eleve['Prenom'] . '<br/>';
    }
  }
}
afficher_liste_eleve($college);

echo '<br><br>';

//----------------------------------------
//Reprenez le tableau ci-dessus, ajoutez des éléves pour la classe de troisième et réaffichez tout
echo '11.Les eleves du college (avec les nouveaux arrivants): <br>';

$college['Troisième'] = [
  ['Nom' => 'Patate', 'Prenom' => 'Max'],
  ['Nom' => 'Patateux', 'Prenom' => 'Elsa'],
  ['Nom' => 'Dupo', 'Prenom' => 'Philip'],
  ['Nom' => 'Voly', 'Prenom' => 'Samuel'],
];

afficher_liste_eleve($college);

echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque

$videotheque = array(
  array(
    'nom' => 'Independance day',
    'date' => 1996,
    'realisateur' => 'Roland Emmerich',
    'acteurs' => array(
      'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
    ),
  ),
  array(
    'nom' => 'Bienvenue a Gattaca',
    'date' => 1998,
    'realisateur' => 'Andrew Niccol',
    'acteurs' => array(
      'Ethan Hawke', 'Uma Thurman', 'Jude Law',
    ),
  ),
  array(
    'nom' => 'Forrest Gump',
    'date' => 1994,
    'realisateur' => 'Robert Zemeckis',
    'acteurs' => array(
      	'Tom Hanks', 'Gary Sinise',
    ),
  ),
  array(
    'nom' => '12 hommes en colere',
    'date' => 1957,
    'realisateur' => 'Sidney Lumet',
    'acteurs' => array(
      	'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
    ),
  ),
);

echo '12.Mes films : <br>';

function afficher_info_videotheque ($videotheque) {
  foreach ($videotheque as $film) {
    foreach ($film as $propriete => $valeur) {
      echo "$propriete : ";
      if (is_array($valeur) == false) {
        echo "$valeur <br/>";
      } else {
        for ( $i = 0 ; $i < count($valeur) ; $i++ ) {
          echo "$valeur[$i], ";
        }
        echo "<br/>";
      }
    }
    echo "<br/>";
  }
}

$mon_film_1 =  [
  'nom' => 'Wall-e',
  'date' => 2007,
  'realisateur' => 'Henry Force',
  'acteurs' => [
      'Gilles Fonda','Bill Balsam','Edward Fiedler','Anna J. Cobb',
  ],
];

$mon_film_2 =  [
  'nom' => 'Billy',
  'date' => 2007,
  'realisateur' => 'Henry Force',
  'acteurs' => [
      'Gilles Fonda','Bill Balsam','Edward Fiedler','Anna J. Cobb',
  ],
];

$mon_film_3 =  [
  'nom' => 'Le film',
  'date' => 2007,
  'realisateur' => 'Henry Force',
  'acteurs' => [
      'Gilles Fonda','Bill Balsam','Edward Fiedler','Anna J. Cobb',
  ],
];
array_push($videotheque, $mon_film_1, $mon_film_2, $mon_film_3);

afficher_info_videotheque($videotheque);
echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';



afficher_info_videotheque($videotheque);
echo '<br><br>';