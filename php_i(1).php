

<?php 
/*
حبيبي افهم من تنشر ملفي 
عيف حقوق الملف لتغيرها
#هدوووء
*/
ob_start();
$llrlll = 'توكن'; 
define('API_KEY',$llrlll);
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
##  ch:- @php_i  # Dev:- @dev_a  ##
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$php_i = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$cc = '@php_i'; // معرف قناتك

if($text == "/start"){$from_id = $message->from->id;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$cc&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$php_i,
'text'=>"• عـذراََ ! 🤚🏿

• يجب عليك الاشتراك في قناة اولا➕
• لـ استخدام البوت 🃏

• القناة 🥤:- $cc
",
]);return false;}}
##  ch:- @php_i  # Dev:- @dev_a  ##
##### الستارت #####
if($text == '/start'){ 
bot('sendMessage', [
'chat_id'=>$php_i,
'text'=>"• مرحبـا بك في 🙎🏿‍♂️
•  بوت لعبـة الكلمات 🕊

• البوت يحتوي ع مجموعه من الكلمات [ المتقاطعـة ]🚡

• ارسل امر [ ابدأ ] لاقتراح الكلمات المتقاطعه لك 📻

• كذالـك يمكنك اضافتي الى [ مجموعتك ] لـ لعب مع الاعضاء 🎟",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'جديدنـا 🥤️', 'url'=>'https://telegram.me/i_lo_v_e']],
[['text'=>'للمسـاعدة 🚸','callback_data'=>'1']],]])]);}
if($data == "1"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
    'text'=>"[ المساعـدة 🚸 ] 

• ارسل كلمة [ ابدا ] او [ ابدأ ] لعرض كلمات المتقاطعه لك 🙏🏻

• يمكنك اضافة البوت الى مجموعتك ولا يحتاج الى رفعه ادمن 🙏🏻

• بعدها ارسل الامر [ ابدا ] سوف يقوم بعرض كلمات لـ لعب مع الاعضاء 🥀

#هـدوء || @dev_a",]);}
##  ch:- @php_i  # Dev:- @dev_a  ##

##### الاسئله #####
$هدوء = array('الكلمة 🤹🏿‍♂️ :- [ ل س ا ق ت ب ا ] '
,'الكلمة 🤹🏿‍♂️ :- [ ه ا ر س ي ]'
,'الكلمة 🤹🏿‍♂️ :- [ ر و ح س ]'
,'الكلمة 🤹🏿‍♂️ :- [ ن ف ه ق ]'
,'الكلمة 🤹🏿‍♂️ :- [ و ن ي ا ف  ]'
,'الكلمة 🤹🏿‍♂️ :- [  ن و ه ب ز  ]'
,'الكلمة 🤹🏿‍♂️ :- [ ر ك و س ت ن ا ي ]'
,'الكلمة 🤹🏿‍♂️ :- [ ا ع ل ق ا ر ]'
,'الكلمة 🤹🏿‍♂️ :- [ و هـ ك ه ]'
,'الكلمة 🤹🏿‍♂️ :- [ ف ي س ه ن ]'
,'الكلمة 🤹🏿‍♂️ :- [ ج ا د ج  ه ]'
,'الكلمة 🤹🏿‍♂️ :- [ س م ر د ه ]'
,'الكلمة 🤹🏿‍♂️ :- [ ا ن ا و ل ]'
,'الكلمة 🤹🏿‍♂️ :- [ ه غ ف ر ]'
,'الكلمة 🤹🏿‍♂️ :- [ ج ه ث ل ا ]'
,'الكلمة 🤹🏿‍♂️ :- [ خ م ب ط ]'
);
$ailnoor = array_rand($هدوء, 1);
if($text =="ابدأ" or $text =="ابدا"){
bot('sendMessage',[
'chat_id'=>$php_i,
'text'=>$هدوء[$ailnoor],
'reply_to_message_id'=>$message->message_id
]);
}
##  ch:- @php_i  # Dev:- @dev_a  ##

##### الاجوبه #####
if($text == 'سحور' or $text == 'سياره'  or $text == 'استقبال'  or $text == 'قنفه'  or $text == 'ايفون'  or $text == 'بزونه' or  $text == 'مطبخ' or $text == 'كرستيانو' or $text == 'دجاجه' or $text == 'مدرسه' or $text == 'الوان' or $text == 'غرفه' or $text == 'ثلاجه' or $text == 'كهوه' or $text == 'سفينه' or $text == 'العراق'){
$dev_i = array('هذه جاوب صح ✔️',
'اجابتك صحيحة 🙅🏿‍♂️',
' صح جوابك 😻',
'هذه جاوب صح 🙏🏻',);
$php = array_rand($dev_i, 1);
bot('sendMessage',[
'chat_id'=>$php_i,
'text'=>$dev_i[$php],
'reply_to_message_id'=>$message->message_id
]);
}
##  ch:- @php_i  # Dev:- @dev_a  ##

##### الاذاعه #####
$هدووء = 612393384;
$u = explode("\n",file_get_contents("data/dev_a.txt"));
$c = count($u)-1;
if ($update && !in_array($php_i, $u)) {
    file_put_contents("data/dev_a.txt", $chat_id."\n",FILE_APPEND);
  }
  if ($text == 'الاعضاء' and $php_i == $هدووء) {
    bot('sendMessage',[
      'chat_id'=>$php_i,
      'text'=>"مستخدمين البوت 🤖 الخاص بك :- $c"
    ]);
  }
  ##  ch:- @php_i  # Dev:- @dev_a  ##
  
if($text == "الاوامر" and $php_i == $هدووء){
    bot('sendMessage',[
    'chat_id'=>$php_i,
    'text'=>"اخـتر ما تريـد الان 💡",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"عدد الاعضـاء 🙎🏻‍♂️",'callback_data'=>"count"]],
            [['text'=>"اذاعـة 🥤",'callback_data'=>"send_all"]],
        ] ])]);}
if($data == "count" and $chat_id2 == $هدووء){
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عدد مشتركين البوت📬 : $c",
        'show_alert'=>true,
]);}
##  ch:- @php_i  # Dev:- @dev_a  ##
$mode = file_get_contents("data/dev_i.txt");
if($data == "send_all" and $chat_id2 == $هدووء){
    file_put_contents("data/dev_i.txt","yas");
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
    'text'=>"ارسل رسالتك الان 📩 وسيتم نشرها لـ $c مشترك",   'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"الغاء🚫",'callback_data'=>"off"]],]])]);}
if($text and $mode == "yas" and $php_i == $هدووء ){
    for ($i=0; $i < count($u); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text", ]);}} 
if($data == "off"){
    file_put_contents("data/dev_i.txt","no");
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
    'text'=>"تم الالغاء",]);
}
##  ch:- @php_i  # Dev:- @dev_a  ##