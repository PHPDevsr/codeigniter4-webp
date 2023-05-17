<?php

/**
 * This file is part of PHPDevsr/codeigniter4-webp.
 *
 * (c) 2023 Denny Septian Panggabean <xamidimura@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace PHPDevsr\WebP\Config;

use CodeIgniter\Config\BaseConfig;

class Webp extends BaseConfig
{
    /**
     * --------------------------------------------------------------------
     * Quality Images
     * --------------------------------------------------------------------
     *
     * This is a default quality unless you provide while generation of the WebP. We recommended quality below `85`
     */
    public int $quality = 75;

    /**
     * --------------------------------------------------------------------
     * Default Driver
     * --------------------------------------------------------------------
     *
     * This is a default image processing driver. Available: ['cwebp', 'php-gd']
     */
    public string $defaultDriver = 'php-gd';

    /**
     * --------------------------------------------------------------------
     * List Driver
     * --------------------------------------------------------------------
     *
     * Available drivers which can be selected
     */
    public array $listDriver = [
        /**
         * --------------------------------------------------------------------
         * CWEBP Driver
         * --------------------------------------------------------------------
         *
         * If you choose cwebp driver it is required to specify the path to the executable.
         */
        'cwebp' => [
            'path' => '/usr/local/bin/cwebp',
        ],

        /**
         * --------------------------------------------------------------------
         * PJP-GD Driver
         * --------------------------------------------------------------------
         *
         * If you choose PHP GD driver no configuration is necessary.
         */
        'php-gd' => [],
    ];
}
