<?php
// require_once('connexion.php');
// $connexion=connect_bd();
// $sql="SELECT * from CARNET";
// $data=$connexion->query($sql);
// $contacts=array();

// //while($pers=$data->fetch(PDO::FETCH_OBJ)){
//   while($pers=$data->fetch(PDO::FETCH_ASSOC)){
//     $contacts[]=$pers;
//   }
// //print_r($contacts);
// $json = json_encode($contacts, JSON_PRETTY_PRINT);
// echo 'json :<br>'.PHP_EOL;
// print($json);


// require_once('../data/travelcorp.json');
// $connexion = connect_bd();
// $continents = "SELECT * from continents";
// $data = $connexion->query($continents);
// $contacts = $data->fetchAll(PDO::FETCH_ASSOC);
// $json = json_encode($contacts, JSON_PRETTY_PRINT);
// print($json);

$json = file_get_contents('../data/continents.json');
$obj = json_decode($json, true);
