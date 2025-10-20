<?php 
  require_once "vendor/autoload.php";
  require_once "verifyData.php";
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  $debug = true ;

  // Headers pour réponse JSON
  header('Content-Type: application/json');
  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Content-Type');

  // Fonction pour renvoyer une réponse JSON
  function sendJsonResponse($success, $message, $error_details = null) {
    if (!$success) {
      http_response_code(500);
    }
    echo json_encode([
      'success' => $success,
      'message' => $message,
      'error_details' => $error_details
    ]);
    exit;
  }

  // Vérification de la méthode HTTP
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendJsonResponse(false, 'Méthode non autorisée');
  }

  // Validation des champs requis
  if (!isset($_POST['name']) || empty(trim($_POST['name'])) ||
      !isset($_POST['mail']) || empty(trim($_POST['mail'])) ||
      !isset($_POST['message']) || empty(trim($_POST['message'])) ||
      !isset($_POST['subject']) || empty(trim($_POST['subject']))) {
    sendJsonResponse(false, 'Tous les champs sont obligatoires');
  }

  $nameVerify = valid_donnees($_POST['name']);
  $mailVerify = valid_donnees($_POST['mail']);
  $messageVerify = valid_donnees($_POST['message']);
  $subjectVerify = valid_donnees($_POST['subject']);

  // Validation email
  if (!filter_var($mailVerify, FILTER_VALIDATE_EMAIL)) {
    sendJsonResponse(false, 'Adresse email invalide');
  }

  // Chargement des variables d'environnement
  try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
  } catch (Exception $e) {
    sendJsonResponse(false, 'Erreur de configuration serveur', $e->getMessage());
  }

  // Vérification des variables d'environnement
  if (empty($_ENV['KEY_ADDRESS']) || empty($_ENV['KEY_MAIL'])) {
    sendJsonResponse(false, 'Configuration email manquante sur le serveur');
  }

    try {
      // Tentative de création d’une nouvelle instance de la classe PHPMailer, avec les exceptions activées
      $mail = new PHPMailer (true);
      // (…)

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'smtp.elasticemail.com';
$mail->Port = 2525;
$mail->Username = $_ENV['KEY_ADDRESS']; // ton identifiant SMTP EE
$mail->Password = $_ENV['KEY_MAIL'];    // ton mot de passe SMTP EE
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

// From = adresse vérifiée chez EE
$mail->setFrom($_ENV['KEY_ADDRESS'], 'Formulaire site');
// Pour pouvoir répondre au visiteur
$mail->addReplyTo($mailVerify, $nameVerify);

// Destinataire
$mail->addAddress($_ENV['KEY_ADDRESS'], 'Christophe Delahaye');

$mail->isHTML(true);
$mail->Subject = $subjectVerify . ' - ' . $nameVerify . ' (' . $mailVerify . ')';
$mail->Body    = '<h3>Nouveau message de contact</h3>
                  <p><strong>Nom :</strong> ' . $nameVerify . '</p>
                  <p><strong>Email :</strong> ' . $mailVerify . '</p>
                  <p><strong>Sujet :</strong> ' . $subjectVerify . '</p>
                  <p><strong>Message :</strong></p>
                  <div style="background: #f5f5f5; padding: 15px; border-left: 3px solid #30A46C; margin-top: 10px;">
                    ' . nl2br($messageVerify) . '
                  </div>';
$mail->AltBody = 'Nom: ' . $nameVerify . '\nEmail: ' . $mailVerify . '\nSujet: ' . $subjectVerify . '\nMessage: ' . $messageVerify;

$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';

// >>> ICI : flag transactionnel
$mail->addCustomHeader('IsTransactional', 'True');

    $result = $mail->send();
    
    if ($result) {
      sendJsonResponse(true, 'Message envoyé avec succès !');
    } else {
      sendJsonResponse(false, 'Échec de l\'envoi du message', 'PHPMailer n\'a pas pu envoyer le message');
    }

  } catch (Exception $e) {
    // Log l'erreur pour debug (optionnel)
    error_log('Erreur PHPMailer: ' . $e->getMessage());
    
    // Messages d'erreur spécifiques selon le type d'erreur
    $errorMessage = 'Une erreur est survenue lors de l\'envoi du message';
    
    if (strpos($e->getMessage(), 'SMTP') !== false) {
      $errorMessage = 'Erreur de configuration email du serveur';
    } elseif (strpos($e->getMessage(), 'authenticate') !== false) {
      $errorMessage = 'Erreur d\'authentification email';
    } elseif (strpos($e->getMessage(), 'connect') !== false) {
      $errorMessage = 'Impossible de se connecter au serveur email';
    }
    
    sendJsonResponse(false, $errorMessage, $debug ? $e->getMessage() : null);
  }
?>