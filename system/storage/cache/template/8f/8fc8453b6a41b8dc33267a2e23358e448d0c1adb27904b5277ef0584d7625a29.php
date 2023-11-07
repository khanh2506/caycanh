<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* catalog/view/template/account/google.php */
class __TwigTemplate_58dffcd03670d74b10392bad07b7992b11e7c7023475747a94856ac75af19e55 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php

//Google Code
require_once ('./google/libraries/Google/autoload.php');

//Insert your cient ID and secret 
//You can get it from : https://console.developers.google.com/
\$client_id = '202743517658-3hnmopni4gvhbc5h6hj87qdpkftemeap.apps.googleusercontent.com';
\$client_secret = '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';
\$redirect_uri = 'http://localhost/caycanh/index.php?route=account/login&language=vi-vn';

//incase of logout request, just unset the session var
//if (isset(\$_GET['logout'])) {
//    unset(\$_SESSION['access_token']);
//}

/* * **********************************************
  Make an API request on behalf of a user. In
  this case we need to have a valid OAuth 2.0
  token for the user, so we need to send them
  through a login flow. To do this we need some
  information from our API console project.
 * ********************************************** */
\$client = new Google_Client();
\$client->setClientId(\$client_id);
\$client->setClientSecret(\$client_secret);
\$client->setRedirectUri(\$redirect_uri);
\$client->addScope(\"email\");
\$client->addScope(\"profile\");

/* * **********************************************
  When we create the service here, we pass the
  client to it. The client then queries the service
  for the required scopes, and uses that when
  generating the authentication URL later.
 * ********************************************** */
\$service = new Google_Service_Oauth2(\$client);

/* * **********************************************
  If we have a code back from the OAuth 2.0 flow,
  we need to exchange that with the authenticate()
  function. We store the resultant access token
  bundle in the session, and redirect to ourself.
 */

if (isset(\$_GET['code'])) {
    \$client->authenticate(\$_GET['code']);
    \$_SESSION['access_token'] = \$client->getAccessToken();
    header('Location: ' . filter_var(\$redirect_uri, FILTER_SANITIZE_URL));
    exit;
}
/* * **********************************************
  If we have an access token, we can make
  requests, else we generate an authentication URL.
 * ********************************************** */
if (isset(\$_SESSION['access_token']) && \$_SESSION['access_token']) {
    \$client->setAccessToken(\$_SESSION['access_token']);
} else {
    \$authUrl = \$client->createAuthUrl();
}
if (\$client->isAccessTokenExpired()) {
    \$authUrl = \$client->createAuthUrl();
//            header('Location: ' . filter_var(\$authUrl, FILTER_SANITIZE_URL));
}

if (!isset(\$authUrl)) {
    \$googleUser = \$service->userinfo->get(); //get user info 
    if(!empty(\$googleUser)){
        include './system/config/catalog.php';
        loginFromSocialCallBack(\$googleUser);
    }
}
//End Google Code
?>";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/google.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/google.php", "/Applications/XAMPP/xamppfiles/htdocs/caycanh/catalog/view/template/account/google.php");
    }
}
