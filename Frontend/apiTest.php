<?php

require_once 'vendor/autoload.php';
use Pj8912\PhpBardApi\Bard;

//two keys are required which are two cookies values
$_ENV['BARD_API_KEY_X'] = "bwjHTq4ALLZFrfdHKkTBKXkmjgTJSPANeiTwMrpPriYZwDmLXxk051yTpVwK8puu_eN7GQ.";
$_ENV['BARD_API_KEY_Y'] = "sidts-CjIB3e41hUJnXeBQNNpEegB3cbBwjSCDnqgPfjHuQ6_20YNR2aEgPKda1V65Zk0fp_o42BAA";
$bard = new Bard();
$input_text = "Hello, Bard!"; // Input text for the conversation
$result = $bard->get_answer($input_text); // Get the response from Bard

// bard reply
print($result['choices'][0]['content'][0]);