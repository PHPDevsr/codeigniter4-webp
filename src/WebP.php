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

namespace PHPDevsr\WebP;

use PHPDevsr\WebP\Adapters\Cwebp;
use PHPDevsr\WebP\Adapters\Gwebp;
use PHPDevsr\WebP\Config\Webp as WebPConfig;
use PHPDevsr\WebP\Exceptions\WebPException;

class WebP
{
    /**
     * Config object.
     */
    protected WebPConfig $config;

    /**
     * Error string.
     */
    protected string $error = '';

    /**
     * Versioning
     */
    protected array $versioning = [];

    /**
     * Prepare config to use
     */
    public function __construct(WebPConfig $config)
    {
        $this->config = $config;
    }

    /**
     * @param UploadedFile $image
     * @return Cwebp|PhpGD|Traits\WebpTrait|null
     * @throws DriverIsNotSupportedException
     */
    public function make(UploadedFile $image)
    {
        $driver = $this->config->defaultDriver;
        $availableDrivers = $this->config->listDriver;

        if (!in_array($driver, array_keys($availableDrivers))) {
            throw WebPException::forWrongDrivers($driver);
        }

        switch ($driver) {
            case 'php-gd':
                return (new PhpGD())->make($image);
            case 'cwebp':
                return (new Cwebp())->make($image);
        }

        return null;
    }
}