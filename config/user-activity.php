<?php

return [
    'activated'        => true, // active/inactive all logging
    'middleware'       => ['web', 'auth'],
    'route_path'       => 'spsm/user-activity',
    'admin_panel_path' => 'spsm/dashboard',
    'delete_limit'     => 7, // default 7 days

    'model' => [
        'user' => "App\User",
    ],

    'log_events' => [
        'on_create'     => false,
        'on_edit'       => true,
        'on_delete'     => true,
        'on_login'      => true,
        'on_lockout'    => true
    ]
];
