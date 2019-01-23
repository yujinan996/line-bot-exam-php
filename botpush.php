<?php



require "vendor/autoload.php";

$access_token = 'MoaDvwH6Ey/sLUY+u7RLAaJVbXsX/OWUO6jc09Btj1mMIsZwONwgPXcBSTDzCNyNTmQ4CPAXWXyvvJ3OePP+LV3qLlcX618ijkSsc0tgSSzjne009zeE0r8tBU4cUgJOfgZDj2gJL+6ySLowG4wuLQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '3dc31774bb260eee00f64572cec67f8c
Issue';

$pushID = 'U81080e6e5dda35a500f162035762e2b2';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







