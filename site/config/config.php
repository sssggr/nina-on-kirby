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
    // the salt is secret, so it lives in salt.php on the server and not in git
    'daandelange.simplestats.tracking.salt' => is_file(__DIR__ . '/salt.php') ? require __DIR__ . '/salt.php' : 'local-development',
    'daandelange.simplestats.log.verbose' => false,
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