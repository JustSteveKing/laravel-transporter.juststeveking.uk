<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'https://laravel-transporter.juststeveking.uk/',
    'type' => 'website',
    'twitter' => '@JustSteveKing',
    'siteName' => 'Laravel Transporter',
    'social_image' => '/assets/img/cover.png',
    'social_image_alt' => 'Laravel Transporter - Object Oriented API Requests for Laravel',
    'siteDescription' => 'Object Oriented API Requests for Laravel',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
];
