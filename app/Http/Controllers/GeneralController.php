<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GeneralController extends Controller
{
    public static function send_sms($phone, $msg, $name = "")
    {
        $text = $msg;
        $endPoint = 'https://api.mnotify.com/api/sms/quick';
        $apiKey = 'I1kgq4ueNfwOdidhyAINxNkANQLipO88QtpgxUvl919nk'; // 0556376637
        // $apiKey = 'vGdU3BhPfAFXZfxBPeodSgQwYKFt8ZXEGayJMQz1qeZpu'; // for 0263384501
        $url = $endPoint . '?key=' . $apiKey;
        $data = [
            'recipient' => ["$phone"],
            'sender' => 'LWCC',
            'message' => $text,
            'is_schedule' => 'false',
            'schedule_date' => ''
        ];

        $ch = curl_init();
        $headers = array();
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $result = curl_exec($ch);
        Log::warning("######################### " . $result);
        $result = json_decode($result, TRUE);
        curl_close($ch);
    }
}
