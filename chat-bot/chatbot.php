<?php
//on recupere les donnes
$data=file_get_contents('donnees.json');
//on le convertit en tableau php
$data=json_decode($data,true);

//on recupere la question de l'utilisateur
if(isset($_POST['question']) && !empty($_POST['question'])){
    $q=strtolower($_POST['question']);
 
    if(isset($data[$q])){
        $res=array(
            'reponse'=>$data[$q]
        );
    }
    else{
        $res=array(
            'reponse'=>'Merci mais je ne comprend pas ce que vous dites'
        );
    }

}
header('Content-Type:application/json');
echo isset($res)?json_encode($res):'{"erreur":"aucune donnee envoyee"}';