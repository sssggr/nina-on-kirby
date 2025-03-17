<?php

return [
    'debug'  => true,
    'tobimori.seo.canonicalBase' => 'https://ninasiessegger.de',
    'languages' => [
        'detect' => true
    ],
    'tobimori.seo.robots' => [
        'active' => true,
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
                go($lang .  '/' . $uid);
            }
        ],
        [
            'pattern' => 'my-services/(:any)',
            'language' => '*',
            'action'  => function($lang, $uid) {
                go($lang .  '/' . $uid);
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