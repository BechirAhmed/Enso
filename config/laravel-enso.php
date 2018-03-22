<?php

return [
    'version'             => '1.4.1',
    'defaultRole'         => 'admin',
    'formattedTimestamps' => 'd-m-Y',
    'paths'               => [
        'files'       => 'files',
        'avatars'     => 'avatars',
        'imports'     => 'imports',
        'temp'        => 'temp',
        'exports'     => 'exports',
        'howToVideos' => 'howToVideos',
    ],
    'cacheLifetime' => env('CACHE_LIFETIME', 60),
];