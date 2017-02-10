<?php
ob_start();
/*
─═ঊঈঊঈ═─╮
MrPHP 
V 1.o
Developer : mohammadhosseinheidari
Bot ID : @MrPHPBot
Dev ID : @NOBLEST
GitAdress : Github.com/NobLestDev/MrPHPBot
─═ঊঈঊঈ═─╯
*/
define('API_KEY','322735835:AAH90FX5sGg9oHFbLyCN9gqiBK-R8Ci0xcQ');
//-----------------------------------------------------------------------------------------
//فانکشن MrPHPBot :
function MrPHPBot($method,$datas=[]){
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
//-----------------------------------------------------------------------------------------
//متغیر ها :
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
mkdir("data/$from_id");
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$textmassage = $message->text;
$step= file_get_contents("data/$from_id/file.txt");
$Dev = 193930120;
$txtt = file_get_contents('data/users.txt');
$data = $update->callback_query->data;
$chatid = $update->callback_query->message->chat->id;
$joke = file_get_contents("https://web-service.000webhostapp.com/jock");
$messageid = $update->callback_query->message->message_id;
//-----------------------------------------------------------------------------------------
//فانکشن ها : 
function sendMessage($chat_id, $text, $reply_to_message_id){
MrPHPBot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'html',
'reply_to_message_id'=>$reply_to_message_id]);
	 }
function Forward($KojaShe,$AzKoja,$KodomMSG)
{
MrPHPBot('ForwardMessage',[
'chat_id'=>$KojaShe,
'from_chat_id'=>$AzKoja,
'message_id'=>$KodomMSG
]);
}
function SendPhoto($chat_id, $photo, $caption = null){
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$photo,
'caption'=>$caption
]);
}
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function sendAction($chat_id, $action){
MrPHPBot('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action]);
}
//-----------------------------------------------------------------------------------------
if($textmassage=="/start"){
        sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"h: ",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"بخش ابزارها 🛠"],['text'=>"بخش مارک دون 📝"]
	],
	[
	['text'=>"کانال ما 🌐"],['text'=>"درباره ما ❓"]
	],
 	[
	['text'=>"بروزرسانی 🔃"],['text'=>"ارسال نظر 📩"]
	],
	]
	])
	
	]);
	
	
	}if($textmassage=="🔲🔳
🔳🔲"){
        sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"منوی اصلی :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"بخش ابزارها 🛠"],['text'=>"بخش مارک دون 📝"]
	],
	[
	['text'=>"کانال ما 🌐"],['text'=>"درباره ما ❓"]
	],
 	[
	['text'=>"بروزرسانی 🔃"],['text'=>"ارسال نظر 📩"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="بخش ابزارها 🛠"){
        sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"یکی از گزینه ها را انتخاب کنید :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"جوک رندوم 📝"],['text'=>"لینک شما 🔗"]
  ],
  [
	['text'=>["ساخت لوگو 🎗"],['text'=>"طراحی اسم 📝"]
	],
	[
	['text'=>"اطلاعات شما 🆔"],['text'=>"🔲🔳
🔳🔲"]
	]
	]
	])
	
	]);
	
	
	}elseif($textmassage=="بخش مارک دون 📝"){
        sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"لطفا یکی از گزینه ها را انتخاب کنید :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"درشت کردن نوشته ✏️"],['text'=>"کج کردن نوشته ✏️"]
	],
	[
	['text'=>"کد کردن نوشته ✏️"],['text'=>"🔲🔳
🔳🔲"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="درشت کردن نوشته ✏️"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","bold");
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"متن خود را بفرستید :",
		]);
		}elseif($step=="bold"){
                       save("data/$from_id/file.txt","none");
			MrPHPBot('sendmessage',[
			'chat_id'=>$chat_id,
			'text'=>"*$textmassage*",
      'parse_mode'=>'MarkDown',
			]);
}elseif($textmassage=="کج کردن نوشته ✏️"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","italic");
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"متن خود را بفرستید :",
		]);
		}elseif($step=="italic"){
                       save("data/$from_id/file.txt","none");
			MrPHPBot('sendmessage',[
			'chat_id'=>$chat_id,
			'text'=>"_ $textmassage _",
      'parse_mode'=>'MarkDown',
			]);
}elseif($textmassage=="کد کردن نوشته ✏️"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","code");
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"متن خود را بفرستید :",
		]);
		}elseif($step=="code"){
                       save("data/$from_id/file.txt","none");
			MrPHPBot('sendmessage',[
			'chat_id'=>$chat_id,
			'text'=>"`$textmassage`",
      'parse_mode'=>'MarkDown',
			]);
}elseif($textmassage=="طراحی اسم 📝"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","name");
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"نام خود را فرستید :",
		]);
		}elseif($step=="name"){
                       save("data/$from_id/file.txt","none");
			MrPHPBot('sendmessage',[
			'chat_id'=>$chat_id,
			'text'=>"تکمیل نشده است.",
      'parse_mode'=>'MarkDown',
			]);
}elseif($textmassage=="ارسال نظر 📩"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","nazar");
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"متن خود را ارسال کنید :",
                 'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"🔲🔳
🔳🔲"]
	],
	]
	])
	
	]);
	
	
	}elseif($step=="nazar"){            
                       save("data/$from_id/file.txt","none");
                          Forward($Dev,$chat_id,$message_id);
			MrPHPBot('sendmessage',[       
			'chat_id'=>$chat_id,
			'text'=>"نظر شما با موفقیت ارسال شد",
      'parse_mode'=>'MarkDown',
	
	]);
	
	
	}elseif($textmassage=="درباره ما ❓"){
        sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"_
این ربات با زبان برنامه نویسی پی اچ پی نوشته شده است
V1.0
قابلیت های این ربات :

1- ارسال مطلب به کانال
2- طراحی اسم
3- طراحی لوگو
4- قابلیت مارک دون
5- ارسال جوک به صورت رندوم
6- ارسال اخبار
7- ارسال زمان وتاریخ
8- قابلیت برعکس کردن نوشته
9- منویی زیبا
10- دارای پنل مدیریت کاملا هوشمند
وبسیاری از امکانات دیگر.
برنامه نویس : محمدحسین حیدری
ارتباط با برنامه نویس : 
@NobLest
@NobLestBot_",
'parse_mode'=>'MarkDown',
			]);
}elseif($textmassage=="کانال ما 🌐"){
        sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"جهت حمایت از ما در کانال ما عضو شوید.",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
	[
	['text'=>"💠 عضویت در کانال ما",'url'=>"https://telegram.me/MrPHPTM"]
	],
	]
	])
	
	]);
	
	
	}elseif ($textmassage == "بروزرسانی 🔃"){
 sendAction($chat_id, 'typing');
 MrPHPBot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'0%'
 ]);
 sleep(1);
 MrPHPBot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>'10%'
 ]);
 sleep(1);
 MrPHPBot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'20%'
 ]);
 sleep(1);
 MrPHPBot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'30%'
 ]);
 sleep(1);
 MrPHPBot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'40%'
 ]);
 sleep(1);
 MrPHPBot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'50%'
 ]);
 sleep(1);
 MrPHPBot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'60%'
 ]);
 sleep(1);
 MrPHPBot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'70%'
 ]);
 sleep(1);
 MrPHPBot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'80%'
 ]);
 sleep(1);
 MrPHPBot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'90%'
 ]);
 sleep(1);
 MrPHPBot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'100%'
 ]);
 sleep(1);
 MrPHPBot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'آپدیت شد.'
 ]);		
 }elseif($textmassage=="اطلاعات شما 🆔"){
        sendAction($chat_id, 'typing');
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"*Your Information* :\n------\n*FirstName* : `$first_name`\n------\n*LastName* : `$last_name`\n------\n*UserName* : `@$username`\n------\n*Telegram ID* : `$from_id`",
    'parse_mode'=>'MarkDown',
		]);
		}elseif($textmassage=="لینک شما 🔗"){
        sendAction($chat_id, 'typing');
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"لینک اختصاصی شما :\nhttps://telegram.me/MrPHPBot?start=MPB$from_id",
    'parse_mode'=>'MarkDown',
		]);
		}elseif($textmassage=="جوک رندوم 📝"){
        sendAction($chat_id, 'typing');
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"$joke\n-------\n@MrPHPBot",
    'parse_mode'=>'MarkDown',
		]);
		}
 //end 
 $users = file_get_contents('data/users.txt');
