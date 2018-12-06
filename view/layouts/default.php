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
                [ 'class' => 'CrazyCat\Index\Block\Head' ]
        ],
        'messages' => [
                [ 'class' => 'CrazyCat\Index\Block\Message' ]
        ],
        'footer' => [
                [ 'class' => 'CrazyCat\Index\Block\Template' ]
        ]
    ]
];
