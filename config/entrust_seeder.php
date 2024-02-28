<?php

return [
    'role_structure' => [
        'admin' => [
            '*' => 'c,r,u,d', // All the permissions for all the resources
        ],
        'registered_user' => [
            '*' => 'r', // Read permission for all the resources
        ],
        'non_registered_user' => [
            '*' => '', // No permissions for all the resources
            'welcome.blade.php' => 'r', // Read permission for welcome.blade.php (Change when we have the blade with the groups structure of the current course)
        ],
    ],
    'user_roles' => [
        'admin' => [
            ['name' => "Admin", "email" => "admin@testschool.com", "password" => 'admin'], // Create the user Admin
        ],
    ],
    'permissions_map' => [ // The permissions and their shortcouts
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];