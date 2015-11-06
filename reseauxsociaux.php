<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet"href="reseauxsociaux.css">
	<title>Trombinoscope Simplon Narbonne</title>
</head>
<body>

	<h3>Formulaire à compléter afin d'ajouter des informations supplémentaires
	vous concernant sur le trombinoscope.</br>Exemple: adresse mail,pseudo skype,facbook....</h3>

	<p> <?php echo strftime('%A %d %B %Y, %H:%M');?> </p>
	</br></br></br>
	  <form action="reseauxsociauxbdd.php" method="post">

	    <label for="nom">Votre nom est:</label>
	   <input type="text" name="nom" id="nom"/>
	</br></br>
	   <label for="prenom">Votre prenom est:</label>
	  <input type="text" name="prenom" id="prenom"/>
	</br></br>

	  <label for "courriel">Courriel:</label>
	  <input type="courriel" name="courriel" id="courriel" />
</br></br>
		<label for "liencv">votre cv est:</label>
		<input type="liencv" name="liencv" id="liencv" />
</br></br>
		<label for "lien_photo">votre photo est:</label>
	  <input type="lien_photo" name="lien_photo" id="lien_photo" />
	</br></br>
			<label for "date_de_naissance">date de naissance:</label>
		  <input type="date_de_naissance" name="date_de_naissance" id="date_de_naissance" placeholder="0000/00/00"/>
		</br></br>
				<label for "numero">numero:</label>
			  <input type="numero" name="numero" id="numero" />



	</br></br></br></br>



	<div class="button">
	        <button type="submit">Envoyer votre formulaire</button>
	    </div>


</form>
</body>
</html>
