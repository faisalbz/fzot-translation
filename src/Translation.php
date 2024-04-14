<?php

namespace Fzot\Translation;

use Illuminate\Support\Facades\Http;

class Translation
{
    private $baseUrl = 'https://api.openai.com/v1/chat/completions';

    public function completions($string)
    {
        $data = [
            'model' => 'gpt-4-turbo',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'Please translate the following product title into Arabic, including translating any brand names, and then into English, maintaining the original brand names in the English translation, adhering to SEO best practices.'
                ],
                [
                    'role' => 'user',
                    'content' => $string
                ]
            ],
            'max_tokens' => 500
        ];

        $response = Http::asJson()->withHeaders([
            'Authorization' => 'Bearer ' . config('fzot_translation.api_key')
        ])->post($this->baseUrl, $data);

        $responseData = json_decode($response, true);
        $tr = [];
        if (isset($responseData['choices'][0]['message']['content'])) {
            $content = $responseData['choices'][0]['message']['content'];
            $tr['ar'] = trim(str_replace('Arabic Translation:', '', strstr($content, 'English Translation:', true)));
            $tr['en'] = trim(str_replace('English Translation:', '', strstr($content, 'English Translation:')));
        }
        return $tr;
    }
}
