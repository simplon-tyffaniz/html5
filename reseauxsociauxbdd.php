


<?php
//données formulaire
echo "Formulaire transmis<br>";


try {

$bdd = new PDO('mysql:host=localhost;dbname=trombinoscope;charset=utf8', 'root', 'sonmotdepasse');

}

catch (Exception $e)

{
  die('Erreur :'.$e->getMessage());
}
//insert
$demande = $bdd->prepare('INSERT INTO simploniens(nom,prenom,courriel,liencv,lien_photo,date_de_naissance,numero)
VALUES (:nom, :prenom, :courriel, :liencv, :lien_photo, :date_de_naissance, :numero)');
//insert into simploniens(valeurs champs bdd/ VALUES = valeur champ du formulaire)
$demande->execute(array(

'nom' =>$_POST['nom'],
'prenom' =>$_POST['prenom'],
'courriel' =>$_POST['courriel'],
'liencv' =>$_POST['liencv'],
'lien_photo' =>$_POST['lien_photo'],
'date_de_naissance' =>$_POST['date_de_naissance'],
'numero' =>$_POST['numero']
));

//select affiche données de la table de la bdd a mettre dans un fichier a part pour que la personne qui rempli le formulaire
// ne voit pas ce qui est dans la bdd
$reponse = $bdd->query('SELECT * FROM simploniens');//ORDER By nom Permet de classer ici par exemple par non

while ($donnees = $reponse->fetch()) //fetch= commande qui permet d'afficher ligne par ligne
{
  echo $donnees['nom'].'<br>'.$donnees['prenom'].'<br>';
}

?>
<?php $reponse->closeCursor();?>
