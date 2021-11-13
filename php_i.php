<?php 
 ## ch:- @php_i  # هدوء :- @dev_a ##
 ## لا تخمط by:- @th_nbot ##
ob_start();
$API_KEY = "حط هدوء";
define('API_KEY',$API_KEY);
function dev_a($method,$datas=[]){
    $dev_ii = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$dev_ii";
        $syr = file_get_contents($url);
        return json_decode($syr);
}
 ## ch:- @php_i  # هدوء :- @dev_a ##
##المتغيرات##
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$us = $message->from->username;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$php_i = 612393384;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
 ## ch:- @php_i  # هدوء :- @dev_a ##
##شتراك جباري##
$dev_i   = $message->from->id; 
if($text == "/start"){$from_id = $message->from->id;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@php_i&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
dev_a('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"• عـذراََ ! 🤚🏿

• يجب عليك الاشتراك في قناة اولا➕
• لـ استخدام البوت 🃏

• القناة 🥤:- @php_i
",
]);return false;}}

 ## ch:- @php_i  # هدوء :- @dev_a ##
##ترحيب##
if ($text =="/start" or $text =="رجـوع 🛴"){
	dev_a('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"• اهلا بك في بوت الانستا🙎🏻‍♂️

• البوت يقوم بـ [ فحص ] يوزرات الانستكرام و التلكرام 🗳

• وكذالك يقوم ب انشاء لسته يوزرات و معرفات تلكرام مميزه 🌀

• اختر الان احد الاقسام 👇🏿",
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"التلكرام 🚡"],['text'=>"الانستكرام 🎹"]],]])]);}
if ($text =="/start"){
    dev_a('sendMessage',[
      'chat_id'=>$php_i,
      'text'=>"دخل @$us"
    ]);
  }
   ## ch:- @php_i  # هدوء :- @dev_a ##
if ($text =="التلكرام 🚡" or $text =="رجـووع 🛴"){
	dev_a('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
• اهلا بك في قسم التلكرام 🥤

• اختر ما تريد 👇🏿",
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"انشاء لسته معرفات 🌀"]],
	[['text'=>"فحص معرفات 🔖"]],
	[['text'=>"رجـوع 🛴"]],]])]);}
	if ($text =="الانستكرام 🎹" or $text == "رجووع 🛴"){
	dev_a('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
• اهلا بك في قسم الانستكرام 🥤

• اختر ما تريد 👇🏿",
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"انشاء لسته يوزرات 🌀"]],
	[['text'=>"فحص يوزرات 🔖"]],
	[['text'=>"رجـوع 🛴"]],]])]);}
		if ($text =="انشاء لسته يوزرات 🌀"){
	dev_a('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"• اختر نوع اليوزر الان 🤹🏿‍♂️",
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"ثلاثـي 🗳"]],       
	[['text'=>"رباعـي 🎨"]],
	[['text'=>"خمـاسي 🎟"]],
	[['text'=>"رجووع 🛴"]],]])]);}
if ($text =="فحص معرفات 🔖"){
	dev_a('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"• ارسـل المعرف الان بدون [ @ ] 🎻",
	        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"رجـووع 🛴"]],]])]);}       
if ($text =="فحص يوزرات 🔖"){
	dev_a('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"• قريبا ..⚠️",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"رجووع 🛴"]],]])]);}
	
# السته ##
 ## ch:- @php_i  # هدوء :- @dev_a ##
$a = array("q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m","1","2","3","4","5","6","7","8","9","0");
$b= array_rand($a, 1); 
if ($text == "انشاء لسته معرفات 🌀"){
dev_a('sendMessage',[ 
'chat_id'=>$chat_id, 
"text"=>"
@aa$a[$b]aa
@qq$a[$b]qq
@ww$a[$b]ww
@rr$a[$b]rr

@ee$a[$b]ee
@tt$a[$b]tt
@uu$a[$b]uu
@ii$a[$b]ii

@oo$a[$b]oo
@pp$a[$b]pp
@ss$a[$b]ss
@dd$a[$b]dd

@ff$a[$b]ff
@gg$a[$b]gg
@hh$a[$b]hh
@jj$a[$b]jj

@kk$a[$b]kk
@ll$a[$b]ll
@zz$a[$b]zz
@cc$a[$b]cc

@vv$a[$b]vv
@bb$a[$b]bb
@nn$a[$b]nn
@mm$a[$b]mm

by :- $a[$b]
",
'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"رجـووع 🛴"]],]])]);
dev_a('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم انشاء لسته المعرفات 🥤",
'reply_to_message_id'=>$message->message_id,
]);}
##يوزرات ##
 ## ch:- @php_i  # هدوء :- @dev_a ##
 $c = array("q","w","e","r","t","y");
$d = array_rand($c, 1); 
  
  $e = array("u","i","o","p","a","s","d","f","g","h","j");
  $f = array_rand($e, 1); 
  
     $g = array("k","l","z","x","c","v","b","n","m");
  $h = array_rand($g, 1); 
  
     $o = array("1","2","3","4","5","6","7","8","9","0");
  $p = array_rand($o, 1); 
 ## ch:- @php_i  # هدوء :- @dev_a ##
  if ($text == "ثلاثـي 🗳"){
dev_a('sendMessage',[ 
'chat_id'=>$chat_id, 
"text"=>"     
     $a[$b]$o[$p]$g[$h]
     $g[$h]k$a[$b]
      h$e[$f]$o[$p]
       $o[$p]v$c[$d]
       m$g[$h]f
         $o[$p]$g[$h]j
            $g[$h]j$a[$b]
         $c[$d]h$e[$f]
       $a[$b]h$e[$f]
       $g[$h]f$c[$d]",
       	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"رجووع 🛴"]],]])]);
