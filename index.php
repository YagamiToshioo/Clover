<?php
/*
copyright @ medantechno.com
Modified by Ilyasa
2017
*/
require_once('./line_class.php');

$channelAccessToken = 'D9a/QCVaAtse1+NGys5Jpqs95kyN9Y+sxqyPiMT/wxNELWXXqqT87V7YiWXsfrXEoDG5BnreW5LcnunFWpjWve/aWbu0Cjq8b63dUYorc4zTiWaDiGb6Ueev/ZL2RhQfgaCwhd4CLEs2vDrO5nSUWQdB04t89/1O/w1cDnyilFU='; //Your Channel Access Token
$channelSecret = 'ab8f924bed71417feb058ce1c1464193';//Your Channel Secret

$client = new LINEBotTiny($channelAccessToken, $channelSecret);

$userId 	= $client->parseEvents()[0]['source']['userId'];
$replyToken = $client->parseEvents()[0]['replyToken'];
$message 	= $client->parseEvents()[0]['message'];
$profil = $client->profil($userId);
$if($message['type']=='sticker')

url = "https://www.cleverbot.com/getreply";
key = "CC6a2Wzi4dqrDF0c-GdaQTGdN6Q";
input = encodeURIComponent ("How are you?");
function ProcessReply (data) {
    if (data.error) console.log ('Error: ' + data.error);
    else alert ('Reply: ' + data.output);
}
script_element = document.createElement('script'); //create new script element
script_element.src = url + "?input=" + input + '&key=' + key + '&callback=ProcessReply';
document.getElementsByTagName ('head')[0].appendChild(script_element); //append to page, which executes it
</script>

<script>
$.ajax({
    url: url,
    data: {"input": input, "key": key}, //input automatically encoded
    dataType: "jsonp",
    success: ProcessReply
});
</script>
