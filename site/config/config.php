<?php

return [
    'debug'  => false,
    'tobimori.seo.canonical.base' => 'https://ninasiessegger.de',
    'languages' => [
        'detect' => true
    ],
    'tobimori.seo.robots' => [
        'enabled' => true,
        'content' => [
            '*' => [
                'Allow' => ['/'],
                'Disallow' => ['/kirby', '/panel', '/content']
            ]
        ]
    ],
    'routes' => [
        [
            'pattern' => '(:any)',
            'language' => '*',
            'action'  => function($lang, $uid) {
                $page = page($uid);
                if(!$page) $page = page('mein-angebot/' . $uid);
                if(!$page) $page = page('my-services/' . $uid);
                if(!$page) $page = site()->errorPage();
                return site()->visit($page, $lang);
            }
        ],
        [
            'pattern' => 'mein-angebot/(:any)',
            'language' => '*',
            'action'  => function($lang, $uid) {
                go($lang->url() . '/' . $uid, 301);
            }
        ],
        [
            'pattern' => 'my-services/(:any)',
            'language' => '*',
            'action'  => function($lang, $uid) {
                go($lang->url() . '/' . $uid, 301);
            }
        ],
        [
            'pattern' => 'en',
            'action'  => function() {
                go('en/home');
            }
        ],
        
    ]

];

?>