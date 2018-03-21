<?php

return [

    'user_model' => App\User::class,

    'message_model' => Lexx\ChatMessenger\Models\Message::class,

    'participant_model' => Lexx\ChatMessenger\Models\Participant::class,

    'thread_model' => Lexx\ChatMessenger\Models\Thread::class,

    /**
     * Define custom database table names - without prefixes.
     */
    'messages_table' => 'inbox_messages',
    'participants_table' => 'inbox_participants',
    'threads_table' => 'inbox_threads',
 

    'use_pusher' => true,
];