dev_a('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"• تـم انشاء لسته يوزرات ثلاثيه 🌀",
'reply_to_message_id'=>$message->message_id,
]);}
 ## ch:- @php_i  # هدوء :- @dev_a ##
 if ($text == "خمـاسي 🎟"){
dev_a('sendMessage',[ 
'chat_id'=>$chat_id, 
"text"=>"     
     $a[$b]$o[$p]$g[$h]jo
     $g[$h]k$a[$b]$o[$p]h
      h$e[$f]$o[$p]$c[$d]p
       $o[$p]v$c[$d]$g[$h]y
       m$g[$h]f$c[$d]s
         $o[$p]$g[$h]j$a[$b]a
            $g[$h]j$a[$b]$o[$p]w
         $c[$d]h$e[$f]$o[$p]t
       $a[$b]h$e[$f]$o[$p]u
       $o[$p]m$g[$h]f$c[$d]l",
       	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"رجووع 🛴"]],]])]);
dev_a('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"• تـم انشاء لسته يوزرات خماسيه 🌀",
'reply_to_message_id'=>$message->message_id,
]);}
 ## ch:- @php_i  # هدوء :- @dev_a ##
if ($text == "رباعـي 🎨"){
dev_a('sendMessage',[ 
'chat_id'=>$chat_id, 
"text"=>"     
     $a[$b]$o[$p]$g[$h]j
     $g[$h]k$a[$b]$o[$p]
      h$e[$f]$o[$p]$c[$d]
       $o[$p]v$c[$d]$g[$h]
       m$g[$h]f$c[$d]
         $o[$p]$g[$h]j$a[$b]
            $g[$h]j$a[$b]$o[$p]
         $c[$d]h$e[$f]$o[$p]
       $a[$b]h$e[$f]$o[$p]
       $o[$p]m$g[$h]f$c[$d]",
       	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"رجووع 🛴"]],]])]);
dev_a('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"• تـم انشاء لسته يوزرات رباعيه 🌀",
'reply_to_message_id'=>$message->message_id,
]);}
 ## ch:- @php_i  # هدوء :- @dev_a ##
 ## الفاحص ##
 
if(strlen($text) > 4 and $text !="/start"){
if(preg_match('/([a-z])|([A-Z])/i',$text)){
  $dev_a = file_get_contents("https://php-i.000webhostapp.com/api/dev-a.php?user=$text");
dev_a('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$dev_a,
'reply_to_message_id'=>$message->message_id,
]);}}elseif($text !="/start"){
dev_a('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"• هذه المعرف قصير جدا 🙎🏻‍♂️",
'reply_to_message_id'=>$message->message_id,
]);}

## الاوامر ##
$u = explode("\n",file_get_contents("data/noor.txt"));
$c = count($u)-1;
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("data/noor.txt", $chat_id."\n",FILE_APPEND);
 }
  ## ch:- @php_i  # هدوء :- @dev_a ##
if($text == "الاوامر" and $chat_id == $php_i){
    dev_a('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"اخـتر ما تريـد الان 💡",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"عدد الاعضـاء 🙎🏻‍♂️",'callback_data'=>"count"]],
            [['text'=>"اذاعـة 🥤",'callback_data'=>"send_all"]],
        ] ])]);}
if($data == "count" and $chat_id2 == $php_i){ //مشتركين البوت = مهمة 1
    dev_a('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عدد مشتركين البوت📬 : $c",
        'show_alert'=>true,
]);}
 ## ch:- @php_i  # هدوء :- @dev_a ##
$mode = file_get_contents("data/no.txt");
if($data == "send_all" and $chat_id2 == $php_i){
    file_put_contents("data/no.txt","yas");
    dev_a('EditMessageText',[
    'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
    'text'=>"ارسل رسالتك الان 📩 وسيتم نشرها لـ $c مشترك",   'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"الغاء🚫",'callback_data'=>"off"]],]])]);}
if($text and $mode == "yas" and $chat_id ==$php_i){
    for ($i=0; $i < count($u); $i++) { 
        dev_a('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text", ]);}} 
if($data == "off"){
    file_put_contents("data/no.txt","no");
    dev_a('EditMessageText',[
    'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
    'text'=>"تم الالغاء",]);
}
 if ($text == 'الاعضاء' and $chat_id == $php_i) {
    dev_a('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"مستخدمين البوت 🤖 الخاص بك :- $c"
    ]);
  }
  ## ch:- @php_i  # هدوء :- @dev_a ##