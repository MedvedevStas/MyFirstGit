<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '298320534:AAGnwJyDeEZBNHD8n5oRDNGDdHktjiBLa0I';
$BOT_NAME = 'Medvedev_SA_bot';
$hook_url = 'https://d8d400b9.ngrok.io';
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    // Set webhook
    $result = $telegram->setWebHook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}
