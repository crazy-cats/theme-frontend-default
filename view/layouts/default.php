<?php

/*
 * Copyright © 2020 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

/**
 * @category CrazyCat
 * @package  CrazyCat\Theme\Frontend\Default
 * @author   Liwei Zeng <zengliwei@163.com>
 * @link     https://crazy-cat.cn
 */
return [
    'template' => '1column',
    'css'      => [
        'css/styles.css'
    ],
    'blocks'   => [
        'head'     => [
            'class'    => 'CrazyCat\Base\Block\Wrapper',
            'children' => [
                'js-in-head' => ['class' => 'CrazyCat\Base\Block\Head']
            ]
        ],
        'messages' => [
            'class' => 'CrazyCat\Base\Block\Message'
        ],
        'main'     => [
            'class'    => 'CrazyCat\Base\Block\Wrapper'
        ],
        'footer'   => [
            'class'    => 'CrazyCat\Base\Block\Wrapper',
            'children' => [
                'footer-content' => ['class' => 'CrazyCat\Base\Block\Template']
            ]
        ]
    ]
];
