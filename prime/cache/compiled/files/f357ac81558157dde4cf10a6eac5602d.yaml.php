<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/collin/Sites/website2/user/config/site.yaml',
    'modified' => 1493952563,
    'data' => [
        'title' => 'PRIME',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Joe Bloggs',
            'email' => 'joe@test.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'PRIME - A Clean, Modern, Responsive Theme for GravCMS '
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 180,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
