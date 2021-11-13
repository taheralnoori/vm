<?php
ob_start();
define('API_KEY','1710811058:AAEyhb5GQgd-ZYhvuXG-cMWUAPlBdOalZF4');
echo "https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];
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
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$from_id = $message->from->id;
$data = $update->callback_query->data;
$name = $message->from->first_name;
$from_id = $message->from->id;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$username = $update->message->from->username;
$reply = $message->reply_to_message->message_id;
/////////////////////////////////////////////////

if($text != null){
	if($text == '/start'){
	  bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"• اهلا بك ؛ [$name](tg://user?id=$chat_id) 
- في بوت تحليل الشخصية ♥️.
- كل ماعليك هو الاجابة ع الاسألة التالية🧾.
- سيقوم البوت بتحليل شخصيتك .
- من خلال اجابتك على الاسألة الخمسة ..
- كل ما عليك الاجابه علئ بعض الاسئله ..
• مطور البوت @Taher9ja ..",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'إبدأ بتحليل شخصيتك .📄','callback_data'=>"Q1"]],
[['text'=>'اللعاب للتسلية🕹','callback_data'=>"/play"]],
[['text'=>"⚜️|🌚 مطور البوت ",'url'=>"https://t.me/Taher9ja"],['text'=>"📌|📢 قناة البوت",'url'=>"https://t.me/engeeringeletical"]],
]
])
]);
}}
if($data == "Q1"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"السؤال الاول: ماهي هوايتكَ المُفضلة ؟",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الرسم ؟','callback_data'=>"A1"],['text'=>'الخياطة ؟','callback_data'=>"A2"]],
[['text'=>'التصوير ؟','callback_data'=>"A3"],['text'=>'الطبخ ؟','callback_data'=>"A4"]],
[['text'=>'الرقص ؟','callback_data'=>"A5"]],
]
])
]);
}
if($data == "A1"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"أنتَ شخص يُحب العزلة مع إنكَ لديكَ الكثير من الأصدقاء ، أنتَ شخص حنون وصادق في مشاعرِه ، رومانسي قي بعضِ الاحيان ، طبيعي لاتُحب التصنع .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q2"]],
]
])
]);
}
if($data == "A2"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"أنت شخص غير طموح تُضيع الكثير من وقتِك ، غالباً ماتفشل في علاقاتِك ، شخصيتُكَ قوية ، غير جاد في عِلاقات الحُب ، شخص قنوع بِما لديه .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q2"]],
]
])
]);
}

if($data == "A3"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"أنتَ شخص رومانسي ، طموح جداً لاتبحث عن الحُب بل تبحث عن الوفاء ، نضراتُك دائماً مُرتبكة ، حساس ، أنتَ شخص يُحب النوم والأحلام ، لديكَ قلق عِندما تواجِه مَن تُحب .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q2"]],
]
])
]);
}
if($data == "A4"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"أنتَ شخص مرح وخفيف الظل ، لاتؤمن بالحُب مِن النظرة الأولى ، شخصيتُكَ ضعيفة جداً ، مُتكبر ، اصدقائُكَ مُحددون و قليلون .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q2"]],
]
])
]);
}
if($data == "A5"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"أنتَ شخص راقي تتميز بِصفات لا يتملكها كُل الناس ، جميل ، في اغلب الأوقات رومانسي ، حساس وتُحب الأناقة .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q2"]],
]
])
]);
}
if($data == "Q2"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"السؤال الثاني: ماهو لونكَ المُفصل ؟",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'بنفسجي؟','callback_data'=>"B1"],['text'=>'برتقالي؟','callback_data'=>"B2"]],
[['text'=>'ازرق؟','callback_data'=>"B3"],['text'=>'احمر؟','callback_data'=>"B4"]],
[['text'=>'اصفر؟','callback_data'=>"B5"],['text'=>'اخضر؟','callback_data'=>"B6"]],
]
])
]);
}
if($data == "B1"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"نت شخص بسيط ومبدع ، اجتماعي ، جدير بثقه الجميع ، تحب تكوين علاقات جديدة ، تمتلك روح الدعابه والحكمه في نفس الوقت .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q3"]],
]
])
]);
}
if($data == "B2"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"أنت شخص جذاب ، ودود ، نشيط ، عفوي ، تحب إسعاد الآخرين حتى لوكان ذلك ع حساب سعادتك الشخصية ، طيب القلب ، مخلص لعائلتك واصدقائك .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q3"]],
]
])
]);
}


if($data == "B3"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"أنت شخص عفوي ، جميل ، أنيق ، تحب أن تبذل كُل مافي وسعك لتثبت نفسك وللآخرين أنك الافضل على الإطلاق ، رومانسي ، شجاع .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q3"]],
]
])
]);
}
if($data == "B4"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"أنت شخص لبق ، لديك أخلاق عالية ، نشيط ، عاطفي ، إجتماعي ، احياناً غيور .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q3"]],
]
])
]);
}
if($data == "B5"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"أنت شخص قيادي ، لديك القدرة على فهم المشاكل وحلَّها ، تتمتع بشخصيه قوية ، هادئة وعقلانية ، تحفظ الاسرار .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q3"]],
]
])
]);
}
if($data == "B6"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"أنت شخص حذر ، لاتثق بالآخرين بسهولة ولاتقع بالحب بسهولة ايضاً ، قادر على تحمُل المسؤولية ، ومُتقِن لِعملك .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q3"]],
]
])
]);
}
if($data == "Q3"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"السؤال الثالث: أختر رقم من الارقام التالية",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'1','callback_data'=>"C1"],['text'=>'5','callback_data'=>"C2"]],
[['text'=>'2','callback_data'=>"C3"],['text'=>'7','callback_data'=>"C4"]],
[['text'=>'4','callback_data'=>"C5"],['text'=>'8','callback_data'=>"C6"]],
]
])
]);
}
if($data == "C1"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"مايميزك عن غيرك هو أنك تعتمد ع مبدأ كل شيء أو لاشيء في حياتك ، فأنت لا تختار الوسطية ولا ترضى بأنصاف الحلول ، أما مشاعر الحب لديك تنقلب بيرعة الى كره ونفور ، يعتبرك الآخرين سريع الغضب و مندفع ولا تتصرف بعقلانية .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q4"]],
]
])
]);
}
if($data == "C2"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"شخصيتك من اكثر إثارة للجدل ، فمحاولة حل الالغاز الأكثر تعقيدا أسهل من فهم شخصيتك ، السبب يرتبط بأنك مازلت تحاول اكتشاف ذاتك فكلما تكتشف مجموع من الخصال الخاصه بك تقوم يتغيير شخصيتك و تبدء ببناء شخصيه جديدة أما الآخرون فيعتقدون أنك من النوعيه المتحفظة الغريبة بعض الشيء .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q4"]],
]
])
]);
}
if($data == "C3"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"نت عبارة عن كتاب مفتوح ، شخصيه اجتماعيه ومحبوبة ، مشكلتك الوحيدة في أنك تقع في الحب بسهولة ، والبعض يستخدم طيبه قلبك لأستغلالك وإلحاق الأذى بِك ، أنت تعيش وفق مبدأ المخاطرة والخسارة أفضل من عدم القيام بشيء ، تحاول اخفاء جانبك الحساس عن الآخرين لتحمي نفسك .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q4"]],
]
])
]);
}
if($data == "C4"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"نت من الاشخاص الذين يخافون السباحة عكس التيار ، تملك نظره مميزة وفريدة تجاه العالم ، رغم قناعاتك واهتماماتك التي تبدو غريبه للآخرين ، المقابل أنت لاتكترث كثيراً لِما يظنون أو يفكرون ، أنت من النوعيه التي لاتسير بسكل أعمى خلف الحشود ، ولاتمتلك عقليه القطيع ، لاتخاف من رأي المجتمع .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q4"]],
]
])
]);
}
if($data == "C5"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"أنت تميل الى رؤيه المعاني العميقه المرتبطه بكل شيء في حياتك ، أنت بعيد كل البعد عن الأندفاع والعشوائيه وتفكر بكل خطوة تقوم بها بشكل عقلاني ومنطقي الآخرون يعتبرونك حل لمشاكلهم لذلك يلجأون إليك للحصول ع النصائح .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q4"]],
]
])
]);
}
if($data == "C6"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"أنت شخص عقلاني وحكيم بغض النظر عن عمرك ، وكأنك تحمل خبرة سنوات طويلة جداً جعلتك تملك نظرة مميزة للعالم ، رغم كونك من الاشخاص الذين يتعلمون من اخطائهم ، لكنك تدرك أن حياتك لن تسير دائما كما تريد او تخطط لها .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q4"]],
]
])
]);
}
if($data == "Q4"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"السؤال الرابع : ماهو اكثر شي تحبه ؟",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'القطط؟','callback_data'=>"D1"],['text'=>'الغيوم؟','callback_data'=>"D2"]],
[['text'=>'النحل؟','callback_data'=>"D3"],['text'=>'الشجر؟','callback_data'=>"D4"]],
[['text'=>'الورد؟','callback_data'=>"D5"]],
]
])
]);
}
if($data == "D1"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"أنت شخصية محبوبة جدا من قبل أصدقائك.",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q5"]],
]
])
]);
}
if($data == "D2"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"تمتلك شخصية قوية وجادة ومحبة للنقاش ، لا تعرف الكسل ونشيط دائما في كل اعمالك .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q5"]],
]
])
]);
}
if($data == "D3"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>" أنت تمتلك شخصية مزاجية ومتعدلبة دائما لديك غرور وكبرياء قوي.",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q5"]],
]
])
]);
}
if($data == "D4"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>" أنت انسان حساس تنجرح من ابسط الامور .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q5"]],
]
])
]);
}
if($data == "D5"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"أنت  شخصية كريمة جدا لديك الكثير من الطيبة والحنية وانت مثال على الصبر وحب الخير لكل الناس .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q5"]],
]
])
]);
}
if($data == "Q5"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"السوال الخامس : اي هندسة تدرس ؟",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'هندسة كهرباء؟','callback_data'=>"E1"],['text'=>'هندسة نفط؟','callback_data'=>"E2"]],
[['text'=>'هندسة مدني؟','callback_data'=>"E3"],['text'=>'هندسة طيران؟','callback_data'=>"E4"]],
]
])
]);
}
if($data == "E1"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"يبدوا عليك التعب وارهاق ومبين عليك تعبان كلش من ورى تيسلا والله حقك كهرباء ضيم وتعب وخلطة العمر 😁 بس انت صوجك ترى يلا اقرا وعلك شهاتدك بحايط🌚",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q6"]],
]
])
]);
}
if($data == "E2"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>" الله نفط تعيين مركزي 🌚 اجا مثلنا احنا كهرباء .",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q6"]],
]
])
]);
}
if($data == "E3"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"هلا بلخلفة 👷🏿‍♂️ عمي نقدر تعبكم بس ترى هم ما تتعييون مثل كهرباء تالي يرشونكم بمي حار 😂😂 يلا كلنا على هذا طريق لا تضوج",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q6"]],
]
])
]);
}
if($data == "E4"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>" حجي بيناتنا  انتم مرتاحين بس كاعدين بطيارة وسفر مع علم محد يتعيين 😂😂",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q6"]],
]
])
]);
}
if($data == "Q6"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"السوال السادس : كم ستتغير في السنوات الخمس القادمة اختر لون ؟",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'أصفر','callback_data'=>"X1"],['text'=>'أسود','callback_data'=>"X2"]],
[['text'=>'برتقالي','callback_data'=>"X3"],['text'=>'أخضر','callback_data'=>"X4"]],
]
])
]);
}
if($data == "X1"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>" ستزداد طيبة في قلبك😉",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q7"]],
]
])
]);
}
if($data == "X2"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"سأزداد حكمة وذكاء🙂",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q7"]],
]
])
]);
}
if($data == "X3"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ستظهر علامات جمالي😎",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q7"]],
]
])
]);
}
if($data == "X4"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"سأزداد حلاوة🙃",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q7"]],
]
])
]);
}
if($data == "Q7"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"السؤال الثاني: ماهو أكثر شي تحبه من الصورة ❓",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🐝 نحلة؟','callback_data'=>"Z1"],['text'=>'☁️ غيمة؟','callback_data'=>"Z2"]],
[['text'=>'🐈 قطة؟','callback_data'=>"Z3"],['text'=>'🌞 شمس؟','callback_data'=>"Z4"]],
[['text'=>'🌹 وردة','callback_data'=>"Z5"],['text'=>'🌳 شجرة؟','callback_data'=>"Z6"]],
]
])
]);
}
if($data == "Z1"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"تمتلك شخصية قوية وجادة ومحبة للنقاش ،لا تعرف الكسل ونشيط دائما في كل اعمالك",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"95"]],
]
])
]);
}
if($data == "Z2"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"أنت تمتلك شخصية مزاجية جدا ومتقلبة دائماً لديك غرور وكبرياء قوي🤪",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"95"]],
]
])
]);
}


