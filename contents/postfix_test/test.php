<?PHP

echo 'ロード時にmail送信';


trigger_error('errortrigger',E_USER_NOTICE);


function my_message(){
    return 'hoge';
}
trigger_error(my_message(),E_USER_NOTICE);


error_log("to kamotusyo!　これで届きます", 1,"kamotsuyo@gmail.com");


$array_trace = debug_backtrace();
var_dump($array_trace);
$string_trace = $comma_separated = implode(",", $array_trace);
$to      = 'kamotsuyo@gmail.com';
$subject = 'new the subject';
$message = 'trace==>'.$string_trace;
$headers = 'From: kamogashira.mac@gmail.com' . "\r\n" .
    'Reply-To: kamogashira.mac@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
