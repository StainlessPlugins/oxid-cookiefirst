<?php

use OxidEsales\Eshop\Core\ViewConfig;
use StainlessPlugins\CookieFirst\CookieFirst;

$sMetadataVersion = '2.1';
$aModule = [
    'id'          => 'sp-cookiefirst',
    'title'       => [
        'de' => 'Cookie First',
        'en' => 'Cookie First',
    ],
    'description' => [
        'de' => 'Dieses Modul wandelt alle Javascripts, die mit oxscript eingebunden sind, um in der Cokie First-kompatiblen Weise gerendert zu werden.',
        'en' => 'This module provides the functionality for all javascripts included with oxscript to be rendered in the Cookie First compatible way.',
    ],
    'thumbnail'   => 'logo.png',
    'version'     => '1.1',
    'author'      => 'stainlessplugins',
    'url'         => '#',
    'email'       => 'info@stainlessplugins.com',
    'extend'      => [
        ViewConfig::class => CookieFirst::class
    ],
    'smartyPluginDirectories' => [],
    'templates' => [],
    'settings' => [
        [
            'type' => 'str',
            'name' => 'cookiefirstkey',
            'value' => '',
            'group' => 'main'
        ],
    ]
];
