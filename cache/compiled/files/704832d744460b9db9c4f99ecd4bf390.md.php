<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/blogs/user/pages/01.home/modular.md',
    'modified' => 1689699309,
    'size' => 156,
    'data' => [
        'header' => [
            'title' => 'One Page Demo Site',
            'menu' => 'Home',
            'onpage_menu' => true,
            'body_classes' => 'title-h1h2 header-dark header-transparent',
            'content' => [
                'items' => '@self.modular'
            ]
        ],
        'frontmatter' => 'title: One Page Demo Site
menu: Home
onpage_menu: true
body_classes: title-h1h2 header-dark header-transparent

content:
    items: @self.modular',
        'markdown' => ''
    ]
];
