<?php

	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	require __DIR__ . '/vendor/autoload.php';

	$API_KEY = '298320534:AAGnwJyDeEZBNHD8n5oRDNGDdHktjiBLa0I';
	$BOT_NAME = 'Medvedev_SA_bot';
	$hook_url = 'https://8cf039ce.ngrok.io';
	$id="278182886";
	$mysql = [
	   'host'     => 'localhost',
	   'user'     => 'root',
	   'password' => 'fjtf00',
	   'database' => 'dmname',
	];

	$telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);
	$request  = new Longman\TelegramBot\Request($API_KEY, $BOT_NAME);
	$request->initialize($telegram);
	$Input=$request->getInput();
	//$Input = file_get_contents("http://localhost/test");
	$update = new Longman\TelegramBot\Entities\Update(json_decode($Input,1),$BOT_NAME);
	$telegram->processUpdate($update);
	print_r($update->getMessage()->getFullCommand());
	// $DB				= new Longman\TelegramBot\DB();
	 $f = fopen("test","a");
	 fwrite($f,$Input);
	 fclose($f);
	$NmSpcUsrCmd = "Longman\TelegramBot\Commands\UserCommands\HelpCommand";
	//$command_whoami  = new WhoamiCommand($telegram, $update);
	$command  = new $NmSpcUsrCmd($telegram, $update);
	//$command_whoami->execute();
	//$command->execute();
	// $DB->initialize($mysql,$telegram);
	//$request->getWebhookInfo();
	//print_r (json_decode($f,1));
	?>
