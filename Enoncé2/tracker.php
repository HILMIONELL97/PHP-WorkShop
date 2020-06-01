<?php
    $info=[
        "name" => "HILMI ONELL",
        "weightKg" => 82,
        "heightCm" =>178
    ];
    $heightM = $info["heightCm"]*0.01;
    $heightCar =$heightM*$heightM;


    echo "Mr.Mme ".$info["name"]." le résultats de l'IMC est le suivant:\n";
    echo "<br>";
    echo "la hauteur en mètres: $heightM \n"; 
    echo "<br>";
    echo "la hauteur en mètres au carré: $heightCar \n";
    echo "<br>";
    echo "Donc l' IMC est: ". $info["weightKg"]/$heightCar
    
?>