<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/blogs/user/pages/blog/default.md',
    'modified' => 1689699311,
    'size' => 278,
    'data' => [
        'header' => [
            'title' => 'Latest Posts',
            'sitemap' => [
                'changefreq' => 'monthly',
                'priority' => 1.03
            ],
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'limit' => 4,
                'pagination' => true
            ],
            'feed' => [
                'description' => 'Sample Blog Description',
                'limit' => 10
            ],
            'pagination' => true
        ],
        'frontmatter' => 'title: Latest Posts

sitemap:
    changefreq: monthly
    priority: 1.03

content:
    items: @self.children
    order:
        by: date
        dir: desc
    limit: 4
    pagination: true

feed:
    description: Sample Blog Description
    limit: 10

pagination: true',
        'markdown' => ''
    ]
];
