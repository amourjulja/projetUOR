<?php
include('bdd_config.php');
function isEmail($string){
    return preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$string)?true:false;
}
    if(isset($_POST)){
        if(isset($_POST['prenom']) && !empty($_POST['prenom'])){
            if(isset($_POST['nom']) && !empty($_POST['nom'])){
                if(isset($_POST['email']) && !empty($_POST['email']) && isEmail($_POST['email']) ){
                    //vérificqtion du co,,entqire
                    if(isset($_POST['commentaire']) && !empty($_POST['commentaire'])){
                        //j'organise les datas verifiées pour la RQ preparée
                        $donnees=array(
                            'prenom'=>htmlspecialchars($_POST['prenom']),
                            'nom'=>htmlspecialchars($_POST['nom']),
                            'email'=>$_POST['email'],
                            'date_naissance'=>$_POST['date'],
                            'commentaire'=>htmlspecialchars($_POST['commentaire'])
                        );
                        //on execute une requete preparée pour savegarder les data
                        $request=$pdo->prepare('INSERT INTO commentaires(prenom,nom,email,date_naissance,commentaire) VALUES(:prenom,:nom,:email,:date_naissance,:commentaire)');
                        $request->execute($donnees);
                        
                    }
                    else{
                        $erreur="Vous devez ecrire quelques choses en commentqire";
                    }
                }else{

                    $erreur="le champ e-mail ne doit pas être vide";
                }
            }else{
                $erreur="le champ nom ne doit pas être vide";
            }
        }
        else{
            $erreur="le champ prenom ne doit pas être vide";
        }
    }
    //je redirige vers dynamique.php
    if(isset($erreur)){
        header('location:dynamique.php?erreur='.$erreur);
        exit();
    }else{
        header('location:dynamique.php');
        exit();
    }

?>