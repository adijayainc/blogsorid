<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/blogs/user/config/site.yaml',
    'modified' => 1696154147,
    'size' => 1059,
    'data' => [
        'title' => 'blogs.or.id',
        'default_lang' => 'en',
        'author' => [
            'name' => 'adijaya',
            'email' => 'adijaya@gmail.com'
        ],
        'taxonomies' => [
            0 => 'tag'
        ],
        'metadata' => [
            'description' => 'blogs.or.id adalah kumpulan para content creator demi kemajuan bangsa '
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ],
        'description' => 'Media Konten Sehat',
        'owner' => [
            'name' => 'adijaya',
            'email' => 'adijaya@gmail.com',
            'description' => 'Awesome Dude, Awesome Life',
            'twitter' => 'blogsorid',
            'facebook' => 'blogsorid',
            'github' => 'blogsorid',
            'instagram' => 'blogsorid',
            'google_plus' => 'https://plus.google.com/+blogsorid'
        ],
        'logo' => '/user/themes/notepad/images/logo.png',
        'links' => [
            0 => [
                'title' => 'Featured Posts',
                'url' => '/featured'
            ],
            1 => [
                'title' => 'Categories',
                'url' => '/categories'
            ],
            2 => [
                'title' => 'About',
                'url' => '/about'
            ]
        ],
        'include' => [
            0 => '.htaccess'
        ],
        'exclude' => [
            0 => 'lib',
            1 => 'config.rb',
            2 => 'Gemfile',
            3 => 'Capfile',
            4 => 'Gemfile.lock',
            5 => 'config',
            6 => 'log',
            7 => 'Rakefile',
            8 => 'Rakefile.rb',
            9 => 'tmp',
            10 => 'less',
            11 => '*.sublime-project',
            12 => '*.sublime-workspace',
            13 => 'test',
            14 => 'spec',
            15 => 'Gruntfile.js',
            16 => 'package.json',
            17 => 'node_modules'
        ]
    ]
];
