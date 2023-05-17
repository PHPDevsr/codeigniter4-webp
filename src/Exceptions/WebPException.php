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

namespace PHPDevsr\WebP\Exceptions;

use RuntimeException;

class WebPException extends RuntimeException implements ExceptionInterface
{
    /**
     * --------------------------------------------------------------------
     * Wrong File
     * --------------------------------------------------------------------
     * 
     * @param string $ext Extentsion
     */
    public static function forWrongDrivers(string $driver)
    {
        return new self(lang('WebP.wrongDrivers', [$driver]));
    }

    public static function forNoVersioningFile()
    {
        return new self(lang('Minifyku.noVersioningFile'));
    }

    public static function forIncorrectDeploymentMode(string $mode)
    {
        return new self(lang('Minifyku.incorrectDeploymentMode', [$mode]));
    }
}