if($data == "Z3"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"محبوب اختيارك للقطة يعني انك شخصية محبوبة جدا من قبل أصدقائك🤗",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"95"]],
]
])
]);
}
if($data == "Z4"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>" انت صاحب شخصية مبتهجة وتأخذ الامور ببساطة كبيرة جدا لكن دائما ما يجتاحك الغرور بنفسك😎",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"95"]],
]
])
]);
}
if($data == "Z5"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"أنت انسان حساس تنجرح من ابسط الامور🤠",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"95"]],
]
])
]);
}
if($data == "Z6"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"شخصية كريمة جدا لديك الكثير من الطيبة والحنية وانت مثال على الصبر وحب الخير لكل الناس😸",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"95"]],
]
])
]);
}
if($data == "95"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"تم اكتمال  اسئلة سوف نجدد اسئلة عن قريب ان  شاء الله قم بمعرفة شخصيتك",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• تحليل الان .🧾','callback_data'=>"F1"]],
]
])
]);
}
$SK = array("مغامر ،🤍","فضولي ،🌿","شجاع ،💪","محبوب ،😻","كسول ،😴","غيور ،🤦‍♂️","منعزل ،👩‍🦯","اجتماعي ،🙋‍♂️","عصبي ،😾","مسالم ،💗","حنون ،😽");
$sz = array_rand($SK, 1);
$sau = $SK[$sz];
if($data == "F1"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"• تم معرفه شخصيتك الان ..
• شخصيتك 📄👇🏻..
• $sau ؛

• قم بمشاركه البوت🌚 ..",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• البدايه 📨.','callback_data'=>"5"]],
]
])
]);
}
if($data == "5"){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"• اهلا بك ؛ [$name](tg://user?id=$chat_id) 
- في بوت تحليل الشخصية ♥️.
- كل ماعليك هو الاجابة ع الاسألة التالية🧾.
- سيقوم البوت بتحليل شخصيتك .
- من خلال اجابتك على الاسألة الخمسة ..
- كل ما عليك الاجابه علئ بعض الاسئله ..
• مطور البوت @Taher9ja ..",
'parse_mode' => "MarkDown",
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'إبدأ بتحليل شخصيتك .📄','callback_data'=>"Q1"]],
]
])
]);
    
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$textmsg = $message->text;
$sudo = 1558989167;
$chatid = $update->callback_query->message->chat->id;
$user_id = $message->from->id;
$user = $message->from->username;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $message->from->first_name;
$from_id = $message->from->id;
$mid = $message->message_id;
$dev_i = "$sudo";
if($text == "/play"){$from_id = $message->from->id;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@php_i&user_id=".$from_id);
if ($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"• عـذراََ ! 🤚🏿

• يجب عليك الاشتراك في قناة اولا➕
• لـ استخدام البوت 🃏

• القناة 🥤@engeeringeletical
",
]);return false;}
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"",'reply_to_message_id'=>$message->$message_id,]);}

#الاذاعه
$u = explode("\n",file_get_contents("data/dev_i.txt"));
$c = count($u)-1;
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("data/dev_i.txt", $chat_id."\n",FILE_APPEND);
 }
if($text == "الاوامر" and $chat_id == $sudo){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"اخـتر ما تريـد الان 💡",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"عدد الاعضـاء 🙎🏻‍♂️",'callback_data'=>"count"]],
            [['text'=>"اذاعـة 🥤",'callback_data'=>"send_all"]],
        ] ])]);}
if($data == "count" and $chat_id2 == $sudo){ //مشتركين البوت = مهمة 1
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عدد مشتركين البوت📬 : $c",
        'show_alert'=>true,
]);}
$mode = file_get_contents("data/deve.txt");
if($data == "send_all" and $chat_id2 == $sudo){
    file_put_contents("data/deve.txt","yas");
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
    'text'=>"ارسل رسالتك الان 📩 وسيتم نشرها لـ $c مشترك",   'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"الغاء🚫",'callback_data'=>"off"]],]])]);}
if($text and $mode == "yas" ){
    for ($i=0; $i < count($u); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text", ]);}} 
if($data == "off"){
    file_put_contents("data/deve.txt","no");
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
    'text'=>"تم الالغاء",]);
}
 if ($text == 'الاعضاء' and $chat_id == $sudo) {
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"مستخدمين البوت 🤖 الخاص بك :- $c"
    ]);
  }

if($data == "/play"){
    bot('EditMessageText',[
'chat_id'=>$chat_id2,    
'message_id'=>$message_id2,
'text'=>"•   اهلا بك
- 🙌في قسم الالعاب 

- القسم يحتوي على مجموعة  من اللعاب  🌚


- اختيار نوع العبه 🃏 ثم الضغط ع زر [ ابدا ] 🤹🏿‍♀️

• اختر الان العبه 👇🏿 '
• مطور البوت @Taher9ja ..",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'من سيربح المليون 💰','callback_data'=>"mle"],['text'=>'لعـبة مريم 💁🏼‍♀️','callback_data'=>'php_i']],
[['text'=>'لو خيروك 💳','callback_data'=>'lo'],['text'=>'المحيبس ✌️👊🏼','callback_data'=>'mhb'],['text'=>'اللعاب العقل🧠💡','callback_data'=>'ja']],
[['text'=>' حزورة بليـره ⚖️','callback_data'=>'hzo'],['text'=>" حوت الازرق 🐳",'callback_data'=>'hot']],
[['text'=>' العودة الى القائمة الرئسية🔙','callback_data'=>'main111']],
[['text'=>'تابع ☎️','url'=>'https://t.me/engeeringeletical']],]])]); }
#محيبس
if($data=="mhb"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
'text'=>"- مرحبا بك في 🗳
- لعبة المحيبس 👊🏿👊🏼

- اضغط ع زر [ابدا]  لـ بدا العبه الان 🥤

- اضغط ع زر [الصفحه الرئيسيه ] للرجوع الى القائمه الاولئ 🚸",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"ابـدء 🎮",'callback_data'=>"ii1"]],
[['text'=>'الصفحة الرئيسيه 🔖','callback_data'=>'هدوء']],   ]])]);}
if($data=="og"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
'text'=>"- مرحبا بك في 🗳
- لعبة المحيبس 👊🏿👊🏼

- اضغط ع زر [ابدا]  لـ بدا العبه الان 🥤

- اضغط ع زر [الصفحه الرئيسيه ] للرجوع الى القائمه الاولئ 🚸",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"ابـدء 🎮",'callback_data'=>"ii1"]],
[['text'=>'الصفحة الرئيسيه 🔖','callback_data'=>'هدوء']],]])]);}

if($data=="no"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
'text'=>"يرجــع 😹بأسم الشرقيه",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"رجوع 🔙",'callback_data'=>"og"]
],
[['text'=>"تابع قناتي🔫📡",'url'=>"https://t.me/engeeringeletical"]],]])]);}
if($data=="✖"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
'text'=>"يرجــع 😹باســم الشرقيه",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع 🔙",'callback_data'=>"og"]],]])]);}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data=="ii1"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
'text'=>"اختر العضمه الصحــيحه ☘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"no"]],
[['text'=>"👊",'callback_data'=>"ii2"]],
[['text'=>"👊",'callback_data'=>"n1"]],]])]);}
if($data=="ii2"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
'text'=>"العــب وخوش تلعب 💍",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تلعب",'callback_data'=>"ii3"]],]])]);}
if($data=="ii3"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
'text'=>"اختر العضمه الصحــيحه ☘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"ii4"]],
[['text'=>"👊",'callback_data'=>"n1"]],
[['text'=>"👊",'callback_data'=>"no"]],]])]);}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data=="ii4"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
'text'=>"العب وخوش تلعب 💍",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تلعب",'callback_data'=>"ii5"]],]])]);}
if($data=="ii5"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
'text'=>"اختر العضمه الصحــيحه ☘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"no"]],
[['text'=>"👊",'callback_data'=>"ii6"]],
[['text'=>"👊",'callback_data'=>"n1"]],]])]);}
if($data=="ii6"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
'text'=>"تلعب خوش تلعب 💍",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تلعب",'callback_data'=>"ii7"]],]])]);}
if($data=="ii7"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
'text'=>"اختر العضمه الصحــيحه ☘ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"no"]],
[['text'=>"👊",'callback_data'=>"n1"]],
[['text'=>"👊",'callback_data'=>"ii8"]],]])]);}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data=="ii8"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
'text'=>"تلعب خوش تلعب 💍",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تلعب",'callback_data'=>"ii9"]],]])]);}
if($data=="ii9"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
'text' =>"اختر العضمه الصحيحه ☘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"ii10"]],
[['text'=>"👊",'callback_data'=>"no"]],
[['text'=>"👊",'callback_data'=>"n1"]],]])]);}
if($data=="ii10"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
'text'=>"تلعب خوش تلعب 💍",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تلعب",'callback_data'=>"ii11"]],]])]);}

#خيروك
if($data == 'lo'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>"- مرحبا بك في 🗳
- لعبة لو خيروك  🤷🏿‍♀️

- اضغط ع زر [ابدا]  لـ بدا العبه الان 🥤

- اضغط ع زر [الصفحه الرئيسيه ] للرجوع الى القائمه الاولئ 🚸",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>"ابـدأ الان 🎓",'callback_data'=>'hmd1']],
  [['text'=>'الصفحة الرئيسيه 🔖','callback_data'=>'هدوء']],   
            ]
        ])
        ]);}
if($data == 'hmd1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'اهــلا بك عزيــزي ✨

اخــتر جنســك/ج لبدأ اللعــب',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'بــنت🙆','callback_data'=>'bnt']],
        [['text'=>'ولــد','callback_data'=>"wla"]],
      ]
    ])
  ]);
}
if($data == 'wla'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'عزيــزي🌝⚡

لو خيــروك【تعــض روحك/تضرب دغلــه بالكاع😂】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'تعــض روحك😂','callback_data'=>'s1']],
        [['text'=>'تضــرب دغله😝😂','callback_data'=>'s2']],
      ]
    ])
  ]);
}

if($data == 's1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'#ههههه😂 روح عــض روحــك يبا😂',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي📌','callback_data'=>'g1']],
      ]
    ])
  ]);
}
if($data == 's2'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'يارب كــون تطيح وتتكسر😂😕',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🎐','callback_data'=>'g1']],
      ]
    ])
  ]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data == 'g1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لــو خيــروك👿

【تطلــع بالشارع مــصلخ/تاكل بصل بالريــوك😂】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'تطــلع مصلخ😂😒','callback_data'=>'r1']],
        [['text'=>'تاكــل بصل😝😂','callback_data'=>'r2']],
      ]
    ])
  ]);
}
if($data == 'r1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'هيــج وكون بنات بالشــارع😂🌚

وتصيــر مضحكــه يالخايس يالمعفــن☺😂',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💡','callback_data'=>'g22']],
      ]
    ])
  ]);
}
if($data == 'r2'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ع اســاس انته ريحتك حلوه😂
وتاكــل بصل من الصبح😂روح حمبي روح👿',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي📤','callback_data'=>'g22']],
      ]
    ])
  ]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data == 'g22'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لو خيــروك💭

【تاكــل مركــة كرفس🌴/تاكــل شوربة عكاريك🐸】

ه────────────────',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'مركــة كرفس😋😹','callback_data'=>'sel']],
        [['text'=>'شوربــة عكاريك😹','callback_data'=>'sel1']],
      ]
    ])
  ]);
}
if($data == 'sel'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ترهــ ماكــو مركة كرنفــس😴😹

عقــل المزنبــر🌝😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💠','callback_data'=>'sec']],
        
      ]
    ])
  ]);
}
if($data == 'sel1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'مو ؏ اســاس انته باليابــان😹🌚

اكعــد عمي لتزوع عليــنه🌝📛',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي📮','callback_data'=>'sec']],   
      ]
    ])
  ]);
}
if($data == 'sec'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ياحبيــصي💥

لو خيــروك【تكســر شمعه براسك😮😹/تاكل ذيــل جريدي🌝😢】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اكســر شمعه👿','callback_data'=>'shma']],
        [['text'=>'اكــل ذيل جريدي😝😹','callback_data'=>'grede']],
      ]
    ])
  ]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data == 'shma'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'اي وابــوك يبتلي بخياطاتــك😴😹

