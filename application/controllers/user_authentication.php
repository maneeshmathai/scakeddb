<?php
// Start session

session_start();

class User_Authentication extends CI_Controller {

public function __construct() {
parent::__construct();
$this->load->helper('url');
$this->load->model('Ion_auth_model');
$this->load->library('Ion_auth');
}

public function index() {

$data['userData']=null;
// Include two files from google-php-client library in controller
include_once APPPATH . "libraries/vendor/autoload.php";
include_once APPPATH . "libraries/vendor/google/apiclient/src/Google/Client.php";
include_once APPPATH . "libraries/vendor/google/apiclient/src/Google/Service/Oauth2.php";


// Store values in variables from project created in Google Developer Console
$client_id = '1083753323711-glsmo8bk5ci56pngaptisnlljg2bkc79.apps.googleusercontent.com';
$client_secret = '-1S3_t3bNFDZF9_7DBXlh_BD';
$redirect_uri = base_url().'login';
$simple_api_key = 'AIzaSyBolPVjxNreIyr0W-GoNlfLdPLLHhRCgZ0';

// Create Client Request to access Google API
$client = new Google_Client();
$client->setApplicationName("PHP Google OAuth Login Example");
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->setDeveloperKey($simple_api_key);
$client->addScope("https://www.googleapis.com/auth/userinfo.email");

// Send Client Request
$objOAuthService = new Google_Service_Oauth2($client);

// Add Access Token to Session
if (isset($_GET['code'])) {
$client->authenticate($_GET['code']);
$_SESSION['access_token'] = $client->getAccessToken();
header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}

// Set Access Token to make Request
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
$client->setAccessToken($_SESSION['access_token']);
}

 if($client->isAccessTokenExpired()) {
    $authUrl = $client->createAuthUrl();
    header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
    }

// Get User Data from Google and store them in $data
if ($client->getAccessToken()) {
$userData = $objOAuthService->userinfo->get();
$data['userData'] = $userData;
if(!$this->Ion_auth_model->username_check($userData->email))
{
	$additional_data = array(
                'first_name' => $userData->given_name,
                'last_name'  => $userData->family_name,
                'gender'    => $userData->gender,
				'picture'    => $userData->picture,
            );
$this->ion_auth->register($userData->email,"secret_key_user.321",$userData->email,$additional_data);		
}
else
{
$r_result = $this->Ion_auth_model->username_check_values($userData->email);
$this->Ion_auth_model->login($userData->email,$r_result->password,false,false);
}



$_SESSION['access_token'] = $client->getAccessToken();
} else {
$authUrl = $client->createAuthUrl();
$data['authUrl'] = $authUrl;
}


// Load view and send values stored in $data
$this->load->view('google_authentication', $data);
if ($this->ion_auth->logged_in())
redirect(base_url()."auth/profile");
}

// Unset session and logout
public function logout() {
unset($_SESSION['access_token']);
$this->ion_auth->logout();
redirect(base_url());
}
}
?>