<?php

return [
    /* ------------------------------------------------------------------------------------------------
     |  Database
     | ------------------------------------------------------------------------------------------------
     */
    'database' => [
        'connection' => config('database.default'),
    ],

    /* ------------------------------------------------------------------------------------------------
     |  Models
     | ------------------------------------------------------------------------------------------------
     */
    'users' => [
        'table' => 'users',
        'model' => App\User::class,
    ],

    'discussions' => [
        'table' => 'discussions',
        'model' => Arcanedev\LaravelMessenger\Models\Discussion::class
    ],

    'participants' => [
        'table' => 'participants',
        'model' => Arcanedev\LaravelMessenger\Models\Participant::class,
    ],

    'messages' => [
        'table' => 'messages',
        'model' => Arcanedev\LaravelMessenger\Models\Message::class
    ],
];