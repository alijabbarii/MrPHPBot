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
define('API_KEY','');
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
mkdir("data/username.txt/$username");
$textmassage = $message->text;
$step= file_get_contents("data/$from_id/file.txt");
$Dev = 193930120;
$Dev2 = 283392246;
$txtt = file_get_contents('data/users.txt');
$jj = file_get_contents("http://web-service.000webhostapp.com/joke");
$messageid = $update->callback_query->message->message_id;
$ban = file_get_contents('data/banlist.txt');
//-----------------------------------------------------------------------------------------
//فانکشن ها : 
function SendMessage($chat_id, $text){
MrPHPBot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
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
	'text'=>"` 🎗سلام به ربات اقای پی اچ پی خوش آمدید
لطفا زبان خود را انتخاب کنید : 
—-------------------------------
Languages : 🇮🇷 🇬🇧
--------------------------------
🎗Welcome To MrPHPBot
Please Select Your Language :`",
        'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"English 🇬🇧"],['text'=>"فارسی 🇮🇷"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="تغییر زبان ⚓️"){
        sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"لطفا زبان خود را انتخاب کنید :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"English 🇬🇧"],['text'=>"فارسی 🇮🇷"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="Change language ⚓️"){
        sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"Please choose your language :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"English 🇬🇧"],['text'=>"فارسی 🇮🇷"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="🔲🔳
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
        [
	['text'=>"اخبار ربات 🎗"],['text'=>"تغییر زبان ⚓️"]
	],
        [
	['text'=>"آمار ربات 📊"],['text'=>"تبلیغات 💢"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="فارسی 🇮🇷"){
        sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"لطفا یکی از گزینه ها را انتخاب کنید :",
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
        [
	['text'=>"اخبار ربات 🎗"],['text'=>"تغییر زبان ⚓️"]
	],
        [
	['text'=>"آمار ربات 📊"],['text'=>"تبلیغات 💢"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="🔳🔲
🔲🔳"){
        sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"Main Menu :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"Tools Section 🛠"],['text'=>"MarkDown Section 📝"]
	],
	[
	['text'=>"Our Channel 🌐"],['text'=>"About us ❓"]
	],
 	[
	['text'=>"Update 🔃"],['text'=>"Post a Comment 📩"]
	],
        [
	['text'=>"Robot News 🎗"],['text'=>"Change language ⚓️"]
	],
        [
	['text'=>"The number of users 📊"],['text'=>"Advertising 💢"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="English 🇬🇧"){
        sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"Please choose one of these options :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"Tools Section 🛠"],['text'=>"MarkDown Section 📝"]
	],
	[
	['text'=>"Our Channel 🌐"],['text'=>"About us ❓"]
	],
 	[
	['text'=>"Update 🔃"],['text'=>"Post a Comment 📩"]
	],
        [
	['text'=>"Robot News 🎗"],['text'=>"Change language ⚓️"]
	],
        [
	['text'=>"The number of users 📊"],['text'=>"Advertising 💢"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="Tools Section 🛠"){
        sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"Please choose one of these options :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"Joke Random 📝"],['text'=>"Your Link 🔗"]
	],
	[
	['text'=>"your information 🆔"],['text'=>"🔳🔲
🔲🔳"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="بخش ابزارها 🛠"){
        sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"لطفا یکی از گزینه ها را انتخاب کنید :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"جوک رندوم 📝"],['text'=>"لینک شما 🔗"]
	],
	[
	['text'=>"اطلاعات شما 🆔"],['text'=>"🔲🔳
🔳🔲"]
	],
	]
	])
	
	]);
	
	
	}elseif($textmassage=="MarkDown Section 📝"){
        sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"Please choose one of these options :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"Bold Text ✏️"],['text'=>"Italice Text ✏️"]
	],
	[
	['text'=>"Code Text ✏️"],['text'=>"🔳🔲
🔲🔳"]
	],
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
}elseif($textmassage=="Bold Text ✏️"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","bold1");
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"Send your text :",
		]);
		}elseif($step=="bold1"){
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
}elseif($textmassage=="Italice Text ✏️"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","italic1");
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"Send your text :",
		]);
		}elseif($step=="italic1"){
                       save("data/$from_id/file.txt","none");
			MrPHPBot('sendmessage',[
			'chat_id'=>$chat_id,
			'text'=>"_ $textmassage _",
      'parse_mode'=>'MarkDown',
			]);
}elseif($textmassage=="Code Text ✏️"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","code1");
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"Send your text :",
		]);
		}elseif($step=="code1"){
                       save("data/$from_id/file.txt","none");
			MrPHPBot('sendmessage',[
			'chat_id'=>$chat_id,
			'text'=>"`$textmassage`",
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
}elseif($textmassage=="Post a Comment 📩"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","nazar1");
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"Please submit your opinion :",
                 'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"🔳🔲
🔲🔳"]
	],
	]
	])
	
	]);
	
	
	}elseif($step=="nazar1"){            
                       save("data/$from_id/file.txt","none");
                          Forward($Dev,$chat_id,$message_id);
			MrPHPBot('sendmessage',[       
			'chat_id'=>$chat_id,
			'text'=>"Send.",
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
	
	
	}elseif($textmassage=="About us ❓"){
        sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"_
The robot programming language is written in PHP
V1.0
The robot capabilities:

1. Send it to channel
2. Design name
3. Logo Design
4. Ability to Mark Dunne
5. Send random jokes
6. Send news
7. Post time history
8. Ability to reverse the written
9. beautiful menu
10 has quite smart admin panel
And many other features.
Programmer: Mohammad Hossein Heydari
Contact Programmer:
@NobLest
@NobLestBot_",
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
}elseif($textmassage=="Our Channel 🌐"){
        sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"We subscribe to support our channel.",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
	[
	['text'=>"💠 Subscribe to our channel",'url'=>"https://telegram.me/MrPHPTM"]
	],
	]
	])
	
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
	
	
	}elseif ($textmassage == "Update 🔃"){
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
 'text'=>'Updated.'
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
		}elseif($textmassage=="your information 🆔"){
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
		}elseif($textmassage=="YourLink 🔗"){
        sendAction($chat_id, 'typing');
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"YourLink :\nhttps://telegram.me/MrPHPBot?start=MPB$from_id",
    'parse_mode'=>'MarkDown',
		]);
		}elseif($textmassage=="جوک رندوم 📝"){
        sendAction($chat_id, 'typing');
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"$jj\n-------\n@MrPHPTm",
    'parse_mode'=>'MarkDown',
		]);
		}elseif($textmassage=="Joke Random 📝"){
        sendAction($chat_id, 'typing');
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"$jj\n-------\n@MrPHPTM",
    'parse_mode'=>'MarkDown',
		]);
		}
 //end 
 $users = file_get_contents('data/username.txt');
$members = explode("\n", $users);
if (!in_array($username, $members)) {
    $adduser = file_get_contents('data/username.txt');
    $adduser .= $username . "\n";
    file_put_contents('data/username.txt', $adduser);
}$users = file_get_contents('data/users.txt');
$members = explode("\n", $users);
if (!in_array($chat_id, $members)) {
    $adduser = file_get_contents('data/users.txt');
    $adduser .= $chat_id . "\n";
    file_put_contents('data/users.txt', $adduser);
}elseif($textmassage=="The number of users 📊"){
                        $membersidd= explode("\n",$txtt);
                        $mmemcount = count($membersidd) -1;
                        $id = file_get_contents('data/username.txt');
                        sendAction($chat_id, 'typing');
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"The number of users : $mmemcount\n-------\nMembers UserName :\n$id",
		]);
		}elseif($textmassage=="آمار ربات 📊"){
                        $membersidd= explode("\n",$txtt);
                        $mmemcount = count($membersidd) -1;
                        $id = file_get_contents('data/username.txt');
                        sendAction($chat_id, 'typing');
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"تعداد کاربران : $mmemcount\n-------\nآیدی کاربران :\n$id",
		]);
		}elseif($textmassage=="تبلیغات 💢"){
                        sendAction($chat_id, 'typing');
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"جهت سفارش تبلیغات به آیدی زیر مراجعه کنید :\n@NOBLEST",
                'parse_mode'=>'MarkDown',
		]);
		}elseif($textmassage=="Advertising 💢"){
                        sendAction($chat_id, 'typing');
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"To order ads I'd see the following :\n@NOBLEST",
                'parse_mode'=>'MarkDown',
		]);
		}elseif($textmassage=="اخبار ربات 🎗"){
     sendAction($chat_id, 'typing');
     MrPHPBot("forwardmessage", [
            'chat_id'=>$chat_id,
            'from_chat_id'=>"@MrPHPTM",
            'message_id'=>"15"
        ]);
    }elseif($textmassage=="Robot News 🎗"){
     sendAction($chat_id, 'typing');
     MrPHPBot("forwardmessage", [
            'chat_id'=>$chat_id,
            'from_chat_id'=>"@MrPHPTM",
            'message_id'=>"15"
        ]);
    }
?>
