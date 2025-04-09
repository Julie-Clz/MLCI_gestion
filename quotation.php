<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MLCI - gestion administrative</title>
  <link rel="icon" href="images/favicon.ico" >
  <meta name="description" content="Aide les entreprises à gérer leurs tâches administratives et comptables pour leur faire gagner du temps et de l'argent.">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-NKW65DXM6J"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-NKW65DXM6J');
  </script>
  <!-- Hotjar Tracking Code for http://www.mlcigestion.com/ -->
  <script>
    (function(h,o,t,j,a,r){
      h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
      h._hjSettings={hjid:2109938,hjsv:6};
      a=o.getElementsByTagName('head')[0];
      r=o.createElement('script');r.async=1;
      r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
      a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  </script>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/navbar.css"/>
  <link rel="stylesheet" href="css/footer.css"/>
  <link rel="stylesheet" href="css/quotation.css">
  <!-- Import Google fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700|Work+Sans:400,700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap">
  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script> 
    $(function(){
      $("#includedNavbar").load("navbar.html");
      $("#includedFooter").load("footer.html"); 
    });
  </script> 
</head>
<body>
  <div id="includedNavbar"></div>
  
  <div class="container">
    <div class="pagetitle"><h1><strong>Demandez votre devis</strong></h1></div>
    <br>
    
    <div class="contactform">
      <form method="post">
        <div class="d-flex flex-row justify-content-between">
          <div class="mb-3">
            <label for="first_name" class="form-label">Prénom</label>
            <input type="name" class="form-control" name="prénom" id="first_name"  placeholder="Marie" aria-describedby="first_nameHelp">
          </div>
          <div class="mb-3">
            <label for="last_name" class="form-label">Nom</label>
            <input type="name" class="form-control" name="nom" id="last_name" placeholder="Dupond" aria-describedby="last_nameHelp">
          </div>
        </div>
        <!-- <div class="mb-3">
          <label for="address" class="form-label">Addresse</label>
          <input type="address" class="form-control" id="address">
        </div> -->
        <div class="d-flex flex-row justify-content-between">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="mdupond@gmail.com" aria-describedby="emailHelp">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          </div>
          <div class="mb-3">
            <label for="telefon" class="form-label">Téléphone</label>
            <input type="tel" class="form-control" name="téléphone" id="telefon" placeholder="0610101010" aria-describedby="telefonHelp">
          </div>
        </div>
        <br>
        <div class="mb">
          <label for="contact" class="form-label">Je préfére être contacté par:</label>
        </div>
        <div class="d-flex flex-row justify-content-around">
          <div class="form-check">
            <input class="form-check-input" name="checkboxTel" type="checkbox" value="" id="flexChecktel">
            <label class="form-check-label" for="flexChecktel">
              Téléphone
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="checkboxEmail" type="checkbox" value="" id="flexCheckEmail">
            <label class="form-check-label" for="flexCheckEmail">
              Email
            </label>
          </div>
        </div>
        <br>
        <div class="mb-3">
          <label for="text" class="form-label">Votre entreprise</label>
          <textarea type="text" class="form-control" name="entreprise" id="text" placeholder="Statut, nombre de salariés, domaine d'activité etc." aria-describedby="textHelp"></textarea>
        </div>
        <!-- <br> -->
        <div class="mb">
          <label for="objet" class="form-label">Objet du devis</label>
        </div>
        <div class="d-flex flex-row justify-content-around">
          <div class="btn-group-vertical" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-outline-light" for="btnradio1">Comptabilité</label>
            
            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-light" for="btnradio2">Suivi des ventes</label>
            
            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
            <label class="btn btn-outline-light" for="btnradio3">Gestion administrative</label>
          </div>
        </div>
        <br>
        
        <div class="mb-3">
          <label for="text" class="form-label">Votre message</label>
          <textarea type="text" class="form-control" name="texte" id="text" placeholder="Votre message" aria-describedby="textHelp"></textarea>
        </div>
        
        <div class="d-flex flex-row justify-content-around">
          <button type="submit" class="btn-light" value="envoyer">Envoyer</button>
        </div>
       <!-- SCRIPT PHP MAIL -->
       <!-- <?php
       require("mail.php");
       ?> -->

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
    
    $retour = mail('julie_clz@hotmail.fr', 'Demande de devis', $message, $entete);
    // $retour = mail('contact@mlci-gestion.fr', 'Demande de devis', $message, $entete);
    if($retour)
    echo '<script>alert("Merci, votre demande a bien été Merci, votre demande a bien été envoyée. Nous reviendrons vers vous le plus vite possible.")</script>';
}
?>
        
      </form>  
      
    </div>
    
  </div>
  
  <div id="includedFooter"></div>
</body>
</html>