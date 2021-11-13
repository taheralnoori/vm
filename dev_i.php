

$u = explode("\n",file_get_contents("data/memb.txt"));
$c = count($u)-1;
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("data/memb.txt", $chat_id."\n",FILE_APPEND);
  }
  if ($text == '/mem' and $chat_id == 612393384) {
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"مستخدمين البوت 🤖 الخاص بك :- $c"
    ]);
  }

$id = $message->from->id;
$abood = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@php_i&user_id=$id");
if($text == "/start" and strpos($abood, '"status":"left"') == TRUE){
mkdir("data");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"عذراََ !⚠️
يجب الاشتراك في قناة البوت .📡 اولاََ ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضغط هنا للأشتراك", 'url'=>"https://telegram.me/php_i"]]    
]    
])
]);
}
$wel = file_get_contents("data/start.txt");
if ($text == "/start" and strpos($abood, '"status":"left"') != TRUE){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"اهلا بك في 🔖

 بوت الـ قران الكريم 🕌🖤

ارسل امر  (( /Q )) لعرض سـور القران الكريم 🔊

او ارسل اسم السورة 🎋

كـ مثال :: سورة الفاتحه

مطور 💡:- @Ailnoor 💡",
        'reply_markup'=>json_encode(
            'inline_keyboard'=>[
            [['text'=>"تـابع جـديدنـا ⛽️",'url'=>"https://telegram.me/php_i"]],
            [['text'=>"لـ ارائكم هنا 🥀",'url'=>"https://telegram.me/alsaed_ali_bot"]],
            [['text'=>"قناتنا 🗃",'url'=>"https://telegram.me/i_lo_v_e"]],
            ]
        ])
        ]);
}
$about = file_get_contents("data/about.txt")

