<?php

return [

    'roles' => [
        'Admin' => [
            'permissions' => [
                'list-post', 'create-post', 'list-user', 'edit-user',
            ],
        ],
    
        'Creator' => [
            'permissions' => [
                'list-post', 'create-post',
            ],
        ],
    
        'Guest' => [
            'permissions' => [
                'list-post',
            ],
        ],
    
    ],

];