اكعــد عمي اكــعد منو جابــرك🌝',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🚶','callback_data'=>'t']],   
      ]
    ])
  ]);
}
if($data == 'grede'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ربــي😊
دعــوة مطلــكه حامــل😴😹

كــون يطكك طاعون وساحون ودولمه ماعــون🌚😹
كول (اي) كلــت اي ربــي كون يطكــه زهايمر وبطنه سهــال وينســه مكان الحمام😒😂
ياكــل جريدي🌚😹غير عمك ياباني واني ما ادري 😕😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💠','callback_data'=>'tn']],
      ]
    ])
  ]);
}
if($data == 'tn'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لو خيــروك😳😹

【تطلع بالشارع تصيح انــي حامل🎅/لو تنكع شعرك ماي وطحين😮😂】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اطــلع بالشارع واصــيح😏','callback_data'=>'shard']],
        [['text'=>'انكع شــعري مي وطحيــن😨','callback_data'=>'then']],
      ]
    ])
  ]);
}
if($data == 'shard'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'مبــروك😹
يتربــى بعزك🌚😹شكــد عليك بيا شهــر😨😂',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🚶','callback_data'=>'sec45']],
      ]
    ])
  ]);
}
if($data == 'then'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'اي وحــط شوي ملح🌚⚡

وانطــي لامك تخبــزه🌝😹

كون صخونــه مال حصــونه🌚😂',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🌟','callback_data'=>'sec45']],     
      ]
    ])
  ]);
}
if($data == 'sec45'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لــو خيــروك🙊🙀

【تزوج عبــده😹ونادره/لو حاتــه وعايــزه😹🌚】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'عبــده ونادره🌝','callback_data'=>'abda']],
        [['text'=>'حلــوه وعيــزه🌚','callback_data'=>'hloa']],
      ]
    ])
  ]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data == 'abda'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'و الله عرفــتك😸👐

حتخــتار العبــده الصنــف مالتك+مطية كراب🙀😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي▶','callback_data'=>'srag']],
      ]
    ])
  ]);
}
if($data == 'hloa'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ليــش عينــي وشبيهه العبده ماختاريتهه😏

ع اســاس ابوك روسي وامك باكســتانيه🌚
لو ليــن وصخه مثلــك😔😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي✅','callback_data'=>'srag']],
      ]
    ])
  ]);
}
if($data == 'srag'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لــو خيــروك🌚

【تشيــل جسمك شيره🌚💥/تزيــن اكــرع😮】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اشيل جســمي شيره🙊','callback_data'=>'gsme']],
        [['text'=>'ازيــن كــرعه😸','callback_data'=>'kraa']],
      ]
    ])
  ]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data == 'gsme'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ءوووف😍😹

وتعــالي وره 12 نســولف🙀😗',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي😹','callback_data'=>'gg12']],
      ]
    ])
  ]);
}
if($data == 'kraa'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'#ههههههههههههه

وتطــلع جنــك خص... شارده🌚😹
💥💃💃💃💃💥',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'كمــل يبه😂','callback_data'=>'gg12']],
      ]
    ])
  ]);
}
if($data == 'gg12'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'حمبقلبــي😎💥

لو خيــروك【تروح لبيت جيرانكم تكلهم احب بتكم💃😹/
لــو تروح للصيــدليه تكله وين اخلي التحميــله🙊😹】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اروح لجيــرانه🙀','callback_data'=>'gerana']],
        [['text'=>'اروح لأبــو الصيدليــه😹','callback_data'=>'sedlea']],
      ]
    ])
  ]);
}
if($data == 'gerana'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'وحضــرك 50 مليــون فصل😹

واتحمــل فد 100 ع بابــكم 🌚😹
واستعــد للزواج منــهه💃😹هيج وتطلــع جكمه😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🙈','callback_data'=>'ggg1']],
      ]
    ])
  ]);
}
if($data == 'sedlea'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'نهنهنه😹🌚

وخــلك كفــو وتحمل الجلاليــغ😹🌝💃

💃💃',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💫','callback_data'=>'ggg1']],
      ]
    ])
  ]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data == 'ggg1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ممم لو خيــروك😾

【تاكــل حنطه🌾/تطك جلب بالشارع جلاغ💃😹】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'تاكــل حنطــه🌾','callback_data'=>'hnta']],
        [['text'=>'تضرب الجلــب🐶','callback_data'=>'glp']],
      ]
    ])
  ]);
}
if($data == 'hnta'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ايباااخ😏

روح الزاجــل 🐦البداخلــك مسيطره عليك😸
بيــك خير اضرب الجلــب💃💥😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🔓','callback_data'=>'g88']],
      ]
    ])
  ]);
}
if($data == 'glp'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'اي وتضــل ثابت لو اركض اخوي عامــر😹💃

لتحمــه بــس😹ها اركض اركض دوس🏃🏃🏃',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💛','callback_data'=>'g88']],
      ]
    ])
  ]);
}
if($data == 'g88'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'يامحفــوض الســلامه😂والبكــه

لو خيــروك📌【تضــرط ببطل وتشم ريحته/تبــوس صخله بحلــكها😴😂】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اضرط واشمــهه😂','callback_data'=>'lo0']],
        [['text'=>'ابوس صخــله😢','callback_data'=>'loo0']],
      ]
    ])
  ]);
}
if($data == 'lo0'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'يالخــايس يالمعفــن😸😹

شنــي هالعقليــه الذبانيــه العندك😮😹

تخلــيك تشم ريحــة ضراطك الحمبقازيــه👽😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💥','callback_data'=>'gefara']],
        
      ]
    ])
  ]);
}
if($data == 'loo0'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ماوصيــك اخــذلك حلك مرتــب😹

#هههههههههههههه',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💎','callback_data'=>'ali']],
        
      ]
    ])
  ]);
}
if($data == 'bnt'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'💥💥💥💥💥💥

يا امــﮧ الكمــﮧل😹/لو خيــروج🌚💃

【تغسلين شعــرج بنفط🙊🙀/تكمشــين صرصر بأيدج😹】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اغســل شعري بنفط😢','callback_data'=>'nft']],
        [['text'=>'اكمــش صرصر😏😹','callback_data'=>'srsr']],
      ]
    ])
  ]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
    if($data == 'nft'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'يــلا عيــني💃💃

غنــي وياي🔇🔇
ام الكمل والصيــبان😹💃💃ها ها ام الكمــل والصيــبان😹💃💃',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💛','callback_data'=>'tlale']],
      ]
    ])
  ]);
}
if($data == 'srsr'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'احــم🌚😹

هايــمنو التكمــش صرصر🌚😹
متأكده🌚😹 هاذ ويهج😹💃',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💖','callback_data'=>'tlale']],
      ]
    ])
  ]);
}
if($data == 'tlale'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'يابعــد روح البــوت والمطور🌚😹

لــو خيروك🙀

【تطلعين بــدون مكياج وكلنا العراق😹/

ترحــين لأمج تكليلــهه اني مزوجه بالسر🙊😹】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'تطلعــين بدون مكياج😝💛','callback_data'=>'mkeag']],
        [['text'=>'تكــلين لامج🙀','callback_data'=>'amg1']],
      ]
    ])
  ]);
}
if($data == 'mkeag'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'والله جــذابه😹

وعــلي جذابه😹 والحسين جذابه😹
المصنهــره 😹المزنعــره😴😹
انــتي ويهج ليكول مطــور البوت😏😹
وطلعين بدون مكياج😹💃💃
نكطــع واهس الشباب بالــزواج😹💃💃🌚',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💫🙊','callback_data'=>'telale1']],
      ]
    ])
  ]);
}
if($data == 'amg1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'كــفو🌚💪

وخــلج قويــه حبحياتي😼
ولتبجــين من اول راجــدي😹😹😹😹
💃💃💃💃💃💃',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💥','callback_data'=>'telale1']],
      ]
    ])
  ]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data == 'telale1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لــو خيــروج🌚😹

【تطــلعيــن بــدون 👙/🌚😹/تنطــين حلك لعبــد🌚😹】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اطلع بــدون 👙','callback_data'=>'stean']],
        [['text'=>'انطــي حلك لعبــد🌚','callback_data'=>'abdd']],
      ]
    ])
  ]);
}
if($data == 'stean'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'وف🙊😹

وتعــاي يم المطــور😹💃
يريــد يسولف وياج🌚😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي😒','callback_data'=>'telale2']],
      ]
    ])
  ]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data == 'abdd'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'جذاااااااااااااااااااابه🌚😹

هايــه $name 😹😹

