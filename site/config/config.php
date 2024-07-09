<?php

return [
    'debug'  => false,
    'tobimori.seo.canonicalBase' => 'https://ninasiessegger.de',
    'languages' => [
        'detect' => true
    ],
    'routes' => [
        [
            'pattern' => '(:any)',
            'action'  => function($uid) {
                $page = page($uid);
                if(!$page) $page = page('mein-angebot/' . $uid);
                if(!$page) $page = site()->errorPage();
                return site()->visit($page);
            }
        ],
        [
            'pattern' => 'mein-angebot/(:any)',
            'action'  => function($uid) {
                go($uid);
            }
        ]
    ]

];

?>