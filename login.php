<?php
require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_PlusService.php';

session_start();

$client = new Google_Client();
$client->setApplicationName("MHelper");
// Visit https://code.google.com/apis/console to generate your
// oauth2_client_id, oauth2_client_secret, and to register your oauth2_redirect_uri.
$client->setClientId('965773967185-b3hd6glq9pi4vuorlo0kc21iuoh11n2s.apps.googleusercontent.com');
$client->setClientSecret('IGcSNMAc5x0J_mXSDk8t3uL_');
$client->setRedirectUri('http://localhost:8888/MHelper/index.php');
$client->setDeveloperKey('965773967185');
$plus = new Google_PlusService($client);

if (isset($_REQUEST['logout'])) {
  unset($_SESSION['access_token']);
}

if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}

if (isset($_SESSION['access_token'])) {
  $client->setAccessToken($_SESSION['access_token']);
}

if ($client->getAccessToken()) {
  $me = $plus->people->get('me');

  // These fields are currently filtered through the PHP sanitize filters.
  // See http://www.php.net/manual/en/filter.filters.sanitize.php
  $url = filter_var($me['url'], FILTER_VALIDATE_URL);
  $img = filter_var($me['image']['url'], FILTER_VALIDATE_URL);
  $name = filter_var($me['displayName'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $personMarkup = "<a rel='me' href='$url'>$name</a><div><img src='$img'></div>";

  $optParams = array('maxResults' => 100);
  $activities = $plus->activities->listActivities('me', 'public', $optParams);
  $activityMarkup = '';
  foreach($activities['items'] as $activity) {
    // These fields are currently filtered through the PHP sanitize filters.
    // See http://www.php.net/manual/en/filter.filters.sanitize.php
    $url = filter_var($activity['url'], FILTER_VALIDATE_URL);
    $title = filter_var($activity['title'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    $content = filter_var($activity['object']['content'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    $activityMarkup .= "<div class='activity'><a href='$url'>$title</a><div>$content</div></div>";
  }

  // The access token may have been updated lazily.
  $_SESSION['access_token'] = $client->getAccessToken();
} else {
  $authUrl = $client->createAuthUrl();
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MHelper-Profile</title>
  
  <!-- Load CSS Files -->
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="css/login.css">
  
  <!-- Load Script Files -->
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/jquery/jquery-ui.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>
  
</head>
<body>
  <div id="fullscreen_bg" class="fullscreen_bg"/>

  <div class="container">
    <form class="form-signin">
      <img class="form-signin-logo center-block" src="img/login-logo.png" alt="logo">
      <h3 class="form-signin-heading text-muted">The fragrance always stays in the hand that gives</h3>
        <?php
          if(isset($authUrl)) {
            print "<a class='login btn btn-lg btn-primary btn-block form-signin-btn' href='$authUrl'>Sign In</a>";
          } else {
            print "<a class='logout btn btn-lg btn-primary btn-block form-signin-btn' href='?logout'>Logout</a>";
          }
        ?>
      <div class="form-signin-text">Sign in with your umich unique name</a></div>
    </form>
  </div>
</body>
</html>