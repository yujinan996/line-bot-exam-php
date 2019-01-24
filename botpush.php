<?php



require "vendor/autoload.php";

$access_token = 'u0HPP9aPpN77dvrOAQvlyPGP8Bx2o/YbsNO7FwBCDRecAOgo+YcAGxe69ruaQ/fqTmQ4CPAXWXyvvJ3OePP+LV3qLlcX618ijkSsc0tgSSxU7rdW12ujAK+6eRgdNar796vzGist+m4n1JskQYXN3wdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'e8162bd043339444bf7270da1e18b8de';

$pushID = 'U81080e6e5dda35a500f162035762e2b2';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







