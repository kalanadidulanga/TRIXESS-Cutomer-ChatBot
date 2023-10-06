<?php
$userInput = $_POST['userInput'];
$intent = recognizeIntent($userInput);
$botResponse = generateResponse($intent);
echo $botResponse;

function recognizeIntent($userInput) {
    // Basic intent recognition based on keywords
    $keywords = ['return', 'order', 'help'];

    foreach ($keywords as $keyword) {
        if (stripos($userInput, $keyword) !== false) {
            return $keyword;
        }
    }
    
    return 'unknown';
}

function generateResponse($intent) {
    // Define responses based on intents
    $responses = [
        'return' => 'To return a product, please visit our "Returns" page on our website.',
        'order' => 'You can check your order status by logging into your account and going to the "Order History" section.',
        'help' => 'Our customer support team is here to assist you. How can we help you further?',
        'unknown' => "I'm sorry, but I don't understand your query. Please ask again."
    ];
    
    return $responses[$intent];
}
?>
