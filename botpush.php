<?php



require "vendor/autoload.php";

$access_token = 'bcB8Pm6g9fMJV5xfUath+BafXA8KvvUvaTcd+ibdydqDIbooeI0NySzSkY2OnYU6McWVeqyc3vC7b+52go42Rx0uPUUB7NQaILmifCOmkX23UjNHTj7IYSiraS9apXHa+mkqCIZhw6m+lfmrGT1GHgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '1721ce7171c1229a8b348fa97d5b19d2';

$pushID = 'Ue11be12af376e339bdcf76b37aeed656';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







