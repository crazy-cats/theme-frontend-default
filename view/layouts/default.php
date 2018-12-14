<?php

/*
 * Copyright © 2018 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

/**
 * @category CrazyCat
 * @package CrazyCat\Theme\Frontend\Default
 * @author Bruce Z <152416319@qq.com>
 * @link http://crazy-cat.co
 */
return [
    'template' => '1column',
    'css' => [
        'css/styles.css'
    ],
    'blocks' => [
        'head' => [
            'js-in-head' => [ 'class' => 'CrazyCat\Core\Block\Head' ]
        ],
        'messages' => [
            'message-box' => [ 'class' => 'CrazyCat\Core\Block\Message' ]
        ],
        'footer' => [
            'footer-content' => [ 'class' => 'CrazyCat\Core\Block\Template' ]
        ]
    ]
];
