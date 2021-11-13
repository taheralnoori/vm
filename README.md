 <?php 

ob_start();
$API_KEY = "1772892598:AAFqBnd-oxEDyTHAYLt_r_9MKHaOznRQS9Q"; 

define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text; 
$admin = 1279342401;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;

$name = $message->from->first_name;
$username = $message->from->username;
For($dev_a = 0; $dev_a < 1000; $dev_a++){
if($text == '/spam'){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"spam",
]);}}
