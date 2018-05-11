<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$tel = $_POST['tel'];
$email = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL); //On accepte que les chaines étant des adresses valides = proctection contre le spam
$mess = $_POST['message'];

echo htmlspecialchars($nom);
echo htmlspecialchars($prenom);
echo htmlspecialchars($tel);
echo htmlspecialchars($email);
echo htmlspecialchars($mess);

ini_set("SMTP", "smtp.geo2r.com");

$mail = "contact@geo2r.com"; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration du message au format HTML.
$message_html = "<html><head></head><body><b>Demande de contact</b> : $nom $prenom ($email | $tel)<br/>
                  <b>Message :</b> $mess</body></html>";
//==========


//=====Création de la boundary.
$boundary = "-----=".md5(rand());
$boundary_alt = "-----=".md5(rand());
//==========

//=====Définition du sujet.
$sujet = "Formulaire de contact Geo2R.com";
//=========

//=====Création du header de l'e-mail.
$header = "From: \"$nom $prenom\" <$email>".$passage_ligne;
$header.= "Reply-to: \"$nom $prenom\" <$email>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========

//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML.
$message.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========

//=====On ferme la boundary.
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========

//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);
//==========
//=====Redirection
header("location:../../contact");
//==========
?>
