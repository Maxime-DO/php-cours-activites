<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des éléves qui sont présent dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php
       foreach ($students as $name) {
         echo "$name, ";  
       }
       ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>
     
       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day"><?php 
       $days = range(1, 31, 1);
       $months = range(1, 12, 1);
       $years = range(2019, 1900, 1);

       for ( $i = 0 ; $i < count($days) ; $i++ ) {
         echo "<option>$days[$i]</option>";
       }
       ?></select>
       <label for="month">Month</label>
       <select  name="month"><?php
       for ( $i = 0 ; $i < count($months) ; $i++ ) {
         echo "<option>$months[$i]</option>";
       }
       ?></select>
       <label for="year">Year</label>
       <select  name="year"><?php 
       for ( $i = 0 ; $i < count($years) ; $i++ ) {
        echo "<option>$years[$i]</option>";
       }
       ?></select>
     </form>
     <hr>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->
     <!-- Instruction : Afficher ce bloc dans les autres cas -->
     <?php
     switch ( $_REQUEST['sexe'] ) {
       case 'fille' :
        echo "<p>Je suis une fille</p>";
        break;
       case 'garçon' :
        echo "<p>Je suis un garçon</p>";
        break;
       default :
       echo "<p>Je suis indéfini</p>";
     }
     ?>
  </body>
</html>
