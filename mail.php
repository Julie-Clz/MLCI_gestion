<?php
if (isset($_POST['texte'])) {
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    // $entete .= 'From: contact@mlci-gestion.fr' . "\r\n";
    $entete .= 'From: julie_clz@hotmail.fr' . "\r\n";
    $entete .= 'Reply-to: ' . $_POST['email'];
    
    if ($_POST['checkboxTel'] === 'on' ) {
        $contact = '<p><b>Préfère être recontacté par téléphone </p>'
    }
    if ($_POST['checkboxEmail'] === 'on' ) {
        $contact = '<p><b>Préfère être recontacté par email </p>'
    }
    
    if ($_POST['devisCompta'] === 'on' ) {
        $devis = '<p><b>Devis Comptabilité </p>'
    }
    if ($_POST['devisVente'] === 'on' ) {
        $devis = '<p><b>Devis Suivi des ventes </p>'
    }
    if ($_POST['devisGestion'] === 'on' ) {
        $devis = '<p><b>Devis Gestion administrative </p>'
    }
    
    $message = '<h2>Demande de devis depuis mlci-gestion.fr</h2>
    <p><b>Nom : </b>' . $_POST['nom'] . '<br>
    <p><b>Prénom : </b>' . $_POST['prénom'] . '<br>
    <p><b>Email : </b>' . $_POST['email'] . '<br>
    <p><b>Tél : </b>' . $_POST['téléphone'] . '<br>
    ' $contact '
    <!-- <p><b>Urgence : </b>' . $_POST['checkbox'] . '<br> -->
    <p><b>Informations entreprise : </b>' . $_POST['entreprise'] . '<br>
    <p><b>Objet : </b>' $devis '<br>
    <b>Message : </b>' . htmlspecialchars($_POST['texte']) . '</p>';
    
    // $retour = mail('julie_clz@hotmail.fr', 'Demande de devis', $message, $entete);
    $retour = mail('contact@mlci-gestion.fr', 'Demande de devis', $message, $entete);
    if($retour)
    echo '<script>alert("Merci, votre demande a bien été Merci, votre demande a bien été envoyée. Nous reviendrons vers vous le plus vite possible.")</script>';
}
?>