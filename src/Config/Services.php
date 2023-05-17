<?php

declare(strict_types=1);

/**
 * This file is part of PHPDevsr/Minifyku.
 *
 * (c) 2023 Denny Septian Panggabean <xamidimura@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace PHPDevsr\WebP\Config;

use CodeIgniter\Config\BaseService;
use PHPDevsr\WebP\WebP;

class Services extends BaseService
{
    public static function minifyku(bool $getShared = true): WebP
    {
        if ($getShared) {
            return self::getSharedInstance('WebP');
        }

        return new WebP(config('Webp'));
    }
}