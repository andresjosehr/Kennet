<?php  

require_once '/home/amasynanas/public_html/filterapp/Facebook/autoload.php'; // change path as needed

$fb = new Facebook(array(
  'app_id' => '1013676792154139',
  'app_secret' => 'e6bfa7e041658d732c1d2558022f1b12',
  'default_graph_version' => 'v2.10',
  'default_access_token' => '{access-token}', // optional
));
$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  // Logged in!
  $_SESSION['facebook_access_token'] = (string) $accessToken;

  // Now you can redirect to another page and use the
  // access token from $_SESSION['facebook_access_token']
} elseif ($helper->getError()) {
  // The user denied the request
  exit;
}
// $helper = $fb->getRedirectLoginHelper();
// $accessToken = $helper->getAccessToken();
// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
//   $helper = $fb->getRedirectLoginHelper();
//   $helper = $fb->getJavaScriptHelper();
//   $helper = $fb->getCanvasHelper();
//   $helper = $fb->getPageTabHelper();

// try {
//   // Get the \Facebook\GraphNodes\GraphUser object for the current user.
//   // If you provided a 'default_access_token', the '{access-token}' is optional.
//   $response = $fb->get('/me?fields=id,name',  '{access-token}');
// } catch(\Facebook\Exceptions\FacebookResponseException $e) {
//   // When Graph returns an error
//   echo 'Graph returned an error: ' . $e->getMessage();
//   exit;
// } catch(\Facebook\Exceptions\FacebookSDKException $e) {
//   // When validation fails or other local issues
//   echo 'Facebook SDK returned an error: ' . $e->getMessage();
//   exit;
// }

// $me = $response->getGraphUser();
// echo 'Logged in as ' . $me->getName();
?>