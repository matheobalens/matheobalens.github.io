<?php

namespace App\Controller;

use Mailjet\Client;
use Mailjet\Resources;

class Maol
{
    private string $api_key = 'd811ac98ef4e756c80935be5f2a52f1f';
    private string $api_secret = '94715a034947f753944f839bf2f11634';


    public function send($to_email, $to_name, $subject, $content)
    {
        $mj = new Client($this->api_key, $this->api_secret, true, ['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "matheobalens@gmail.com",
                        'Name' => "Mathéo Balens"
                    ],
                    'To' => [
                        [
                            'Email' => $to_email,
                            'Name' => $to_name
                        ],
                    ],
                    'TemplateID' =>3415316,
                    'TemplateLanguage' => true,
                    'Subject' => $subject,
                    'Variables' => [
                        'content' => $content,

                    ]
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success();
    }
}