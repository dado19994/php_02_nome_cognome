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


//Esercizio 2
// Array di numeri a scelta
$numeri = [4, 7, 12, 9, 8, 15, 22, 3, 6];

// Variabili per la somma e il conteggio 
$somma_pari = 0;
$conteggio_pari = 0;

// Ciclo per trovare i numeri pari e calcolare la somma
foreach ($numeri as $numero) {
    if ($numero % 2 == 0) {  // Controllo se il numero è pari
        $somma_pari += $numero;
        $conteggio_pari++;
    }
}

// Calcolo della media dei numeri pari
if ($conteggio_pari > 0) {
    $media_pari = $somma_pari / $conteggio_pari;
    echo "La media dei numeri pari è: $media_pari";
} else {
    echo "Non ci sono numeri pari nell'array.";
}

//Esercizio 3
// Ciclo da 1 a 100
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        // Multiplo sia di 3 che di 5
        echo "HACKADEMY\n";
    } elseif ($i % 3 == 0) {
        // Multiplo solo di 3
        echo "PHP\n";
    } elseif ($i % 5 == 0) {
        // Multiplo solo di 5
        echo "JAVASCRIPT\n";
    } else {
        // Numero normale
        echo "$i\n";
    }
}
?>