$members = explode("\n", $users);
if (!in_array($chat_id, $members)) {
    $adduser = file_get_contents('data/users.txt');
    $adduser .= $chat_id . "\n";
    file_put_contents('data/users.txt', $adduser);
}if ($textmassage == 'sendtoall' && $from_id == $Dev){
	     sendAction($chat_id, 'typing');
	     save("data/$from_id/file.txt","toalll");
		 sendMessage($chat_id, 'پیام خود را ارسال کنید :', $message_id);
	   }
	   elseif ($step == 'toalll' && $from_id == $Dev){
		 sendAction($chat_id, 'typing');
		 sendMessage($chat_id, 'در حال انجام عملیات ...', $message_id);
	     save("data/$from_id/file.txt","none");
		 $sendtoall = $textmassage;
     $ttxtt = file_get_contents('data/users.txt');
		 $membersidd = explode("\n", $ttxtt);
    for ($y = 0; $y < count($membersidd); $y++) {
		   sendMessage($membersidd[$y], $sendtoall, $message_id);
		 }
		 sendAction($chat_id, 'typing');
		 sendMessage($chat_id, "ارسال شد", $message_id);
	   }elseif($textmassage=="/stats" && $from_id == $Dev){
                        $membersidd= explode("\n",$txtt);
                        $mmemcount = count($membersidd) -1;
                        sendAction($chat_id, 'typing');
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"تعداد کاربران : $mmemcount",
		]);
		}
?>
