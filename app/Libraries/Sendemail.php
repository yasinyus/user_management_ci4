<?php

namespace App\Libraries;


class Sendemail
{
    function sendWithMailgun($from, $to, $subject, $message){
        $url                    =   "https://api:key-8pei9db6weqtwi23y2@api.mailgun.net/v2/nortale.com/messages";
        $message                =   $message;
        $fields                 =   array('from'    => $from,
                                    'to'      => $to,
                                    'subject' => $subject,
                                    'html'    => $message);
        $fields_string =    '';
        foreach($fields as $key=>$value) { $fields_string .= trim($key).'='.urlencode($value).'&'; }//url-ify the data for the POST
        $fields_string         =   substr($fields_string,0,-1);
        $ch                    =   curl_init();//open connection
        curl_setopt($ch,CURLOPT_URL, $url);//set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // so nothing is split out
        curl_setopt($ch,CURLOPT_POST, count($fields));
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
        $res                    =   curl_exec($ch);//execute post
        curl_close($ch);//close connection
        return json_decode($res);
    }
}