<?php
require __DIR__ . '/vendor/autoload.php';

// Instancia de la clase BMDM.
$bmdm = new \dautkom\bmdm\BMDM();

// Lista de nombres a comparar.
$nombres1 = ["Stephen", "Steven", "Stefan", "Stephan", "Steffen"];
$nombres2 = ["Michael", "Mikhail", "Michel", "Miguel", "Micheal", "Mikel", "Mihai", "Michał"];
$nombres3 = ["Catherine", "Katherine", "Kathryn", "Cathryn", "Katarina", "Ekaterina", "Caterina"];
$nombres4 = ["Elizabeth", "Elisabeth", "Elisabet", "Elisavet", "Elizaveta", "Elżbieta", "Isabella", "Elsbeth"];
$nombres5 = ["William", "Willem", "Guillaume", "Guglielmo", "Guillermo", "Vilhelm", "Viliam"];

$nombres = $nombres4;

// Mostrar la lista de nombres.
echo "Lista de nombres a comparar:\n";
echo "<p>";
foreach ($nombres as $nombre) {
    echo " - " . $nombre ;
}
echo "</p>";
echo "<br>";

// Generar pares de nombres y compararlos.
for ($i = 0; $i < count($nombres); $i++) {
    for ($j = $i + 1; $j < count($nombres); $j++) {
        $nombre1 = $nombres[$i];
        $nombre2 = $nombres[$j];

        // Procesar los nombres con el algoritmo Beider-Morse y obtener las claves fonéticas.
        $output1 = $bmdm->set($nombre1)->soundex();
        $output2 = $bmdm->set($nombre2)->soundex();

        $clave1 = $output1['numeric'][0][0];
        $clave2 = $output2['numeric'][0][0];

        echo "<p>Clave de '".$nombre1."':" . $clave1 ."</p>";
        echo "<p>Clave de '".$nombre2."':" . $clave2 ."</p>";

        // Comparar las claves fonéticas.
        echo "<p>";
        if ($clave1 == $clave2) {
            echo "Los nombres '".$nombre1."' y '".$nombre2."' son fonéticamente similares.\n";
        } else {
            echo "Los nombres '".$nombre1."' y '".$nombre2."' no son fonéticamente similares.\n";
        }
        echo "</p>";
        echo "<br>";
    }
}
?>
