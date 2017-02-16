<?php
include('config.php')
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Espace membre</title>
    </head>
    <body>
	<div id="menu">
		<ul id="onglets">
		<li class="active"><a href="index.html"> Accueil </a></li>
		<li><a href="Forums.html"> Forums </a></li>
		<li><a href="Livre_or.html"> Livre d'or </a></li>
		<li><a href="Equipe.html"> L'équipe </a></li>
		<li><a href="Inscription.html"> S'inscrire </a></li>
		<li><a href="Connexion.html"> Se connecter </a></li>
	</ul>
		</div>

    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Espace Membre" /></a>
	    </div>
        <div class="content">
<?php
//On affiche un message de bienvenue, si lutilisateur est connecte, on affiche son pseudo
?>
Bonjour<?php if(isset($_SESSION['username'])){echo ' '.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');} ?>,<br />
Bienvenue sur notre site.<br />
Vous pouvez <a href="users.php">voir la liste des utilisateurs</a>.<br /><br />
<?php
//Si lutilisateur est connecte, on lui donne un lien pour modifier ses informations, pour voir ses messages et un pour se deconnecter
if(isset($_SESSION['username']))
{
?>
<div id="menu">
	<ul id="onglets">
	<li ><a href="edit_infos.php">Modifier mes informations personnelles</a><br /></li>
	<li ><a href="connexion.php">Se d&eacute;connecter</a></li>
	</ul>
	</div>
	<a href="#" class="float">
<i class="fa fa-plus my-float"></i>
</a>
<?php
}
else
{
//Sinon, on lui donne un lien pour sinscrire et un autre pour se connecter
?>
<div id="menu">
	<ul id="onglets">
   <li ><a href="sign_up.php">Inscription</a><br /></li>
   <li ><a href="connexion.php" class="button">Se connecter</a></li>
	</ul>
</div>
<a href="#" class="float">
<i class="fa fa-plus my-float"></i>
</a>

<?php
}
?>
		</div>
		<div class="foot"><a href="http://www.supportduweb.com/">Support du Web</a></div>
	</body>
</html>