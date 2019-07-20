<?php


if(isset($_SERVER["HTTP_HOST"]))
	$domain = $_SERVER['HTTP_HOST'];
	//$sub = array_shift(explode(".",$_SERVER['HTTP_HOST']));
if(isset($_SERVER["REQUEST_URI"])){
	$path = explode("?",$_SERVER['REQUEST_URI']);
	$var = explode("/",$path[0]);
}

$settings = array(
	"name" => "Litecoin",
	"url" => "https://bitlits.com",
	"rate" => ".9",
	"altcoin" => "Litecoin",
	"altcoinl" => "litecoin",
	"identifier" => "litecoinrpc",
	"password" => "password",
	"port" => "19332",
	"altc" => "LTC",
	"altcl" => "ltc",
);


if(strpos($domain,"dash") !== false){
	$settings = array(
		"name" => "Dash",
		"url" => "https://dash.bitlits.com",
		"rate" => ".9",
		"altcoin" => "Dash",
		"altcoinl" => "dash",
		"identifier" => "dashrpc",
		"password" => "password",
		"port" => "9334",
		"altc" => "DASH",
		"altcl" => "dash",
	);
}elseif(strpos($domain,"doge") !== false){
	$settings = array(
		"name" => "Dogecoin",
		"url" => "https://doge.bitlits.com",
		"rate" => ".9",
		"altcoin" => "Dogecoin",
		"altcoinl" => "Dogecoin",
		"identifier" => "dogecoinrpc",
		"password" => "password",
		"port" => "9336",
		"altc" => "DOGE",
		"altcl" => "doge",
	);
}elseif(strpos($domain,"dgb") !== false){
	$settings = array(
		"name" => "Digibytes",
		"url" => "http://dgb.bitlits.com",
		"rate" => ".9",
		"altcoin" => "Digibytes",
		"altcoinl" => "Digibytes",
		"identifier" => "digibytesrpc",
		"password" => "password",
		"port" => "9339",
		"altc" => "DGB",
		"altcl" => "dgb",
	);
}



require_once(VENDOR."/Mustache/Autoloader.php");
require_once(VENDOR."/jsonRPC/jsonRPCClient.php");
require_once(VENDOR."/storage/rb.php");
require_once(VENDOR."/ssh/Net/SSH2.php");


R::setup('sqlite:'.BASE.'/data.sqlite','root','changethispassword');

Mustache_Autoloader::register();
$m = new Mustache_Engine(
	array(
		'loader' => new Mustache_Loader_FilesystemLoader(VIEWS),
		'partials_loader' => new Mustache_Loader_FilesystemLoader(VIEWS."/partials")
	)
);

$altcoin = new jsonRPCClient('http://'.$settings["identifier"].':'.$settings["password"].'@localhost:'.$settings["port"]);


require_once(BASE."/functions.php");
require_once(BASE."/user.php");

?>
