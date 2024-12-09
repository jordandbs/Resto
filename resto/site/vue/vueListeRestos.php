<h1>Liste des restaurants</h1>
<?php
foreach($lesRestos as $unResto){
    $unePhoto = getLaPhotosByIdR($unResto->idR);
    $typescuisine = getLesTypesCuisinebyIdR($unResto->idR);
echo "<div class='card'>
    <div class='photoCard'>
    <img src='photos/$unePhoto->cheminP'>
    </div>
    $unResto->nomR
    <br>
    $unResto->numAdrR
    $unResto->voieAdrR
    <br>
    $unResto->cpR
    $unResto->villeR
    <div class='tagCard'>
    <ul id='tagFood'>";
    foreach($typescuisine as $untypecuisine){
    echo "<li class='tag'><span class='tag'># $untypecuisine->libelleTC</span></li>";
    }
    echo "</ul>
    </div>
    </div>";
}
?>