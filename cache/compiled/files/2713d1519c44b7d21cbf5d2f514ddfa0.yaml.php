<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/jordanmedrano/Stuff/Projects/Ignited-Embers-Page/user/config/site.yaml',
    'modified' => 1570777185,
    'data' => [
        'title' => 'Ignited Ember',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Jordan Medrano',
            'email' => 'jordanmedrano@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Ignited Ember is a Gold/Platinum ranked Overwatch team'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
