<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/blogs/user/themes/notepad/blueprints.yaml',
    'modified' => 1689699315,
    'size' => 539,
    'data' => [
        'name' => 'Notepad',
        'slug' => 'notepad',
        'type' => 'theme',
        'version' => '1.4.0',
        'description' => 'Notepad theme by HOSSAIN MOHD FAYSAL ported to **Grav**',
        'icon' => 'pencil-square',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'https://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-notepad',
        'demo' => 'https://demo.getgrav.org/notepad-skeleton',
        'keywords' => 'notepad, theme, modern, fast, responsive, blog',
        'bugs' => 'https://github.com/getgrav/grav-theme-notepad/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.5.10'
            ]
        ],
        'form' => [
            'validation' => 'loose'
        ]
    ]
];