جذابه هو انتن تدورن حاتيــن🌚😹النوب تنطين حلــك لعبد🌚',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي😸','callback_data'=>'telale2']],
      ]
    ])
  ]);
}
if($data == 'telale2'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'كمشــتج سميــره😹

تعــاي تعاي 😹 لو خيــروج🌚👇

【تصــومين سنه😢/تاكــلين شوربــة عكاريك😍😹】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اصــوم سنه😢','callback_data'=>'asom']],
        [['text'=>'اكــل شوربة عكاريــك😢😹','callback_data'=>'akarek']],
      ]
    ])
  ]);
}
if($data == 'asom'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'جنــي سمعت وحده تكــول اصوم🌚😨

سميــره لجذبيــن😒😹
وماعــون الباميــه منو ياكــله👿😹يوميه
اهووو هم كالت اني برنسيس ما اكــل🌚😹
هم بجت 😒😹يلا يلا صومي بس لتبجين😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🙊','callback_data'=>'telale3']],
      ]
    ])
  ]);
}
if($data == 'akarek'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'والكيــاته🌚😹

والمامــا ما اكول هاي الءكله😹

هج هاذ ماعون شوربــة عكاريــك|🐸|',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🐸','callback_data'=>'telale3']],
      ]
    ])
  ]);
}
if($data == 'telale3'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'سميــره😹

لو خيــروج🌚😹

【عريــس🙊💑/باريــس🗼】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'عريــس🙊💥','callback_data'=>'ares3']],
        [['text'=>'باريــس🗼','callback_data'=>'pares']],
      ]
    ])
  ]);
}
if($data == 'ares3'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'عفــيه الحبــابه🌚💃😹

بــس العريس علمــود الستــر😏💛
لــو بس تــردن تعرسن جمبك لالا😹💃🚶',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🙊','callback_data'=>'telale7']],
      ]
    ])
  ]);
}
if($data == 'pares'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'مشيطلعيبرا🌚😹

بنــت الدبــل كفه😒😹

اكــو احلى من الستــر😒💥لو انتن تحبــن الدياحــه💃😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🎄','callback_data'=>'telale7']],
      ]
    ])
  ]);
}
if($data == 'telale7'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لــو خيــروج🌚💥

【تزوجــين مطــور البــوت😻💛

لــو اي شخــص من التــلي🙊💛】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'مطــور البــوت💜💍','callback_data'=>'almtor']],
        [['text'=>'اي شخــص🙉✨','callback_data'=>'aeshs']],
      ]
    ])
  ]);
}
if($data == 'almtor'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'هلكــد تحبين مطوري🙊💛😹

لــو لواكه علمــود يســويلج بوتات🌚😹💥',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي🔏','callback_data'=>'telale8']],
      ]
    ])
  ]);
}
if($data == 'aeshs'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'اي يلــا ولــي😒💥😹

روحــي دوريــلج زاحف اخــذي😏😹

شبي المطــور يجكجك🌚😹خــوش ولد وميســاني😻',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💎','callback_data'=>'telale8']],
      ]
    ])
  ]);
}
if($data == 'telale8'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لــو خيــروج👽

【نت ماكــو ٣ ايام🐸✨】

【اكــل ماكو ٣ ايــام🐸💛】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'نــت ماكــو📡','callback_data'=>'nt1']],
        [['text'=>'اكــل ماكــو🍕','callback_data'=>'akl1']],
      ]
    ])
  ]);
}
if($data == 'nt1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'والله شكــلج🌚💛😹

احــاول اصــدكج🌚🎐😹
مدا اكــدر اتوقعج ٣ ايام بــدون حبيبج 😝😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💥','callback_data'=>'telale9']],
      ]
    ])
  ]);
}
if($data == 'akl1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'عفــيه السبــاعيه😻💛💥

هيــج اريــدج😻🙊💥

نعلــبو النــت😝😹بس من تبجين ع حبيــبج😹
ابجي بغرفتــج لاشبعيــن كتل🌚😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💄','callback_data'=>'telale9']],
      ]
    ])
  ]);
}
if($data == 'telale9'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لــووووو خيــروووج🙉

【تلبســين حفايــة ولد وترحين للمنتــزه💥😹】

【تمشــين حافيــه لمــدة سنه😹💥】',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'البس حفــاية ولد😸💛💥','callback_data'=>'hfaya']],
        [['text'=>'امشــي حافيــه🐸💎','callback_data'=>'hafya']],
      ]
    ])
  ]);
}
if($data == 'hfaya'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'نهنهنه😹💃💃💃💃

💎وتصــيرين مضحكه بالمنتــزه💎😹

😹💥يالخايــسه يالمعفــنه💥😹',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💠','callback_data'=>'snde']],
      ]
    ])
  ]);
}
if($data == 'hafya'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ربــي🌚👐

كــون الكــاع كلهه كزاز😼

وماتشــرفي بس تــدوسين علي😍😹

ربــي كون يطــب برجلــك بسمار 
طوله عشرطعش متــر💥😹💛',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'التــالي💥💛','callback_data'=>'snde']],
      ]
    ])
  ]);
} 
if($data == 'snde'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' لـﯠ خـيروڪہ تاڪل رڪـي ٱ۾ بطـيخ😋 ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'بطـيخ🍈','callback_data'=>'alii']],
        [['text'=>'رڪـي🍉','callback_data'=>'alii']],
      ]
    ])
  ]);
}
if($data == 'alii'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' لـﯠ خـيروڪہ تضرب فقـير ٱ۾ تاڪل طحين😢 ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اڪل طحين😣','callback_data'=>'ali1']],
        [['text'=>'اضرب فقـير😟','callback_data'=>'ali1']],
      ]
    ])
  ]);
}
if($data == 'ali1'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' لـﯠ خـيروڪہ تطلع حافي بالشارع ٱ۾ تبوس رجل امڪہ🙂 ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>' ابوس رجل امي👩🏻‍💼','callback_data'=>'ali2']],
        [['text'=>'طلع حافي بالشارع😆','callback_data'=>'ali2']],
      ]
    ])
  ]);
}
if($data == 'ali2'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' لـﯠ خـيروڪہ تزوج بنت خالڪہ ٱ۾ بنت عمڪہ 😻 ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'   بنت عمك🙊','callback_data'=>'ali3']],
        [['text'=>'بنت خالك🙈','callback_data'=>'ali3']],
      ]
    ])
  ]);
}
if($data == 'ali3'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' لـﯠ خـيروڪہ تاڪل صرصر ٱ۾ تعوف حبيبتك😁 ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'   تعوف حبيبتك💔','callback_data'=>'ali4']],
        [['text'=>'تاڪل صرصر🦗 ','callback_data'=>'ali4']],
      ]
    ])
  ]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data == 'ali4'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' لـﯠ خـيروڪہ بـدون موبايل ٱ۾ تـصوم يوم😂 ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'بـدون موبايل🤳🏻','callback_data'=>'ali5']],
        [['text'=>' تـصوم يوم👳🏻‍♀','callback_data'=>'ali5']],
      ]
    ])
  ]);
}
if($data == 'ali5'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' لـﯠ خـيروڪہ حـبـبتڪہ ٱ۾ ٱخـتڪہ😉 ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'ٱخـتڪہ💁🏻‍♀','callback_data'=>'ali6']],
        [['text'=>'حـبـبتڪہ👰🏻','callback_data'=>'ali6']],
      ]
    ])
  ]);
}
if($data == 'ali6'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' لـﯠ خـيروڪہ ٱمـڪہ ٱ۾ ٱبـﯠڪہ😱 ',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'  ٱبـﯠڪہ 👨🏻‍💼','callback_data'=>'ali7']],
        [['text'=>'مـڪہ 👩🏻‍💼','callback_data'=>'ali7']],
      ]
    ])
  ]);
}
if($data == 'ali7'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'• النـهاية ☹️💔

- خلصت العبه شنو هيه شبع 🃏

• اضغط ع [ اعادة لعب ]
لـ اعادة لعبه مره اخرى 🚸

• اضغط ع [ الصفحه الرئيسيه ] لـروئية باقي الالعاب 🕹

- جديدنا 🥤:- @engeeringeletical',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسيه 🔖','callback_data'=>'هدوء']],   
[['text'=>'• اعادة الـعبة 🚡','callback_data'=>'php_i']]    
]    
])
]);
}
# الحوت
if($data == "hot"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
 'text' =>"- مرحبا بك في 🗳
- لعبة الحوت الازرق 🐳

- اضغط ع زر [ابدا]  لـ بدا العبه الان 🥤

- اضغط ع زر [الصفحه الرئيسيه ] للرجوع الى القائمه الاولئ 🚸",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
 [['text'=>"• دخول📮،",'callback_data'=>"a"],['text'=>"• قرائة الشروط📑،",'callback_data'=>"b"]],
 [['text'=>'الصفحة الرئيسيه 🔖','callback_data'=>'هدوء']],   ]
        ])
            ]);
        }
if($data == "b"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• عزيري $name
- هذا البوت لايمثل اي تهديد🧐
- هذه اللعبه للمزحه فقط لااكثر😁
- العبها الان وبكل امان💯
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
DEV:- @Taher9ja",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'• رجوع↪️،،','callback_data'=>'r']]    
]    
])
]);
}

if($data == "r"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
 'text' =>"☠• مرحبا بك في بوت لعبة الحوت الازرق",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"• دخول📮،",'callback_data'=>"a"],['text'=>"• قرائة الشروط📑،",'callback_data'=>"b"]
              ]
              ]
        ])
            ]);
        }
if($data == "b"){
bot('sendVoice',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'voice'=>'https://t.me/rrirrrr/7',
'caption'=>'شغل الموسيقى والعب'
]);
}   
# dev:- @dev_i or @dev_a     ch:-@php_i    #
        if($data == "a"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'المس انفگ بأستخدام الابهام الايمن',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'c']]    
]    
])
]);
}
if($data == "c"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- صفق بيدگ مرتين وقول انا قوي',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'d']]    
]    
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data == "d"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- ارفع ساقك اليسرى عن طريق يدك اليسرى واقفز 3 مرات بساقك اليمنى',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'اوكي😁','callback_data'=>'e']]    
]    
])
]);
}
if($data == "e"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- تذگر لاتؤذي نفسگ ولاتضر بأشخاص اخرين',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'f']]    
]    
])
]);
}
if($data == "f"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- ارفع يدگ مع بعد الى الاعلى  وشغل الموسيقى المفضله لديگ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'g']]    
]    
])
]);
}
if($data == "g"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- اسئل صديقك ماهوه طعامگ المفضل',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'i']]    
]    
])
]);
}
if($data == "i"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- تذكر لاتكون وقحا للاشخاص الذين يعانون من لون البشرة المختلفه انها العنصرية وبطريقة سيئه للغاية',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'j']]    
]    
])
]);
}
if($data == "j"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'اسئل احد من عائلتگ هل يحتاج الي مساعدة',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'k']]    
]    
])
]);
}
if($data == "k"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'انهض على الساعة 6:00',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'l']]    
]    
])
]);
}
if($data == "l"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'اذهب تمشي 1 ميل',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'n']]    
]    
])
]);
}
if($data == "n"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'شاهد فلم كوميدي',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'o']]    
]    
])
]);
}
if($data == "o"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'عندما تستيقظ لاتتحرك من السرسر لمدة 5 دقائق',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'p']]    
]    
])
]);
}
if($data == "p"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'ضع يدك علي رأسك وانزل 30 مراة',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'q']]    
]    
])
]);
}
if($data == "q"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'#تذكير
تشويه الذات سيئة عند الحاق الضرر لنفسك قد تلحق الضرر للاخرين',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'اوكي😑','callback_data'=>'s']]    
]    
])
]);
}
if($data == "s"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'افتح حبة بصل بدون ان تبگي',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'😉ماشي','callback_data'=>'u']]    
]    
])
]);
}
if($data == "u"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'تناول جوز',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'v']]    
]    
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data == "v"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'اذهب على دراجه واذا لم تملك دراجه اذهب على شيء ٱڅڑ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'w']]    
]    
])
]);
}
if($data == "w"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'#تذگير
العنف ليس ابدا هوه الاجابه',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'y']]    
]    
])
]);
}
if($data == "y"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'اكتب منشور في الفيسبوك تقول فِيَھ ه̷̷َـَْـُذآ يوم جديد',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'z']]    
]    
])
]);
}
if($data == "z"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'رسم بالطباشير الملون على قطعه گبيرة من الورق',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a1']]    
]    
])
]);
}
if($data == "a1"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- ارسم مياه🌊،وشمس☀️وجزيرة🏝',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a2']]    
]    
])
]);
}
if($data == "a2"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- قم باعطاء الرسم لشخص قريب من عائلتك وقول ڵـهٍ تقومون بتطبيق الحوت الازرق🐬',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a3']]    
]    
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data == "a3"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- الًيَوُمًِ لايعني شيء اسوء',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a4']]    
]    
])
]);
}
if($data == "a4"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- جرب مص الليمون دون ان تسحب وجهك',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a5']]    
]    
])
]);
}
if($data == "a5"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- قل لـ 15 شخص ان الًيَوُمًِ جميل قبل الـ14:00 مساء',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a6']]    
]    
])
]);
}
if($data == "a6"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- الًيَوُمًِ استراحه لايوجد تحدي',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a7']]    
]    
])
]);
}
if($data == "a7"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- افعل شيء جيد!',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a8']]    
]    
])
]);
}
if($data == "a8"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'#تذكير
مساعدة ٱڅڑ دون فائدة ه̷̷َـَْـُذآ امر جيد',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a9']]    
]    
])
]);
}
if($data == "a9"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'ارسل لـ3 اشخاص للعب تحدي الحوت الازرق ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a0']] ,
[['text'=>'• ارسال🐬','switch_inline_query'=>'']]
]    
])
]);
}
if($data == "a10"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=> '- اسئل والديگ اذا كان هناك قمامة لكي ترميها',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a11']]    
]    
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data == "a11"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- توازن وقف على قدم واحده لمدة 20 ثانيه',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a12']]    
]    
])
]);
}
if($data == "a12"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- خذ طعام من الثلاجه وقل لعائلتك انا قوي',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'13']]    
]    
])
]);
}
if($data == "a13"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- اشرب عصير البرتقال',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a14']]    
]    
])
]);
}
if($data == "a14"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- حذاري لاتخبر اي احد كيف تبدو',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a15']]    
]    
])
]);
}
if($data == "a15"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- ضع قطعتين من الخبز في فمك وقل انا ارنب',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a16']]    
]    
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data == "a16"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- اغسل اسنانك لمدة 5 دقائق',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a17']]    
]    
])
]);
}
if($data == "a17"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- استحم مرتين!!',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a18']]    
]    
])
]);
}
if($data == "a18"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- ارتداء التقاشير في المنزل كل يوم ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'19']]    
]    
])
]);
}
if($data == "a19"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- تناول ملعقة كبيرة من السلطه التي تحبها',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a20']]    
]    
])
]);
}
if($data == "a20"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- شاهد رسوم الكارتون',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a21']]    
]    
])
]);
}
if($data == "a21"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'استيقظ الساعه الــ8:00 صباحا',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a22']]    
]    
])
]);
}
if($data == "a22"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- اكل الحبوب مع الحليب في الافطار',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a23']]    
]    
])
]);
}
if($data == "a23"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- استمع الى الموسيقه المفضله لديك لمدة سَـآعــهْْ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a24']]    
]    
])
]);
}
if($data == "a24"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- جعل عمامه من المنشفه وارتداء حجاب لمدة 30 دقيقه',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a25']]    
]    
])
]);
}
if($data == "a25"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'لاتخبر شيئا لوالديك',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'a26']]    
]    
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data == "a26"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- هل انته مستعد لگي تصبح حوت ازرق🐬',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'نعم','callback_data'=>'a27']]    
]    
])
]);
}
if($data == "a27"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'• قم برسم حوت ازرق على يدگ
• استخدم اله حادة في الرسم
• بعدها قم بقتل نفسگ بأستخدام احد الطرق
- عن طريق اله حادة🔪
- عن طريق القفز من مبنى عالي🏯
- عن طريق خنق نفسگ🌚
#للمزحه_فقط',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'التالي','callback_data'=>'ddd']],   
]    
])
]);
}
if($data == 'ddd'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'• النـهاية ☹️💔

- خلصت العبه شنو هيه شبع 🃏

• اضغط ع [ اعادة لعب ]
لـ اعادة لعبه مره اخرى 🚸

• اضغط ع [ الصفحه الرئيسيه ] لـروئية باقي الالعاب 🕹

@Taher9ja',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسيه 🔖','callback_data'=>'هدوء']],   
[['text'=>'• اعادة الـعبة 🚡','callback_data'=>'hot']],
]    
])
]);
}
$chat_id = $update->callback_query->message->chat->id;
#حزوره
if($data == "hzo"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- مرحبا بك في 🗳
- لعبة حزوره بليره 💰

- اضغط ع زر [ابدا]  لـ بدا العبه الان 🥤

- اضغط ع زر [الصفحه الرئيسيه ] للرجوع الى القائمه الاولئ 🚸",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>" ابدأء العب 🔗",'callback_data'=>"bb1"]
],
[['text'=>'الصفحة الرئيسيه 🔖','callback_data'=>'هدوء']],   
]
])
]);
}
if($data=="Ailnoor"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- مرحبا بك في 🗳
- لعبة حزوره بليره 💰

- اضغط ع زر [ابدا]  لـ بدا العبه الان 🥤

- اضغط ع زر [الصفحه الرئيسيه ] للرجوع الى القائمه الاولئ 🚸",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"نبدأء العب 🚸",'callback_data'=>"bb1"]
],
[['text'=>'الصفحة الرئيسيه 🔖','callback_data'=>'هدوء']],   
]
])
]);
}

