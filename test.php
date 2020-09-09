if($text !== "/start"){
$api = json_decode(file_get_contents("Link File?user=".$text),true);
$img = $api['result']['img'];
$bio = $api['result']['bio'];
$flo = $api['result']['followers'];
$floing = $api['result']['following'];
$name = $api['result']['name'];
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$img,
'caption'=>"
𝒏𝒂𝒎𝒆⇒
$name
------------------
𝒖𝒔𝒆𝒓⇒ $text 
𝒇𝒐𝒍𝒍𝒐𝒘𝒆𝒓𝒔⇒ $flo
𝒇𝒐𝒍𝒍𝒐𝒘𝒊𝒏𝒈 ⇒ $floing
𝒃𝒊𝒐 ⇒
$bio
------------------",
]);
}
