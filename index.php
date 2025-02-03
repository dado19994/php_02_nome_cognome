<?php
//Esercizio 1
// Array degli utenti
$users = [
    ['name' => 'Davide', 'surname' => 'Dignazio', 'gender' => 'NB'],
    ['name' => 'Luca', 'surname' => 'Bianchi', 'gender' => 'M'],
    ['name' => 'Sara', 'surname' => 'Rossi', 'gender' => 'F'],
    ['name' => 'Alex', 'surname' => 'Verdi', 'gender' => 'NB']
  ];
  
  // Ciclo per ogni utente e stampa del saluto in base al genere
  foreach ($users as $user) {
      $name = $user['name'];
      $surname = $user['surname'];
      $gender = $user['gender'];
  
      // Determina il saluto in base al genere
      if ($gender == 'M') {
          echo "Buongiorno Sig. $name $surname .\n";
      } elseif ($gender == 'F') {
          echo "Buongiorno Sig.ra $name $surname .\n";
      } else {
          echo "Buongiorno $name $surname .\n";
      }
  }
?>