$admin = 612393384; // your id ;
if($text == "alsaedn" or $text == "/helpailnoor" and $chat_id == $admin){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"اهلا بك #مطوري

في قائمه الاوامر 📍

اضغط ع المشتركين 💐

لعرض عدد مشتركين ⌛️

و الامر الثاني 🔮

لـ الاذاعه 📥",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"المشتركين ✅",'callback_data'=>"count"]],
            [['text'=>"ارسال رسالة للكل 🔂",'callback_data'=>"send_all"]],
        ]
    ])
    ]);
}
if($data == "count" and $chat_id2 == $admin){ //مشتركين البوت = مهمة 1
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عدد مشتركين البوت📬 : $c",
        'show_alert'=>true,
]);
}
$mode = file_get_contents("data/mode.txt");
if($data == "send_all" and $chat_id2 == $admin){
    file_put_contents("data/mode.txt","yas");
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"ارسل رسالتك الان 📩 وسيتم نشرها لـ $c مشترك . 
    - تستطيع التراجع بالضغط على الغاء . ",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"الغاء🚫",'callback_data'=>"off"]],
        ]
    ])
    ]);
}
if($text and $mode == "yas" and $chat_id == $admin){
    for ($i=0; $i < count($u); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text",
        ]);
}
} 
if($data == "off"){
    file_put_contents("data/mode.txt","no");
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"اهلا بك #مطوري

في قائمه الاوامر 📍

اضغط ع المشتركين 💐

لعرض عدد مشتركين ⌛️

و الامر الثاني 🔮

لـ الاذاعه 📥",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"المشتركين ✅",'callback_data'=>"count"]],
            [['text'=>"ارسال رسالة للكل 🔂",'callback_data'=>"send_all"]],
        ]
    ])
    ]);
}
if($text == "/Q" or $text == "/q"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🗃ســور الـقران الكـريـم 🗃

ا ֆ • • • • • • • • • • • • • ֆ

🕌1-سورة الفاتحه
🕌2-البقرة
🕌3-سورة ال عمران
🕌4-سورة النساء
🕌5-سورة المائدة
🕌6-سورة الانعام
🕌7-سورة الأعراف
🕌8-سورة الأنفال
🕌9-سورة التوبة
🕌10-سورة يونس
🕌11-سورة هود
🕌12-سورة يوسف
🕌13-سورة الرعد
🕌14-سورة أبراهيم
🕌15-سورة الحجر
🕌16-سورة النحل
🕌17-سورة الاسراء
🕌18-سورة الكهف
🕌19-سورة مريم
🕌20-سورة طه
🕌21-سورة الأنبياء
🕌22-سورة الحج
🕌23-سورة المؤمنون
🕌24-سورة النور
🕌25-سورة الفرقان
🕌26-سورة الشعراء
🕌27-سورة النحل
🕌28-سورة القصص
🕌29-سورة العنكبوت
🕌30-سورة الروم
🕌31-سورة لقمان
🕌32-سورة السجدة
🕌33-سورة الاحزاب
🕌34-سورة سبأ
🕌35-سورة فاطر
🕌36-سورة يس
🕌37-سورة الصافات
🕌38-سورة ص
🕌39-سورة الزمر
🕌40-سورة غافر
🕌41-سورة فصلت
🕌42-سورة الشورئ
🕌43-سورة الزخرف
🕌44-سورة الدخان
🕌45-سورة الجاثيه
🕌46-سورة الاحقاف
🕌47-سورة محمد
🕌48-سورة الفتح
🕌49-سورة الحجرات
🕌50-سورة ق
🕌51-سورة الذاريات
🕌52-سورة الطور
🕌53-سورة النجم
🕌54-سورة القمر
🕌55-سورة الرحمن
🕌56-سورة الواقعه
🕌57-سورة الحديد
🕌58-سورة المجادلة
🕌59-سورة الحشر
🕌60-سورة الممتحنة
🕌61-سورة الصف
🕌62-سورة الجمعة
🕌63-سورة المنافقون
🕌64-سورة التغابن
🕌65-سورة الطلاق
🕌66-سورة التحريم
🕌67-سورة الملك
🕌68-سورة القلم
🕌69-سورة الحاقة
🕌70-سورة المعارج
🕌71-سورة نوح
🕌72-سورة الجن
🕌73-سورة المزمل
🕌74-سورة المدثر
🕌75-سورة القيامة
🕌76-سورة الانسان
🕌77-سورة المرسلات
🕌78-سورة النبأ
🕌79-سورة النازعات
🕌80-سورة عبس
🕌81-سورة التكوير
🕌82-سورة الانفطار
🕌83-سورة المطففين
🕌84-سورة الانشقاق
🕌85-سورة البروج
🕌86-سورة الطارق
🕌87-سورة الاعلئ
🕌88-سورة الغاشية
🕌89-سورة الفجر
🕌90-سورة البلد
🕌91-سورة الشمس
🕌92-سورة الليل
🕌93-سورة الضحئ
🕌94-سورة الشرح
🕌95-سورة التين
🕌96- سورة العلق  
🕌97- سورة القدر
🕌98-سورة البينة
🕌99-سورة الزلزلة
🕌100-سورة العاديات
🕌101-سورة القارعة
🕌102-سورة التكاثر
🕌103-سورة العصر
🕌104-سورة الهمزة
🕌105-سورة الفيل
🕌106-سورة قريش
🕌107-سورة الماعون
🕌108-سورة الكوثر
🕌109-سورة الكافرون
🕌110-سورة النصر
🕌111-سورة المسد
🕌112-سورة الاخلاص
🕌113-سورة الفلق
🕌114-سورة الناس
ا ֆ • • • • • • • • • • • • • ֆ

#مطور 💡:- @Ailnoor",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "سورة الفاتحه" or $text == "سوره الفاتحه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/15",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره البقره" or $text == "سورة البقره"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/4",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة ال عمران" or $text == "سوره ال عمران"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/5",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره النساء" or $text == "سورة النساء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/7",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المائده" or $text == "سوره المائده"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/8",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الانعام" or $text == "سورة الأنعام"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/9",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الانعام" or $text == "سورة الانعام"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/10",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاعراف" or $text == "سوره الاعراف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/11",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الانفال" or $text == "سوره الانفال"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/12",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره التوبه" or $text == "سورة التوبه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/13",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره يونس" or $text == "سورة يونس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/14",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة هود" or $text == "سوره هود"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/17",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة يوسف" or $text == "سوره يوسف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/18",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الرعد" or $text == "سوره الرعد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/21",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره ابراهيم" or $text == "سورة ابراهيم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/25",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الحجر" or $text == "سورة الحجر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/29",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النحل" or $text == "سوره النحل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/33",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الاسراء" or $text == "سورة الاسراء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/37",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الكهف" or $text == "سوره الكهف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/41",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة مريم" or $text == "سوره مريم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/45",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سوره طه" or $text == "سورة طه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/47",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الانبياء" or $text == "سورة الانبياء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/49",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الحج" or $text == "سوره الحج"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/51",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المؤمنون" or $text == "سوره المؤمنون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/53",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره النور" or $text == "سورة النور"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/56",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفرقان" or $text == "سوره الفرقان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/58",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الشعراء" or $text == "سوره الشعراء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/60",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره القصص" or $text == "سورة القصص"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/62",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره العنكبوت" or $text == "سورة العنكبوت"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/66",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الروم" or $text == "سوره الروم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/68",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة لقمان" or $text == "سوره لقمان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/70",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة السجده" or $text == "سوره السجده"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/72",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاحزاب" or $text == "سوره الاحزاب"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/74",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة سبأ" or $text == "سوره سبأ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/76",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره فاطر" or $text == "سورة فاطر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/78",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره يس" or $text == "سورة يس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/80",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الصافات" or $text == "سوره الصافات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/82",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة ص" or $text == "سوره ص"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/84",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الزمر" or $text == "سورة الزمر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/86",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة غافر" or $text == "سوره غافر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/88",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة فصلت" or $text == "سوره فصلت"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/91",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الشورئ" or $text == "سوره الشورئ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/93",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الزحرف" or $text == "سوره الزحرف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/95",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الدخان" or $text == "سوره الدخان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/97",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الجاثية" or $text == "سوره الجاثيه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/99",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاحقاف" or $text == "سوره الاحقاف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/101",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة محمد" or $text == "سوره محمد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/103",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفتح" or $text == "سوره الفتح"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/105",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الحجرات" or $text == "سورة الحجرات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/107",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة ق" or $text == "سوره ق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة الذاريات" or $text == "سوره الذاريات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/111",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الطور" or $text == "سوره الطور"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/115",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة القمر" or $text == "سوره القمر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/121",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة الرحمن" or $text == "سوره الرحمن"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/123",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الواقعه" or $text == "سوره الواقعه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/125",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الحديد" or $text == "سوره الحديد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/127",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورةه المجادله" or $text == "سوره المجادله"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/129",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الحشر" or $text == "سورة الحشر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/131",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الممتحنه" or $text == "سوره الممتحنه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/133",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الصف" or $text == "سوره الصف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/135",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سوره الجمعه" or $text == "سورة الجمعه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/137",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة المنافقون" or $text == "سوره المنافقون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/139",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة التغابن" or $text == "سوره التغابن"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/141",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة الطلاق" or $text == "سوره الطلاق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/143",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة التحريم" or $text == "سوره التحريم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/145",
 reply_to_message_id =>$message->message_id, 
]);