if($data=="dev_a"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• اجابتك كانت خاطئه للأسف ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"رجوع 🔙",'callback_data'=>"Ailnoor"]
],
[
['text'=>"قناتي 📡",'url'=>"https://t.me/engeeringeletical"]
],
]
])
]);
}
if($data=="dev_i"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"انتهت العبه اجاباتك كانت خاطئه ⚠️",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"رجوع 🔙",'callback_data'=>"Ailnoor"]
],
[
['text'=>"قناتي 📡",'url'=>"https://t.me/engeeringeletical"]
],
]
])
]);
}
if($data=="bb1"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ما هو الشيء الذي كلما طال قصر ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"النظر",'callback_data'=>"dev_a"]
],
[
['text'=>"العمر",'callback_data'=>"bb2"]
],
[
['text'=>"القبر",'callback_data'=>"dev_i"]
],
]
])
]);
}
if($data=="bb2"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اجابتك صحيه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه",'callback_data'=>"bb3"]
],
]
])
]);
}
if($data=="bb3"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ماذا يقع وسط بغداد ؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>" حرف الدال",'callback_data'=>"bb4"]
],
[
['text'=>"الشورجه",'callback_data'=>"dev_i"]
],
[
['text'=>"باب المعضم",'callback_data'=>"dev_a"]
],
]
])
]);
}
if($data=="bb4"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb5"]
],
]
])
]);
}
if($data=="bb5"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ما هو البيت الذي لا يسكن( ليس فيه أبواب ولا نوافذ) ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"بيت الرحم",'callback_data'=>"dev_a"]
],
[
['text'=>"بيت الشعر",'callback_data'=>"bb6"]
],
[
['text'=>"بيت المسكين",'callback_data'=>"dev_i"]
],
]
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data=="bb6"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• اجابتك صحيه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb7"]
],
]
])
]);
}
if($data=="bb7"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ماهو الشيء الذي يكتب و لا يقرأ ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"الجاهل",'callback_data'=>"dev_a"]
],
[
['text'=>"الاعمى",'callback_data'=>"dev_i"]
],
[
['text'=>"القلم",'callback_data'=>"bb8"]
],
]
])
]);
}
if($data=="bb8"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb9"]
],
]
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data=="bb9"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ماهو الشيء الذي يكون أخضر في الارض وأسود في السوق وأحمــر في البيت ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"الشاي",'callback_data'=>"bb10"]
],
[
['text'=>"القمح",'callback_data'=>"dev_i"]
],
[
['text'=>"الارز",'callback_data'=>"dev_a"]
],
]
])
]);
}
if($data=="bb10"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb11"]
],
]
])
]);
}
if($data=="bb11"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"له أسنان ولا يعض، ما هو ؟  - ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"المشط",'callback_data'=>"bb12"]
],
[
['text'=>"المنشار",'callback_data'=>"dev_a"]
],
[
['text'=>"الصبار",'callback_data'=>"dev_i"]
],
]
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data=="bb12"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه",'callback_data'=>"bb13"]
],
]
])
]);
}
if($data=="bb13"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ما هو الشيء الذي لا يمشي إلا بالضرب ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"المسمار",'callback_data'=>"bb14"]
],
[
['text'=>"االكسلان",'callback_data'=>"dev_a"]
],
[
['text'=>"الطفل الخبيث",'callback_data'=>"dev_i"]
],
]
])
]);
}
if($data=="bb14"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb15"]
],
]
])
]);
}
if($data=="bb15"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊اين تقع السودان",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اسيا",'callback_data'=>"dev_i"]
],
[
['text'=>"افريقا",'callback_data'=>"dev_a"]
],
[
['text'=>"اوربا",'callback_data'=>"bb16"]
],
]
])
]);
}
if($data=="bb16"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"bb17"]
],
]
])
]);
}
if($data=="bb17"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊كم عدد محافظات العراق",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"20",'callback_data'=>"dev_a"]
],
[
['text'=>"22",'callback_data'=>"dev_i"]
],
[
['text'=>"18",'callback_data'=>"bb18"]
],
]
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data=="bb18"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهي عاصمة فرنسا",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"باريس",'callback_data'=>"bb19"]
],
[
['text'=>"لندن",'callback_data'=>"dev_a"]
],
[
['text'=>"واشنطن",'callback_data'=>"dev_i"]
],
]
])
]);
}
if($data=="bb19"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه",'callback_data'=>"bb20"]
],
]
])
]);
}
if($data=="bb20"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"هو له رأس ولا عين له، وهي لها عين ولا رأس لها، ما هما ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"الدبوس و الإبرة",'callback_data'=>"bb21"]
],
[
['text'=>"الخيط و السناره",'callback_data'=>"dev_a"]
],
[
['text'=>"المطرقه و المقبض",'callback_data'=>"dev_i"]
],
]
])
]);
}
if($data=="bb21"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه",'callback_data'=>"bb22"]
],
]
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data=="bb22"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهو اسم صوت الحصان",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"نهيق",'callback_data'=>"dev_a"]
],
[
['text'=>"صهيل",'callback_data'=>"bb23"]
],
[
['text'=>"عواء",'callback_data'=>"dev_i"]
],
]
])
]);
}
if($data=="bb23"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه",'callback_data'=>"bb24"]
],
]
])
]);
}
if($data=="bb24"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهي عملة مصر",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"دينار",'callback_data'=>"dev_a"]
],
[
['text'=>"دولار",'callback_data'=>"dev_i"]
],
[
['text'=>"جنيه",'callback_data'=>"bb25"]
],
]
])
]);
}
if($data=="bb25"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• احسنت اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه",'callback_data'=>"bb26"]
],
]
])
]);
}
if($data=="bb26"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ما هو الشيء الذي إذا أخذنا منه إزداد وكبر ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"الحفرة",'callback_data'=>"bb27"]
],
[
['text'=>"النار",'callback_data'=>"dev_a"]
],
[
['text'=>"الشرار",'callback_data'=>"dev_i"]
],
]
])
]);
}
if($data=="bb27"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه",'callback_data'=>"bb28"]
],
]
])
]);
}
if($data=="bb28"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"أخوان يبصران كل شيء ولكن لا يرى أحدهما الآخر فما هما ؟ 
",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"الساقان",'callback_data'=>"dev_a"]
],
[
['text'=>"العينان",'callback_data'=>"bb29"]
],
[
['text'=>"الارجل",'callback_data'=>"dev_i"]
],
]
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data=="bb29"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb30"]
],
]
])
]);
}
if($data=="bb30"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهي اول غزوه في الاسلام",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"بدر",'callback_data'=>"bb31"]
],
[
['text'=>"احد",'callback_data'=>"dev_a"]
],
[
['text'=>"الخندق",'callback_data'=>"dev_i"]
],
]
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data=="bb31"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" احسنت اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb32"]
],
]
])
]);
}
if($data=="bb32"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"يتحرك دائماً حواليك لكنك لاتراه فما هو ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"الخيال",'callback_data'=>"dev_a"]
],
[
['text'=>"الارواح",'callback_data'=>"dev_i"]
],
[
['text'=>"الهواء",'callback_data'=>"bb33"]
],
]
])
]);
}
if($data=="bb33"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb34"]
],
]
])
]);
}
if($data=="bb34"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ما هو الشىء الذى يوجد في القرن مرة و في الدقيقة مرتين ولا يوجد في الساعة ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"حرف القاف",'callback_data'=>"bb35"]
],
[
['text'=>"العام",'callback_data'=>"dev_i"]
],
[
['text'=>"الشهر",'callback_data'=>"dev_a"]
],
]
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data=="bb35"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb36"]
],
]
])
]);
}
if($data=="bb37"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"يسمع بلا أذن ويتكلم بلا لسان فما هو ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"التليفون",'callback_data'=>"bb38"]
],
[
['text'=>"النحل",'callback_data'=>"dev_i"]
],
[
['text'=>"الجراد",'callback_data'=>"dev_a"]
],
]
])
]);
}
if($data=="bb38"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اجاباتك صحيحه 😍💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb39"]
],
]
])
]);
}
if($data == 'bb39'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'• النـهاية ☹️💔

- خلصت العبه شنو هيه شبع 🃏

• اضغط ع [ اعادة لعب ]
لـ اعادة لعبه مره اخرى 🚸

• اضغط ع [ الصفحه الرئيسيه ] لـروئية باقي الالعاب 🕹

- Dev: @Taher9ja',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسيه 🔖','callback_data'=>'هدوء']],   
[['text'=>'• اعادة الـعبة 🚡','callback_data'=>'hzo']],   
]    
])
]);
}
#المليون
if($data=="mle"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- مرحبا بك في 🗳
- لعبة من سيربح المليون 💸

- اضغط ع زر [ابدا]  لـ بدا العبه الان 🥤

- اضغط ع زر [الصفحه الرئيسيه ] للرجوع الى القائمه الاولئ 🚸",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• ابدا ",'callback_data'=>"1"]
],
[['text'=>'الصفحة الرئيسيه 🔖','callback_data'=>'هدوء']]
]
])
]);
}
if($data=="🔙"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- مرحبا بك في 🗳
- لعبة من سيربح المليون 💸

- اضغط ع زر [ابدا]  لـ بدا العبه الان 🥤

- اضغط ع زر [الصفحه الرئيسيه ] للرجوع الى القائمه الاولئ 🚸",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"ابـدء 🎮",'callback_data'=>"1"]
],
[['text'=>'الصفحة الرئيسيه 🔝🔻','callback_data'=>'هدوء']]
]
])
]);
}
if($data=="❌"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"✖️┊اجـابـتـك كانـت خـاطـئـة لـلاسـف‼️",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"رجوع 🔙",'callback_data'=>"🔙"]
],
]
])
]);
}
if($data=="✖"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❌┊لـقـد خـسـرت لـلاسـف اجـابـتـك كـانـت خـاطـئـه‼️",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"رجوع 🔙",'callback_data'=>"🔙"]
],
]
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data=="1"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊اثنان صفر اثنان اربع",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"2024",'callback_data'=>"❌"]
],
[
['text'=>"0044",'callback_data'=>"2"]
],
[
['text'=>"2044",'callback_data'=>"✖️"]
],[
['text'=>"0024",'callback_data'=>"✖️"]
],
]])]);}
if($data=="2"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"3"]
],
]
])
]);
}
if($data=="3"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊كم عدد فقرات عنق الزرافة",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"سبعه",'callback_data'=>"4"]
],
[
['text'=>"خمسه",'callback_data'=>"✖"]
],
[
['text'=>"ثلاثه",'callback_data'=>"❌"]
],
]
])
]);
}
if($data=="4"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"5"]
],
]
])
]);
}
if($data=="5"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊كم قلب للأخطبوط",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"قلب واحد",'callback_data'=>"❌"]
],
[
['text'=>"ثلاث قلوب",'callback_data'=>"6"]
],
[
['text'=>"قلبان",'callback_data'=>"✖"]
],
]
])
]);
}
if($data=="6"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"7"]
],
]
])
]);
}
if($data=="7"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ما هو المرض الذي اطلق عليه الموت الاسود",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"الصرطان",'callback_data'=>"❌"]
],
[
['text'=>"السل",'callback_data'=>"✖"]
],
[
['text'=>"الطاعون",'callback_data'=>"8"]
],
]
])
]);
}
if($data=="8"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"9"]
],
]
])
]);
}
if($data=="9"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهو اكبر اقتصاد للمواد المحترقه",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"الفحم",'callback_data'=>"10"]
],
[
['text'=>"البانزين",'callback_data'=>"✖"]
],
[
['text'=>"الغاز",'callback_data'=>"❌"]
],
]
])
]);
}
if($data=="10"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"11"]
],
]
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data=="11"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊كم دام حكم العثمانيون الثالث في العراق",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"85 عاما",'callback_data'=>"12"]
],
[
['text'=>"80 عاما",'callback_data'=>"❌"]
],
[
['text'=>"90 عاما",'callback_data'=>"✖"]
],
]
])
]);
}
if($data=="12"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"13"]
],
]
])
]);
}
if($data=="13"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊من هو خاتم الانبياء ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"النبي محمد",'callback_data'=>"14"]
],
[
['text'=>"النبي عيسئ",'callback_data'=>"❌"]
],
[
['text'=>"النبي ابراهيم",'callback_data'=>"✖"]
],
]
])
]);
}
if($data=="14"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"15"]
],
]
])
]);
}
if($data=="15"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊اين تقع السودان",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اسيا",'callback_data'=>"✖"]
],
[
['text'=>"افريقا",'callback_data'=>"❌"]
],
[
['text'=>"اوربا",'callback_data'=>"16"]
],
]
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data=="16"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"17"]
],
]
])
]);
}
if($data=="17"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊كم عدد محافظات العراق",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"20",'callback_data'=>"❌"]
],
[
['text'=>"22",'callback_data'=>"✖"]
],
[
['text'=>"18",'callback_data'=>"18"]
],
]
])
]);
}
if($data=="18"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهي عاصمة فرنسا",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"باريس",'callback_data'=>"19"]
],
[
['text'=>"لندن",'callback_data'=>"❌"]
],
[
['text'=>"واشنطن",'callback_data'=>"✖"]
],
]
])
]);
}
if($data=="19"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"20"]
],
]
])
]);
}
if($data=="20"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊كم هو عدد ايام السنه",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"360",'callback_data'=>"21"]
],
[
['text'=>"350",'callback_data'=>"❌"]
],
[
['text'=>"370",'callback_data'=>"✖"]
],
]
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data=="21"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"22"]
],
]
])
]);
}
if($data=="22"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهو اسم صوت الحصان",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"نهيق",'callback_data'=>"❌"]
],
[
['text'=>"صهيل",'callback_data'=>"23"]
],
[
['text'=>"عواء",'callback_data'=>"✖"]
],
]
])
]);
}
if($data=="23"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"24"]
],
]
])
]);
}
if($data=="24"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهي عملة مصر",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"دينار",'callback_data'=>"❌"]
],
[
['text'=>"دولار",'callback_data'=>"✖"]
],
[
['text'=>"جنيه",'callback_data'=>"25"]
],
]
])
]);
}
if($data=="25"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"26"]
],
]
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data=="26"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊اين تقع محافظة الرقه",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"سوريا",'callback_data'=>"27"]
],
[
['text'=>"مصر",'callback_data'=>"❌"]
],
[
['text'=>"الاردن",'callback_data'=>"✖"]
],
]
])
]);
}
if($data=="27"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"28"]
],
]
])
]);
}
if($data=="28"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊اين تقع محافظة ذيقار من العراق",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"شمال",'callback_data'=>"❌"]
],
[
['text'=>"جنوب",'callback_data'=>"29"]
],
[
['text'=>"وسط",'callback_data'=>"✖"]
],
]
])
]);
}
if($data=="29"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"30"]
],
]
])
]);
}
if($data=="30"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهي اول غزوه في الاسلام",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"بدر",'callback_data'=>"31"]
],
[
['text'=>"احد",'callback_data'=>"❌"]
],
[
['text'=>"الخندق",'callback_data'=>"✖"]
],
]
])
]);
}
# dev:- @dev_i or @dev_a     ch:-@php_i    #
if($data=="31"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"32"]
],
]
])
]);
}
if($data=="32"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊اين تقع البرتغال",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اسيا",'callback_data'=>"❌"]
],
[
['text'=>"افريقيا",'callback_data'=>"✖"]
],
[
['text'=>"اوربا",'callback_data'=>"33"]
],
]
])
]);
}
if($data=="33"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"34"]
],
]
])
]);
}
if($data=="34"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊كم ساعة في اليوم الواحد؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"24",'callback_data'=>"35"]
],
[
['text'=>"26",'callback_data'=>"✖"]
],
[
['text'=>"22",'callback_data'=>"❌"]
],
]
])
]);
}
if($data=="35"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"36"]
],
]
])
]);
}
if($data=="37"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ما اسم المكان الذي يسكن فيه النحل؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"خليه",'callback_data'=>"38"]
],
[
['text'=>"بيت",'callback_data'=>"✖"]
],
[
['text'=>"جحر",'callback_data'=>"❌"]
],
]
])
]);
}
if($data=="38"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🎉┊احـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"39"]
],
]
])
]);
}
if($data == '39'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'• النـهاية ☹️💔

- خلصت العبه شنو هيه شبع 🃏
- روح/ي اقرا 🃏

• اضغط ع [ اعادة لعب ]
لـ اعادة لعبه مره اخرى 🚸

• اضغط ع [ الصفحه الرئيسيه ] لـروئية باقي الالعاب 🕹

- قناة 🥤:- @engeeringeletical',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسيه 🔖','callback_data'=>'هدوء']],   
[['text'=>'• اعادة الـعبة 🚡','callback_data'=>'mle']]    
]    
])
]);
}
$ar = array("AwADBAAD1gEAAu70cFAQyTKKtKM9fAI",'AwADBAAD8wEAAu70cFA1ps8GwWOheQI',"AwADBAADTwEAAu70aFACIfyhjSX9pgI","AwADBAADjwEAAu70aFCcEacsDsy9jQI");
$rand = array_rand($ar, 1);
if($text == '/return'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'ارجع الى ما وصلت',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'عوودة','callback_data'=>'o18']]    
]    
])
]);
}
if($data == 'php_i'){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- مرحبا بك في 🗳
- لعبة مريم 💁‍♀️
- اضغط ع زر [ابدا]  لـ بدا العبه الان 🥤

- اضغط ع زر [الصفحه الرئيسيه ] للرجوع الى القائمه الاولئ 🚸",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'ابدا اللعب🕹','callback_data'=>'dev_a1']], 
[['text'=>'الصفحة الرئيسيه 🔖','callback_data'=>'هدوء']],   
]])]);}
if($data == 'dev_a1'){
 bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'انا تائهة هل تود مساعدتي ؟',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'نعم','callback_data'=>'y1']],
        [['text'=>'لا','callback_data'=>'n1']],
      ]
    ])
  ]);}

