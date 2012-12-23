<?php
$expediteur = $_POST['email'];
$reponse = $expediteur;	

if(empty($_POST['spam'])  && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['tel'])  && eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_POST['email']))
{
	$codehtml ='
	<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
	<title>Restaurant Absinthe Cafe - Contact</title>
	<style>
	body {
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-size: 11px;
		color: #fff;
		background: #2e1b30;
		margin: 10px auto 10px auto;	
	}
	h1 {
		font-size: 14px;
		color: #fff;
	}
	
	a {
		color:#b10668;
	}
	
	hr {
		border: none;
		height: 1px;
		line-height: 1px;
		background: #fff;	
		margin-bottom: 10px;
		padding: 0 0 0 0;
	}
	td {
		font-size: 11px;
		line-height: 16px;
	}
	table {
		background: #433245;
		width: 600px;
		padding-bottom: 100px;
	}
	</style>
	</head>
	<body>
   
	<center>
	  <table align=\"center\" border=\"0\" cellpadding=\"2\" cellspacing=\"5\">
	    <tr>
	      <td colspan="2" align="right"> <img src="http://www.restaurant-absinthe-cafe.fr/images/googleMap-icon.png">
	        </td>
        </tr>
	    <tr>
	      <td colspan=\"2\"><br />
	        <h1>Coordonn&eacute;es</h1>
	        <hr /></td>
        </tr>
	    <tr>
	      <td width=\"200\"><strong>Nom</strong></td>
	      <td>'.$_POST['nom'].'</td>
        </tr>
	    <tr>
	      <td><strong>Pr&eacute;nom</strong></td>
	      <td>'.$_POST['prenom'].'</td>
        </tr>
	    <tr>
	      <td><strong>E-mail</strong></td>
	      <td><a href="mailto:'.$_POST['email'].'">'.$_POST['email'].'</a></td>
        </tr>
	    <tr>
	      <td><strong>T&eacute;l&eacute;phone</strong></td>
	      <td>'.$_POST['tel'].'</td>
        </tr>
	   
	    <tr>
	      <td colspan="2"><br /><h1>Message</h1>
	      <hr /></td>
         
        </tr>
        	    <tr>
	      <td colspan="2">'.$_POST['message'].'
	      </td>
         
        </tr>
      </table>
	</center>
	</body>
	</html>
	';
	
	mail("contact@restaurant-absinthe-cafe.fr", "Restaurant Absinthe Cafe - Contact du site Internet", $codehtml, "From: $expediteur\r\nReply-To: $reponse\r\nContent-Type: text/html; charset=\"iso-8859-1\"\r\n");
	echo "ok";
}
else {
	echo "L'e-mail n'a pas été envoyé !";
}
?>