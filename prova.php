<?php
$base = __DIR__;
require_once("$base/model/autor.class.php");
$autor = new Autor();

// $res = $autor->update(array("ID_AUT"=>6550, "nom_aut"=>"TOMEU CAMPANER","fk_nacionalitat"=>"ESPANYOLA"));
//  if (!$res->correcta) {
//     echo "Error actualitzant";  // Error per l'usuari
//     error_log($res->missatge,3,"$base/log/errors.log");  // Error per noltros
//  }   







// $res = $autor->delete(6550);

// if (!$res->correcta) {
//     echo "Error eliminant";  // Error per l'usuari
//     error_log($res->missatge, 3, "$base/log/errors.log");  // Error per noltros
// }








// $res = $autor->get(6549);
// echo('<pre>');
// print_r($res);
// echo('<pre>');

// foreach ($res->dades as $row) {
//     echo $row['id_aut'] . "-" . $row['nom_aut'] . " " . $row["fk_nacionalitat"] . "<br>";
// }
// if (!$res->correcta) {
//     echo "Error a la consulta";  // Error per l'usuari
//     error_log($res->missatge, 3, "$base/log/errors.log");  // Error per noltros
// }




$res = $autor->filtra('ID_AUT = 10', 'ID_AUT ASC', 0, 10);
foreach ($res->dades as $row) {
    echo $row['id_aut'] . "-" . $row['nom_aut'] . " " . $row["fk_nacionalitat"] . "<br>";
}




// $res = $autor->getAll();
// if ($res->correcta) {
//     foreach ($res->dades as $row) {
//         echo $row['id_aut'] . "-" . $row['nom_aut'] . " " . $row["fk_nacionalitat"] . "<br>";
//     }
// } else {
//     echo $res->missatge;
// }

//  $autor->insert(array("nom_aut"=>"Tomeu Campaner","fk_nacionalitat"=>"ESPANYOLA"));
//  if (!$res->correcta) {
//     echo "Error insertant";  // Error per l'usuari
//     error_log($res->missatge,3,"$base/log/errors.log");  // Error per noltros
//  }   