if($text == "سورة الملك" or $text == "سوره الملك"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/147",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سوره القلم" or $text == "سورة القلم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/149",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المعارج" or $text == "سوره المعارج"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/152",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة نوح" or $text == "سوره نوح"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/154",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة الجن" or $text == "سوره الجن"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/156",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة المزمل" or $text == "سوره المزمل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/158",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة المدثر" or $text == "سوره المدثر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/160",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورةه القيامه" or $text == "سوره القيامه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/162",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة الانسان" or $text == "سوره الانسان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/164",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة المرسلات" or $text == "سوره المرسلات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/166",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة نبأ" or $text == "سوره نبأ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/168",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة النازعات" or $text == "سوره النازعات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/170",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره عبس" or $text == "سوره عبس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/172",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة التكوير" or $text == "سوره التكوير"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/174",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الانفطار" or $text == "سورة الانفطار"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/176",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره المطففين" or $text == "سورة المطففين"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/178",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الانشقاق" or $text == "سورة الانشقاق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/180",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة البروج" or $text == "سورة البروج"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/302",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الطارق" or $text == "سورة الطارق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/304",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الاعلئ" or $text == "سورة الاعلئ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/306",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الغاشيه" or $text == "سوره الغاشيه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/308",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفجر" or $text == "سوره الفجر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/310",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة البلد" or $text == "سوره البلد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/312",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الشمس" or $text == "سورة الشمس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/314",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الليل" or $text == "سوره الليل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/316",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الضحئ" or $text == "سوره الضحئ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/318",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الشرح" or $text == "سوره الشرح"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/320",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة التين" or $text == "سوره التين"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/322",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة العلق" or $text == "سوره العلق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/324",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره القدر" or $text == "سورة القدر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/326",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الزلزلة" or $text == "سورة الزلزله"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/328",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره البينة" or $text == "سورة البينة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/330",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة العاديات" or $text == "سوره العاديات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/332",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره القارعه" or $text == "سورة القارعه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/334",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره التكاثر" or $text == "سورة التكاثر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/336",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره العصر" or $text == "سورة العصر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/338",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الهمزة" or $text == "سورة الهمزة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/340",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفيل" or $text == "سوره الفيل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/342",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة قريش" or $text == "سوره قريش"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/344",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الماعون" or $text == "سوره الماعون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/346",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "" or $text == ""){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الكوثر" or $text == "سوره الكوثر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/348",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الكافرون" or $text == "سورة الكافرون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/350",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النصر" or $text == "سوره النصر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/352",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المسد" or $text == "سوره المسد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/354",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاخلاص" or $text == "سوره الاخلاص"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/356",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفلق" or $text == "سوره الفلق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/358",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الناس" or $text == "سورة الناس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/360",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "مطور" or $text == "المطور"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مـطور البـوت 🍂 :- @Ailnoor

تـُواصـل المحضـوريـن 🛡
:- @alsaed_ali_bot",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "سوره الحاقة" or $text == "سورة الحاقة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/364",
 reply_to_message_id =>$message->message_id, 
]);
}