if($data == 'n1'){
 bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' لماذا هل انت قاسي القلب😭 ؟',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'🤪نعم','callback_data'=>'y2']],
        [['text'=>'😞لا','callback_data'=>'n2']],
      ]
    ])
     ]);}
if($data == 'y2'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'انني شفق عليك يجب عليك انت تطهر روحك وتحب الخير للجميع ؟',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'وماذا🤨', 'callback_data'=>'y3']],
]])]);}
if($data == 'y3'){
  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'انت نادم على ماقلت  ؟',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'نعم😏','callback_data'=>'y4']],
        [['text'=>'😖لا','callback_data'=>'n4']],
      ]
    ])
      ]);}
if($data == 'y1' or $data == 'y4' )
{  bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'واو اشكرك انت شخص رائع حقا',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'حسنا😀','callback_data'=>'o2']],   
      ]
    ])
  ]);}
if($data == 'o1')
{ bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'واو اشكرك انت شخص رائع حقا',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'حسنا😀','callback_data'=>'o2']],   
      ]
    ])
  ]);}
if($data == 'o2'){ 
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'بحث 😢معي عن منزلي لقد كان قريبا من هنا ؟',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'حسنا😒','callback_data'=>'o3']],   
      ]
    ])
  ]);}
if($data == 'o3'){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لكن عندما حل اليل لم اعد ارى اي شيئ ؟',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'حسنا','callback_data'=>'o4']],   
      ]
    ])
  ]);}
if($data == 'o4'){ bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'اين تضن انه يوجد ؟',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'يمين➡️', 'callback_data'=>'right']],
[['text'=>'⬅️يسار', 'callback_data'=>'left']],
]])]);}
if($data == 'right' or $data == 'left'){ 
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'شكرا لك ! اريد ان اسألك سؤالا ونحن في الطريق ؟',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'حسنا🌝','callback_data'=>'o5']],   
      ]
    ])
  ]);}
if($data == 'o5'){ 
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'هل تراني فتاة لطيفة ام مخيفة ☺؟',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'لطيفة😎', 'callback_data'=>'nice']],
[['text'=>'مخيفة😱','callback_data'=>'scary']],
]])]);}
if($data == 'nice'){ 
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'اشكرك على مجاملتك هيا لنكمل الطريق',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🤗اوكي', 'callback_data'=>'o6']],
]])]);}
if($data == 'scary'){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لقد جعلتني ابكي لكني اسامحك لانك شخص لطيف هيا لنكمل الطريق؟',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🤗اوكي', 'callback_data'=>'o6']],
]])]);}
if($data == 'o6'){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لقد وصلنا الى المنزل شكرا جزيلا انتضرني قليلا وسوف اعود😄 ؟',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسنا', 'callback_data'=>'o7']],
]])]);}
if($data == 'o7'){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'  لقد اخبرت والدي عنك وهم متحمسين لرؤيتك🌚',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسنا', 'callback_data'=>'o8']],
]])]);}
if($data == 'o8'){ 
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' انا لست الحوت الازرق كما يدعون 🐳',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'انا اعلم🌝', 'callback_data'=>'know'],
['text'=>'انتي كاذبة😒','callback_data'=>'lion']],
]])]);}
if($data == 'lion'){ 
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' انا لست كاذبة صدكني 😖',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'حسنا🌝','callback_data'=>'o9']],   
      ]
    ])
  ]);}
if($data == 'o9' or $data == 'know'){ 
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' لماذا لا ارى في عينيك الخوف 👀',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[

[['text'=>'والله مادري🌚', 'callback_data'=>'dont_know'],
['text'=>' ما خايف اصلا 😂','callback_data'=>'im_not']],
]])]);}
if($data == 'dont_know' or $data == 'im_not'){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' انا فتاة لطيفة تحب اللعب مع الجميع',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'اي نعم😄', 'callback_data'=>'o10']],
]])]);}
if($data == 'o10'){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' اعرف كل شي سمعت ذلك بلراديو',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسنا', 'callback_data'=>'o11']],
[['text'=>'ماذا سمعتي','callback_data'=>'what']],
]])]);}
if($data == 'what' or $data == 'o11'){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' سمعت ان البشر يقتلون من اجل المال فقط',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[

[['text'=>'🤑المال سر الحياة', 'callback_data'=>'life'],
['text'=>'النفس الطيبة سر 😐الحياة','callback_data'=>'self']],
]])]);}
if($data == 'self' or $data == 'life'){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' لماذا لم تدخل الغرفة',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'دخول🏠', 'callback_data'=>'join']],
]])]);}
if($data == 'join'){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' هههه هل انت مسجون في هاذه الغرفة ',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'لماذا', 'callback_data'=>'why'],
['text'=>'انتي مخادعة','callback_data'=>'cheder']],
]])]);}
if($data == 'why' or $data == 'cheder'){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>' ستبقى هنا حتى اعود ',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'ماذا افعل الان', 'callback_data'=>'what_now']],
]])]);}
if($data == 'what_now'){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'هناك مفتاح اسود هز الجهاز لتحصل عليه ',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'وجدته', 'callback_data'=>'find'],
['text'=>'لم اجده','callback_data'=>'not_find']],
]])]);}
if($data == 'not_find'){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ابحث جيدا هناك مفتاح اسود هز الجهاز',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🗝وجدته', 'callback_data'=>'find'],
['text'=>'لم اجده','callback_data'=>'not_find']],
]])]);}
if($data == 'find'){bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'عظيم يجب عليك فتح الباب والهروب ',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'فتح الباب🚪', 'callback_data'=>'open']],
]])]);}
if($data == 'open'){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'يبدوا ان هناك شخصاً يغادر المنزل ',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'انضر عبر النافذة', 'callback_data'=>'see']],
]])]);}
if($data == 'see'){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'يبدوا انها مريم قد غادرت الى الغابة ',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'هروب🏃🏼🏃🏻‍♀️', 'callback_data'=>'run'],
['text'=>'🧎🧎🏻‍♀️البقاء مختبأ','callback_data'=>'stay']],
]])]);}
if($data == 'stay'){
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
'text'=>'يبدو ان مريم قد عادت ,مريم : اين انت',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🕺اضهر نفسك', 'callback_data'=>'show'],
['text'=>'🙍🏻🙍‍♀️ابقى صامتا','callback_data'=>'keep']],
]])]);}
if($data == 'run'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'الى اين انت ذاهب',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🤷🏻🤷🏼‍♀️لا ادري', 'callback_data'=>'dontknow']],
]])]);}
if($data == 'show'){bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'اين كنت كنت ابحث عنك',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'😿دعيني اذهب', 'callback_data'=>'let_me_go'],
['text'=>'انا اسف☹️','callback_data'=>'imsorry']],
]])]);}
if($data == 'dontknow'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'هل تريد ان احبسك مرة اخرى',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'😒نعم احبسيني', 'callback_data'=>'yesgetme'],
['text'=>'🙁انا اسف','callback_data'=>'imsorry']],
]])]);}
if($data == 'keep'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لقد وجدت لماذا كنت مختبئا',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🙁دعيني اذهب', 'callback_data'=>'let_me_go'],
['text'=>'😕انا اسف','callback_data'=>'imsorry']],
]])]);}

