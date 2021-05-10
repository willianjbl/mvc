<?php
declare(strict_types = 1);

namespace src\handlers;

class BannerHandler
{
    public function listBanners(): array
    {
        return [
            [
                'slides' => [
                    '480' => 'https://via.placeholder.com/480x350',
                    '800' => 'https://via.placeholder.com/800x350',
                    '1200' => 'https://via.placeholder.com/1200x350',
                    '1900' => 'https://via.placeholder.com/1900x350',
                    '2560' => 'https://via.placeholder.com/2560x350',
                ],
                'title' => 'First Slide',
                'subtitle' => 'First subtitle',
            ],
            [
                'slides' => [
                    '480' => 'https://via.placeholder.com/480x350',
                    '800' => 'https://via.placeholder.com/800x350',
                    '1200' => 'https://via.placeholder.com/1200x350',
                    '1900' => 'https://via.placeholder.com/1900x350',
                    '2560' => 'https://via.placeholder.com/2560x350',
                ],
                'title' => 'Second Slide',
                'subtitle' => 'Second subtitle',
            ],
            [
                'slides' => [
                    '480' => 'https://via.placeholder.com/480x350',
                    '800' => 'https://via.placeholder.com/800x350',
                    '1200' => 'https://via.placeholder.com/1200x350',
                    '1900' => 'https://via.placeholder.com/1900x350',
                    '2560' => 'https://via.placeholder.com/2560x350',
                ],
                'title' => 'Third Slide',
                'subtitle' => 'Third subtitle',
            ],
        ];
    }
}
