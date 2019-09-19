<?php

return [

    'user_model' => App\User::class,

    'message_model' => Lexx\ChatMessenger\Models\Message::class,

    'participant_model' => Lexx\ChatMessenger\Models\Participant::class,

    'thread_model' => Lexx\ChatMessenger\Models\Thread::class,

    /**
     * Define custom database table names - without prefixes.
     */
    'messages_table' => 'lexx_messages',

    'participants_table' => 'lexx_participants',

    'threads_table' => 'lexx_threads',

    /**
     * Define custom database table names - without prefixes.
    */

    'use_pusher' => env('CHATMESSENGER_USE_PUSHER', true),
];
