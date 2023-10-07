<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/blogs/user/config/plugins/adsense.yaml',
    'modified' => 1696721758,
    'size' => 708,
    'data' => [
        'enabled' => true,
        'sandbox' => false,
        'built_in_css' => true,
        'add_editor_button' => true,
        'use_auto_ads' => true,
        'adsense' => [
            'options' => [
                'mode' => 'async',
                'position' => 'center',
                'auto_ads_client' => 'ca-pub-6584524084580396',
                'auto_ads_filter' => [
                    0 => 'blog',
                    1 => 'portfolio'
                ]
            ],
            'page_ads' => [
                0 => [
                    'id' => 'unique-id',
                    'client' => 'ca-pub-6584524084580396',
                    'slot' => 0,
                    'type' => 'inarticle',
                    'width' => 468,
                    'height' => 60
                ]
            ],
            'modular_ads' => [
                'horizontal' => [
                    'client' => 'ca-pub-6584524084580396',
                    'slot' => 0,
                    'width' => 728,
                    'height' => 90
                ],
                'vertical' => [
                    'client' => 'ca-pub-6584524084580396',
                    'slot' => 0,
                    'width' => 200,
                    'height' => 600
                ],
                'square' => [
                    'client' => 'ca-pub-6584524084580396',
                    'slot' => 0,
                    'width' => 300,
                    'height' => 300
                ]
            ]
        ]
    ]
];
