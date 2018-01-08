if($message['type']=='sticker')

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
