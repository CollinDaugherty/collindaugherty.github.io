<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/collin/Sites/website2/user/plugins/blackhole/blueprints.yaml',
    'modified' => 1494348713,
    'data' => [
        'name' => 'Blackhole',
        'version' => '0.5.1',
        'description' => 'Generates an html copy of your website',
        'icon' => 'circle',
        'author' => [
            'name' => 'Barry'
        ],
        'homepage' => 'https://github.com/barryanders/grav-plugin-blackhole',
        'keywords' => 'grav, plugin, static, site, generator',
        'bugs' => 'https://github.com/barryanders/grav-plugin-blackhole/issues',
        'docs' => 'https://github.com/barryanders/grav-plugin-blackhole/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'destination' => [
                    'type' => 'text',
                    'label' => 'Destination',
                    'help' => 'Set the output directory for your static website.'
                ]
            ]
        ]
    ]
];
