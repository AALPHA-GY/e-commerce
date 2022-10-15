<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $onesignal_user_app_id = '0c7baeee-ecd2-4c0c-b9ee-3e8ca813b242';
    public $onesignal_user_token = 'YmMyMWYwOTYtMWFkNy00YzhlLWE3OTktNmJmZGYxNjQwYWVi';

    //**NEW MESSAGE METHOD SECTION***
    function sendPush($title, $description, $uid = 0)
    {
        $content = ["en" => $description];
        $head = ["en" => $title];

        $daTags = [];

        if ($uid > 0) {
            $daTags = ["field" => "tag", "key" => "user_id", "relation" => "=", "value" => $uid];
        } else {
            $daTags = ["field" => "tag", "key" => "user_id", "relation" => "!=", "value" => 'NAN'];
        }

        $fields = array(
            'app_id' => $this->onesignal_user_app_id,
            'included_segments' => array('Active Users'),
            'filters' => [$daTags],
            'data' => array("foo" => "bar"),
            'contents' => $content,
            'headings' => $head,
        );


        $fields = json_encode($fields);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
            'Authorization: Basic ' . $this->onesignal_user_token));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
}
