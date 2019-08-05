<?php

return [
    'url'                 => env('APP_URL', 'default'),
    'theme'               => env('THEME', 'default'),
    'admin_paginate'      => [
        'user' =>10,
        'img'  =>300
    ],//колличечтво отображаемых элементов(статей) на странице

    'users_img' => [
        'width'=>300,
        'height'=>300
    ],
// параметр path - хранение полного изображения
    'image' => [
        'width'=>1024,
        'height'=>768
    ],

];
