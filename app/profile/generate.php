<?php

$user = R::findOne('user', 'key = ?', array($key));

if(!is_object($user)){
	$user = R::dispense("user");
	$user->key = $key;
	$user->created = time();
}

$user->address = $altcoin->getaccountaddress($key);
$user->balance = $altcoin->getbalance($key);
$user->updated = time();
$id = R::store($user);
$user = R::load("user",$id);


include(APP."/profile/index.php");

function checkCaptcha(){
    if(isset($_POST['g-recaptcha-response'])){
        $captcha = $_POST['g-recaptcha-response'];

        $postdata = http_build_query(
            array(
                'secret'   => '	6LepdoEUAAAAAE5EOOXk8aNb4sCrn_YuwSxVGBn6',
                'response' => $captcha,
                'remoteip' => $_SERVER['REMOTE_ADDR']
            )
        );

        $options = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );

        $context = stream_context_create($options);
        $result  = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context));

        return $result->success;
    }else{
        return false;
    }
}

?>
