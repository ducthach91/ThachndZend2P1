<?php
echo "SERVER_REMOTE_ADDR: ",$_SERVER['REMOTE_ADDR'],"<br>";
echo "SERVER_HTTP_CLIENT_IP: ",$_SERVER['HTTP_CLIENT_IP'],"<br>";
echo "SERVER_HTTP_X_FORWARDED_FOR: ",$_SERVER['HTTP_X_FORWARDED_FOR'],"<br>";
echo "SERVER_HTTP_X_FORWARDED: ",$_SERVER['HTTP_X_FORWARDED'],"<br>";
echo "SERVER_HTTP_FORWARDED_FOR: ",$_SERVER['HTTP_FORWARDED_FOR'],"<br>";
echo "SERVER_HTTP_FORWARDED: ",$_SERVER['HTTP_FORWARDED'],"<br>";

function get_client_ip() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

echo "IP: ",get_client_ip(),"<pre>";
echo gethostbyaddr("118.8.161.61");
print_r($_SERVER);