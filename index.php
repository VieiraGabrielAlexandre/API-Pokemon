<?php
    $url = "https://www.canalti.com.br/api/pokemons.json";
    $consumir = curl_init($url);
    curl_setopt($consumir,CURLOPT_RETURNTRANSFER, true);
    $exibe = json_decode(curl_exec($consumir));
?>
<html>
        <head>
            <title>API - Pokemons (Old era)</title>
        </head>
        <body>
            <?php
                foreach($exibe->pokemon as $pokemon){
                    echo "<br>Num: ".$pokemon->num."<h4>".$pokemon->name."</h4></li>" ;
                    echo "<br>";
                    if (isset($pokemon->next_evolution)){
                        foreach($pokemon->next_evolution as $evo){
                            echo $evo->name."<br>";
                       }
                    }
                }
?>''