if($data == 'imsorry' or $data == 'let_me_go' or $data == 'yesgetme'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'الا تر انى  احبك واريدك ان تبقى معي',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[

[['text'=>'حسنا', 'callback_data'=>'o12']],
]])]);}
if($data == 'o12'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'هل انت جائع',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'نعم', 'callback_data'=>'yes_im_hungrey'],
['text'=>'لا','callback_data'=>'no_im_not']],
]])]);}
if($data == 'yes_im_hungrey'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'سأذهب الى المطبخ واعد الطعام',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسنا', 'callback_data'=>'o13']],
]])]);}

if($data == 'no_im_not'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'سأذهب الى المطبخ واعد الطعام',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسنا', 'callback_data'=>'o13']],
]])]);}
if($data == 'o13'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'هل تصدق بوجود الماسونية',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'لا', 'callback_data'=>'dont_belev'],
['text'=>'نعم','callback_data'=>'ubleve']],
]])]);}

if($data == 'ubleve'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'هاذا جيد لانك ستصبح منهم عم قريب',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[

[['text'=>'لا اريد', 'callback_data'=>'dont_wont'],
['text'=>'حسنا','callback_data'=>'o14']],
]])]);}

if($data == 'dont_belev'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'لاتهتم ستعرف عما قريب',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'حسنا','callback_data'=>'o14']],
]])]);}
if($data == 'dont_wont'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'هذا القرار لا يعود لك',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسنا','callback_data'=>'o14']],
]])]);}
if($data == 'o14'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'يبدو انه قد حل الليل اذهب الى النوم',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسنا','callback_data'=>'o15']],
]])]);}

if($data == 'o15'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'يبدو ان مريم تمارس السحر اسود في القبو هاذه فرصتك للهروب',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'هروب','callback_data'=>'skap'],
['text'=>'البقاء','callback_data'=>'stay2']],
]])]);}
if($data == 'skap'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'انت الان وحدك في الغابة في اي اتجاه تريد ان تذهب',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'يمين','callback_data'=>'rig'],
['text'=>'يسار','callback_data'=>'lef']],
]])]);}

if($data == 'rig' or $data == 'lef')
{bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'يبدو ان هناك فتاة صغيرة في الغابة',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'اتركها','callback_data'=>'lefthere'],
['text'=>'اسئلها عن الطريق','callback_data'=>'askhere']],
]])]);}
if($data == 'askhere'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
'text'=>'انا اسف على ازعاج  اهلا بك: هل تعلمين اين الطريق الى المستنقع',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'اهرب','callback_data'=>'goaway']],
]])]);}
if($data == 'goaway' or $data == 'lefthere'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'يبدو ان هناك منزلا ينبعث منه الضوء',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'تفقد','callback_data'=>'check']],
]])]);}
if($data == 'check'){bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'هل تريد الدخول الى منزل🏣',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'نعم','callback_data'=>'inside'],
['text'=>'لا','callback_data'=>'outside']],
]])]);}
if($data == 'inside'){bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'هل تضن انك تهرب مني',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'هروب','callback_data'=>'gofar'],
['text'=>'مواجهة','callback_data'=>'fide']],
]])]);}
if($data == 'outside'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'دعنا نكمل طريقنا',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسنا','callback_data'=>'o16']],
]])]);}
if($data == 'gofar' or $data == 'o16'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ههه هل تضن انك تستطيع الهرب',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'ماذا الان','callback_data'=>'then_e']],
]])]);}
if($data == 'fide'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'ههه هل تضن انك تستطيع مواجهتي',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'ماذا الان','callback_data'=>'then_e']],
]])]);}
if($data == 'then_e'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'سمعت ان العالم سينتهي قريبا هل هاذا حقيقي',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'لا','callback_data'=>'noth'],
['text'=>'نعم','callback_data'=>'askme']],
]])]);}
if($data == 'askme'){bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'هاذا رائع يبدو ان سلسلة البشر سوف تنتهي اخيرا ',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'اكمل','callback_data'=>'o17']],
]])]);}
if($data == 'noth'){bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'هاذا مؤسف فالبشر لا يستحقون العيش ',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'اكمل','callback_data'=>'o17']],
]])]);}
if($data == 'o17'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'اريد ان اطلب منك شيئ ',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'لا يهمني','callback_data'=>'not_care'],
['text'=>'اطلبي','callback_data'=>'oo8']],
]])]);}
if($data == 'oo8'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'اكتب اسمي على يدك بلشفرة لتبقى هاذه الذكرى محفوضة',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسنا','callback_data'=>'acsept'],
['text'=>'لا اريد','callback_data'=>'19']],
]])]);}
if($data == 'acsept'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'الم تفهم بعد؟ انت الان ملكي ولا يمكنك رفض شيئ',
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسنا','callback_data'=>'180']],
]])]);}

if($data == '180' or $data =="19"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',[
 'chat_id'=>$chat_id2,
'text'=>'• النـهاية ☹️💔

- خلصت العبه شنو هيه شبع 🃏

• اضغط ع [ اعادة لعب ]
لـ اعادة لعبه مره اخرى 🚸

• اضغط ع [ الصفحه الرئيسيه ] لـروئية باقي الالعاب 🕹

- مطور البوت @Taher9ja',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسيه 🔖','callback_data'=>'هدوء']],   
[['text'=>'• اعادة الـعبة 🚡','callback_data'=>'php_i']]    
]    
])
]);
}
if($data == 'هدوء'){
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
'text'=>'• اهلا بك ؛  
- في قسم الالعاب 

- القسم يحتوي على مجموعة  من اللعاب  🌚


- اختيار نوع العبه 🃏 ثم الضغط ع زر [ ابدا ] 🤹🏿‍♀️

• اختر الان العبه 👇
• مطور البوت @Taher9ja ..',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'من سيربح المليون 💰','callback_data'=>"mle"],['text'=>'لعـبة مريم 💁🏼‍♀️','callback_data'=>'php_i']],
[['text'=>'لو خيروك 💳','callback_data'=>'lo'],['text'=>'المحيبس ✌️👊🏼','callback_data'=>'mhb'],['text'=>'اللعاب العقل🧠💡','callback_data'=>'ja']],
[['text'=>' حزورة بليـره ⚖️','callback_data'=>'hzo'],['text'=>" حوت الازرق 🐳",'callback_data'=>'hot']],
[['text'=>' العودة الى القائمة الرئسية🔙','callback_data'=>'main111']],
[['text'=>'تابع ☎️','url'=>'https://t.me/engeeringeletical']],]])]); }

if($data == "ja"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- مرحبا بك في 🗳
-لعبة اللعاب العقل 🧠

- اضغط ع زر [ابدا]  لـ بدا العبه الان 🥤

- اضغط ع زر [الصفحه الرئيسيه ] للرجوع الى القائمه الاولئ 🚸",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>" ابدأ العب 🆑",'callback_data'=>"taher1"]
],
[['text'=>'الصفحة الرئيسيه ⚛️','callback_data'=>'هدوء']],   
]
])
]);
}
if($data=="taher"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- مرحبا بك في 🗳
- لعبة حزوره بليره 💰

- اضغط ع زر [ابدا]  لـ بدا العبه الان 🥤

- اضغط ع زر [الصفحه الرئيسيه ] للرجوع الى القائمه الاولئ 🚸",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"نبدأء العب 🚸",'callback_data'=>"taher1"]
],
[['text'=>'الصفحة الرئيسيه 🔖','callback_data'=>'هدوء']],   ]
])
]);
}


