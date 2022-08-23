
<?php
include('bdd_config.php');
$req=$pdo->query('SELECT * FROM commentaires');
$commentaires=$req->fetchAll(); 

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Cette page Vous parle du sport le plus populaire au Congo">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sport en République Démoncratique du congo</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
	<header class="navbar navbar-light bg-primary">
		<nav>
			<ul>
				<li><a href="index.html">premiere page</a></li>
				<li><a href="avecCss.html">deuxieme page</a></li>
			</ul>
		</nav>
	</header>
    <div class="containner">
        <span class="error bg-danger">
            <?= isset($_GET['erreur'])?$_GET['erreur']:''; ?>
        </span>
    </div>
	<div class="row">
	<h1 >Sport en République Démocratique du congo</h1>
	
	<p>
		<span class="f">L</span>a République Démocratique du congo comme plusieurs autres pays Organise des activités sportives , Parmis les activites organisés nous pouvons en citer quelques unes qui sont:
	</p>
	<ol>
		<li>Le FootBall</li>
		<li>Le BasketBall</li>
		<li>Le Karaté</li>
	</ol>
	</div>
	<div class="container row">
	<div class="col-lg-8">
	<h2>Le FootBall</h2>
	<p>
		En République Démocratique du congo on a plusieurs club de football ainsi qu'une équipe nationale
	</p>
		<h3>L'équipe nationale</h3>
		<p>L'équipe de république démocratique du Congo de football, surprenommée les Léopards (appelés les Simba entre 1997 et 2006), représente de joueurs congolais sous l'égide de la FECOFA. De 1971 à 1997, l'équipe portait le prenom d'équipe du Zaïre de football2.</p> 

		<p>Le plus haut classement du pays au classement FIFA est la 28e place . En tant que Zaïre, ils ont été la première équipe d' Afrique subsaharienne à se qualifier pour la Coupe du Monde de la FIFA et ont remporté deux fois la Coupe d'Afrique des Nations3 en 1968 et en 1974. </p>
	</div>
		<div class="card col-lg-4">
			<div class="card-title"> Ci-dessous nous pouvons voir les photos de l'equipe:</div>
			<div>
			<img src="https://footrdc.com/wp-content/uploads/2019/11/Leopards-RDC-vs-Gabon.jpeg" alt="">
			<img src="https://habarirdc.net/wp-content/uploads/2019/06/Equipe-Leopards-RDC_Foot-RDC-768x502.jpg" alt="">
		</div>
		</div>
	<div class="tableau">
		<p>Et nous pouvons finir en donnant le tableau qui montre les Classements FIFA de l'équipe de République démocratique du Congo en Coupe d'Afrique des nations</p>
<div class="table-responsive">		
<table class="table table-bordered">
<tbody><tr>
	<th scope="col">Année
	</th>
	<th scope="col">1999
	</th>
	<th scope="col">2000
	</th>
	<th scope="col">2001
	</th>
	<th scope="col">2002
	</th>
	<th scope="col">2003
	</th>
	<th scope="col">2004
	</th>
	<th scope="col">2005
	</th>
	<th scope="col">2006
	</th>
	<th scope="col">2007
	</th>
	<th scope="col">2008
	</th>
	<th scope="col">2009
	</th>
	<th scope="col">2010
	</th>
	<th scope="col">2011
	</th>
	<th scope="col">2012
	</th>
	<th scope="col">2013
	</th>
	<th scope="col">2014
	</th>
	<th scope="col">2015
	</th>
	<th scope="col">2016
	</th>
	<th scope="col">2017
	</th>
	<th scope="col">2018
	</th>
	<th scope="col">2019
	</th>
	<th scope="col">2020
	</th>
	<th scope="col">2021
	</th></tr>
<tr>
	<th scope="row" style="text-align:center">Classement mondial
	</th>
	<td>59</td>
	<td>70</td>
	<td>77</td>
	<td>65</td>
	<td>56</td>
	<td>78</td>
	<td>77</td>
	<td>66</td>
	<td>74</td>
	<td>91</td>
	<td>107</td>
	<td>130</td>
	<td>125</td>
	<td>107</td>
	<td>82</td>
	<td>56</td>
	<td>60</td>
	<td>48</td>
	<td>39</td>
	<td>49</td>
	<td>56</td>
	<td>60</td>
	<td>67
	</td>
</tr></tbody></table>
</div>
</div>
<div class="video">
	
<p>En bonus. Voici une vidéo montrant l'un des matchs du Léopard</p>
<video src="episode.mp4" class="embed-responsive-item" controls>
	
</video>
<p>
	Pour plus des details sur ce sujets et pour les references vous pouvez consulter les liens ci dessous:
</p>
<nav>
	<ul>
		<li><a href="https://fr.wikipedia.org/wiki/%C3%89quipe_de_R%C3%A9publique_d%C3%A9mocratique_du_Congo_de_football">https://fr.wikipedia.org/wiki/%C3%89quipe_de_R%C3%A9publique_d%C3%A9mocratique_du_Congo_de_football</a></li>
		<li><a href="https://habarirdc.net/deuxieme-defaite-can-egypte-avenir-leopards-congolais-rdc/">https://habarirdc.net/deuxieme-defaite-can-egypte-avenir-leopards-congolais-rdc</a></li>
		<li><a href="https://www.youtube.com/watch?v=8ZZZEAEGIkY">https://www.youtube.com/watch?v=8ZZZEAEGIkY</a></li>
	</ul>
</nav>
</div class="containner comment-box">
    <div class="row">
        <div class=" col-lg-4">
            <span class="text-bold h2">Commentez cette article</span>
        </div>
        <div class="col-lg-4">

            <form action="/ajout_commentaire.php" method="post" class="form">
                <div class="form-group">
                    <label for="prenom">Tapez Votre prenom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nom">Votre nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Votre e-mail</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="date">Votre Date de naissance</label>
                    <input type="date" name="date" id="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="commentaire">Votre commentaire</label>
                    <textarea name="commentaire" id="commentaire" class="form-control"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" value="Envoyer" class="btn btn-success form-control">
                </div>
            </form>
        </div>
    </div>
    <div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h4>Derniers Commentaires</h4>
			<ul class="timeline">
				<?php var_dump($commentaires); ?>
				<li>
					<span></span>
					<p></p>
				</li>
			</ul>
		</div>
	</div>
</div>

</div>

<script type="application/ld+json">
	{
		"author":"MIATELANA AMOUR-JULJA",
	}
</script>

</body>
</html>