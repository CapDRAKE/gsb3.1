<html>
<body>
<h3>Connexion à l'espace sécurisé Responsable</h3>
<div>
<?php 
	$this->load->helper('form');
	echo form_open("administrer_r");
?>

<p>Login :</p>
<?php echo form_input("identifiant");?>
<p>Mot de passe :</p>
<?php echo form_password("password");
	echo form_submit("login", "Connexion");
	echo form_close('</div>');
?>
</body>

</html>