if($data=="dev_ta"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• اجابتك كانت خاطئه للأسف ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"رجوع 🔙",'callback_data'=>"taher"]
],
[
['text'=>"قناتي 📡",'url'=>"https://t.me/engeeringeletical"]
],
]
])
]);
}
if($data=="taherj"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"انتهت العبه اجاباتك كانت خاطئه ⚠️",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"رجوع 🔙",'callback_data'=>"taher"]
],
[
['text'=>"قناتي 📡",'url'=>"https://t.me/engeeringeletical"]
],
]
])
]);
}
if($data=="taher1"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"س1: كم استمرت حرب المئه عام؟   ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"99",'callback_data'=>"dev_ta"],
['text'=>"116",'callback_data'=>"tahert1"]],
[['text'=>"100",'callback_data'=>"taherj"],
['text'=>"110",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert1"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اجابتك صحيحة 🌚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️",'callback_data'=>"taher2"]],
]])]);}
if($data=="taher2"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"س2 : ما هو الشيء الذي ولد باستخدام النار ولكنه صفي كالماء؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" الزجاج",'callback_data'=>"tahert2"]],
[['text'=>"السراميك",'callback_data'=>"dev_ta"]],
[['text'=>"العجين",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert2"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• متابعه ",'callback_data'=>"taher3"]],
]])]);}
if($data=="taher3"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"س3:من هو العالم الذي قام باكتشاف كرات الدم البيضاء؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" ابن سينا",'callback_data'=>"dev_ta"]
],
[['text'=>"سيناك",'callback_data'=>"tahert3"]],
]])]);}
if($data=="tahert3"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher4"]],
]])]);}
if($data=="taher4"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"س/ ما هو الشيئ الذي لا يتمكن اي احد من كسره ؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" الامل",'callback_data'=>"tahert4"]],
[['text'=>"الزجاج مقوى",'callback_data'=>"dev_ta"]],
[['text'=>"الصب",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert4"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher5"]],
]])]);}
if($data=="taher5"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"س/ يمتلك اوراق وليس نبات ويمتلك جلد وليس حيوان ، وهو علم وليس بانسان ، فمن يكون ؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" الموبايل",'callback_data'=>"dev_ta"]],
[['text'=>"الكتاب ",'callback_data'=>"tahert5"]],
[['text'=>"القلم",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert5"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher6"]],
]])]);}
if($data=="taher6"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"س/ ما هو الرقم الذي اذا ضٌرب في الرقم الذي يأتي بعده كان حاصل الضرب يساوي جمع الرقمين مضاف اليه 19 ؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" 4&3",'callback_data'=>"dev_ta"]],
[['text'=>"7&8 ",'callback_data'=>"taherj"]],
[['text'=>"6&5",'callback_data'=>"tahert6"]],
]])]);}
if($data=="tahert6"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher7"]],
]])]);}
if($data=="taher7"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"س/ شيئ اذا قمت بصب الماء عليه فلن يبتل ، ما هو هذا الشيئ ؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" النار🔥",'callback_data'=>"dev_ta"]],
[['text'=>"🌊الماء ",'callback_data'=>"taherj"]],
[['text'=>"🧟الظل",'callback_data'=>"tahert7"]],
]])]);}
if($data=="tahert7"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher8"]],
]])]);}
if($data=="taher8"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ما هو العدد الذي يقبل القسمة على كل من: 2، 3، 4، 5، 6 وفي كل مرة يكون الباقي واحد ؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" 21",'callback_data'=>"dev_ta"]],
[['text'=>"41 ",'callback_data'=>"taherj"]],
[['text'=>"61",'callback_data'=>"tahert8"]],
]])]);}
if($data=="tahert8"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher10"]],
]])]);}
if($data=="taher10"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ما هو العدد الذي يقبل القسمة على كل من: 2، 3، 4، 5، 6 وفي كل مرة يكون الباقي واحد ؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"البترول",'callback_data'=>"tahert10"]],
[['text'=>" النحاس",'callback_data'=>"dev_ta"]],
[['text'=>"المغناطيس ",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert10"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher11"]],
]])]);}
if($data=="taher11"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"يوجد بجسم الانسان ما يسمي بالجيوب الانفية ضمن قائمة اعضاء الجهاز التنفسي لدى الانسان فما عدد هذه الجيوب؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"8",'callback_data'=>"tahert11"]],
[['text'=>" 9",'callback_data'=>"dev_ta"]],
[['text'=>"12 ",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert11"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher12"]],
]])]);}
if($data=="taher12"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ماهو علم الميتورولوجيا ؟
",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" علم الارض🌍",'callback_data'=>"dev_ta"]],
[['text'=>"علم الرصد الجوي⛈",'callback_data'=>"tahert12"]],
[['text'=>"علم الحياة البرية🐆 ",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert12"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher13"]],
]])]);}
if($data=="taher13"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"من يتحمل العطش أكثر من الجمل ؟
",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🐇أرنب",'callback_data'=>"dev_ta"]],
[['text'=>"وحيد قرن🦏",'callback_data'=>"taherj"]],
[['text'=>"الزرافة🦒 ",'callback_data'=>"tahert13"]],
]])]);}
if($data=="tahert13"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher14"]],
]])]);}
if($data=="taher14"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ماأسم وحده قياس شده الصوت ؟
 ؟
",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الديسيبل.🔊 ",'callback_data'=>"tahert15"],['text'=>"المايكروفاراد🔈",'callback_data'=>"taherj"],['text'=>"المايكرويف🔈",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert15"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher16"]],
]])]);}
if($data=="taher16"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ما هي نسبه المياه من الكره الارضيه ؟
",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"71 %",'callback_data'=>"tahert16"],['text'=>"61 %",'callback_data'=>"taherj"],
['text'=>"81 %",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert16"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher17"]],
]])]);}
if($data=="taher17"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"كم خلية دم حمراء يستطيع أنتاجها الجسم في اليوم الواحد ؟
",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"150 مليون خلية🔴",'callback_data'=>"taherj"],['text'=>"200 مليون خلية🔴",'callback_data'=>"tahert17"]], [['text'=>"350 مليون خلية🔴",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert17"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher18"]],
]])]);}
if($data=="taher18"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"أي من اعضاء الجسم يستهلك 40% من أوكسجين الدم ؟
",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"المخ🧠
 ",'callback_data'=>"tahert18"]],[['text'=>"الكبد🌫
",'callback_data'=>"taherj"]],[['text'=>"القلب♥️",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert18"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher19"]],
]])]);}
if($data=="taher19"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"كم تبلغ درجه حراره الشمس🌞؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"15 مليون درجه مئوية🔥 ",'callback_data'=>"tahert19"]],
[['text'=>"🔥10 مليون درجه مئوية",'callback_data'=>"taherj"]],
[['text'=>"🔥20 مليون درجه مئوية",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert19"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher20"]],
]])]);}
if($data=="taher20"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"من هي أطول الكائنات الحيه عمر؟
🌱",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الثعلب🦊",'callback_data'=>"taherj"],['text'=>"السلحفاة🐢 ",'callback_data'=>"tahert20"]],
 [['text'=>"الخنزير🐷",'callback_data'=>"taherj"],['text'=>"الضفدع🐸",'callback_data'=>"taherj"],
['text'=>"الفرس🐴",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert20"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher21"]],
]])]);}
if($data=="taher21"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"كم يبلغ طول الاثنا عشر من معدة الانسان؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"يتراوح ما بين 10 : 20 سم.",'callback_data'=>"taherj"],
['text'=>"يتراوح ما بين 20 : 25 سم.",'callback_data'=>"tahert21"]],
]])]);}
if($data=="tahert21"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher22"]],
]])]);}
if($data=="taher22"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"الي اي تصنيف تنتمي ثمار الموز؟
",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الكربوهيدرات🍇",'callback_data'=>"taherj"],['text'=>"النشويات🍞",'callback_data'=>"tahert22"]],
]])]);}
if($data=="tahert22"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher23"]],
]])]);}
if($data=="taher23"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ماهو الاسم العربي للانزيمات؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الفطر",'callback_data'=>"taherj"],['text'=>"الفطريات",'callback_data'=>"taherj"],
['text'=>"الخمائر",'callback_data'=>"tahert23"]],
]])]);}
if($data=="tahert23"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher255"]],
]])]);}
if($data=="taher255"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" من هو مخترع المصباح الكهربائي؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" توماس أديسون.💡",'callback_data'=>"tahert255"],['text'=>"إسحاق نيوتن💡",'callback_data'=>"taherj"]],
[['text'=>"نيكولا تسلا💡",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert255"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher25"]],
]])]);}
if($data=="taher25"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ما هي السورة التي تعدل ربع القرآن ؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" الكافرون",'callback_data'=>"tahert25"],['text'=>"الكوثــر",'callback_data'=>"taherj"],
['text'=>"النصر",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert25"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher26"]],
]])]);}
if($data=="taher26"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ما هي السورة التي تسمى بالفاضحة ؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" التوبة",'callback_data'=>"tahert26"],['text'=>"البقرة",'callback_data'=>"taherj"],
['text'=>"الحجيرات",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert26"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher27"]],
]])]);}
if($data=="taher27"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ما هو الشيء الذي لا يمشي إلا بالضرب ؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"البقرة🐂",'callback_data'=>"taherj"]],
[['text'=>" المسمار🔩",'callback_data'=>"tahert27"],['text'=>"الحمار🐎",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert27"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher28"]],
]])]);}
if($data=="taher28"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"شيء تأكل منه ولا تأكله ؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التمر",'callback_data'=>"taherj"]],
[['text'=>" 🍮الصحن",'callback_data'=>"tahert28"],['text'=>"الورق",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert28"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher29"]],
]])]);}
if($data=="taher29"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اسم فاكهة يمكن قراءتها بالعكس ولا يتغير اسمها فما هي ؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"البطيخ🍉",'callback_data'=>"taherj"],['text'=>"التوت🍒 ",'callback_data'=>"tahert29"],
['text'=>"العنب🍇",'callback_data'=>"taherj"],['text'=>"مشمش🍑",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert29"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taher30"]],
]])]);}
if($data=="taher30"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"شيء يُلبس .. نصفه الثاني تـم فما هو ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"خاتم💍 ",'callback_data'=>"tahert30"],['text'=>"التاج👑",'callback_data'=>"taherj"]],
[['text'=>"القبعة👒",'callback_data'=>"taherj"]],
]])]);}
if($data=="tahert30"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"التالي⬅️ ",'callback_data'=>"taherend"]],
]])]);}
if($data == 'taherend'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'• النـهاية ☹️💔

-كافي خلصت اللعبة جا شبع هي 🃏

• اضغط ع [ اعادة لعب ]
لـ اعادة لعبه مره اخرى 🚸

• اضغط ع [ الصفحه الرئيسيه ] لـروئية باقي الالعاب 🕹

- Dev: @Taher9ja',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'إعادة الـعبة 🕹','callback_data'=>'ja']],
[['text'=>'الصفحة الرئيسيه 🔖','callback_data'=>'هدوء']],     
]])]);}
if($data == "main111"){
    bot('EditMessageText',[
'chat_id'=>$chat_id2,    
'message_id'=>$message_id2,
'text'=>"•   اهلا بك ؛ 
- في بوت تحليل الشخصية ♥️.
- كل ماعليك هو الاجابة ع الاسألة التالية🧾.
- سيقوم البوت بتحليل شخصيتك .
- من خلال اجابتك على الاسألة الخمسة ..
-اذا مالك خلك دوس على اللعاب 
• مطور البوت @Taher9ja ..",
'reply_markup'=>json_encode([     
'inline_keyboard'=>[
[['text'=>'إبدأ بتحليل شخصيتك .📄','callback_data'=>"Q1"]],
[['text'=>'اللعاب للتسلية🕹','callback_data'=>"/play"]],
[['text'=>"⚜️|🌚 مطور البوت ",'url'=>"https://t.me/Taher9ja"],
['text'=>"📌|📢 قناة البوت",'url'=>"https://t.me/engeeringeletical"]],
]
])
]);
}
$sudo = 1558989167; //ايديك
$t =$message->chat->title; 
$user = $message->from->username; 
if($text == "/start") {
bot( sendmessage ,[
 chat_id =>$chat_id, 
 text =>"
 ",
 reply_to_message_id =>$message->message_id,
]);
bot( sendMessage ,[
 chat_id =>$sudo,
 text =>"تم دخول شخص الى البوت الخاص بك 🔰،

📮┇معلوماته في الأسفل 👋
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
🔰┇الاسم ،  [$name](tg://user?id=$chat_id) ؛ 
📌┇الايدي ، [$from_id](tg://user?id=$chat_id) ؛ 
👁‍🗨┇المعرف ،  [@$username](tg://user?id=$chat_id) ؛ 

﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 disable_web_page_preview => true ,
 parse_mode =>"Markdown",
 
]);
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
#التخزين
$admin = "1558989167"; #ايديك
$from_id = $message->from->id;
mkdir("alsh");
if(isset($message)){
$al = file_get_contents('Alsh.txt');
$alo = explode("\n",$al);
if(!in_array($from_id,$alo)){
$alsh2 = fopen("Alsh.txt", "a") or die("Unable to open file!");
fwrite($alsh2, "$from_id\n");
fclose($alsh2);}}
#الاوامر
$bot = file_get_contents("alsh/com.txt");
if($text == "/admin" and $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"هاي $name 🍟.
`/u` : اذاعه  .
`/m` : لعرض عدد مشتركين  .
`/n` : لعمل اذاعه بالتوجيه .
`/i` : لعمل اذاعه انلاين",
'parse_mode'=>"Markdown",
]);
}
if($text == "/start" and $chat_id != $admin){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"
*New Member* -  [$chat_id](tg://alshh3?id=$chat_id)
*Name Member* - [$name](tg://alshh3?id=$chat_id)",
'parse_mode'=>"Markdown",
]);
}
if($text == "/u" and $chat_id == $admin){
file_put_contents("alsh/com.txt","send");
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" ارسل رسالتك الان عزيزي 🎯. #يمكنك استخدام الماركدان ايضا",
    'parse_mode'=>'html',
  ]);
}
$ali = fopen( "Alsh.txt", 'r');
while(!feof( $ali)){
$alshh3 = fgets($ali);
if($bot == "send" and $chat_id == $admin){
bot('sendMessage', [
'chat_id' =>$alshh3,
'text'=>$text,
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>"true"
]);
file_put_contents("alsh/com.txt","");
}
}
$alshh3 = file_get_contents("Alsh.txt");
$member_id = explode("\n",$alshh3);
$member = count($member_id) -1;
if($text == "/m" and $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
    'text'=>"اعضا البوت: $member 🎁.",
  ]);
}
$vg = file_get_contents("lsh.txt");
$tx = file_get_contents("alh.txt");
if($text == "/i"){
file_put_contents("lsh.txt","sn");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"حسـننآ آلآن ارسل نص تريد نشرة ك منشور شفاف 🎁. #ملاحظه يمكنك استخدام الماركدوان ايضا",
]);
}
if($vg == "sn"){
file_put_contents("alh.txt","$text");
file_put_contents("lsh.txt","snn");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"حسننا الان استخدم🎄.
text = link",
]);
}
$i=0;
$keyboard = [];
$keyboard["inline_keyboard"] = [];
$rows = explode("\n",$text);
foreach($rows as $row){
$j=0;
$keyboard["inline_keyboard"][$i]=[];
$bottons = explode("+",$row);
foreach($bottons as $botton){
$alsh = explode("=",$botton."=");
$Ibotton = ["text" => trim($alsh[0]), "url" => trim($alsh[1])];
$keyboard["inline_keyboard"][$i][$j] = $Ibotton;
$j++;                }                $i++;            }
$reply_markup=json_encode($keyboard);
if($vg == "snn"){
$ali = fopen( "Alsh.txt", 'r');
while(!feof( $ali)){
$alshh = fgets($ali);
bot('sendmessage',[
'chat_id'=>$alshh,
'text'=>$tx,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>($reply_markup)
]);
}
file_put_contents("lsh.txt","hi");
file_put_contents("alh.txt","");
}
if($text == "/n" and $chat_id == $admin){
file_put_contents("alsh/com.txt","fd");
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" ارسل توجيهك الان عزيزي 📌.",
    'parse_mode'=>'html',
  ]);
}
if($bot == "fd"){
$ali = fopen( "Alsh.txt", 'r');
while(!feof( $ali)){
$ali2 = fgets($ali);
bot('forwardMessage',[
 'chat_id'=>$ali2,
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 file_put_contents("alsh/com.txt","");
 }
 }