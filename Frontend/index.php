<?php


require __DIR__ . '/vendor/autoload.php';

use Google\Cloud\Language\V1\Document;
use Google\Cloud\Language\V1\Client\LanguageServiceClient;

$keyFilePath = 'C:\\xampp\\htdocs\\TRIXESS-Cutomer-ChatBot\\Frontend\\composer.json';

$language = new LanguageServiceClient([
    'keyFile' => json_decode(file_get_contents($keyFilePath), true)
]);

$text = 'hi';

$document = new Document([
    'content' => $text,
    'type' => 'PLAIN_TEXT',
]);

$response = $language->analyzeSentiment($document);
$sentiment = $response->getDocumentSentiment();

echo 'Sentiment Score: ' . $sentiment->getScore() . PHP_EOL;
echo 'Sentiment Magnitude: ' . $sentiment->getMagnitude() . PHP_EOL;

$language->close();
