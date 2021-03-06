<?php
/**
 * Sandro Keil (https://sandro-keil.de)
 *
 * @link      http://github.com/sandrokeil/interop-config for the canonical source repository
 * @copyright Copyright (c) 2015-2016 Sandro Keil
 * @license   http://github.com/sandrokeil/interop-config/blob/master/LICENSE.md New BSD License
 */

namespace InteropTest\Config\TestAsset;

use Interop\Config\ConfigurationTrait;
use Interop\Config\ProvidesDefaultOptions;
use Interop\Config\RequiresConfig;
use Interop\Config\RequiresMandatoryOptions;

class PackageDefaultAndMandatoryOptionsConfiguration implements RequiresConfig, ProvidesDefaultOptions, RequiresMandatoryOptions
{
    use ConfigurationTrait;

    /**
     * @interitdoc
     */
    public function dimensions()
    {
        return ['vendor', 'package'];
    }

    /**
     * @interitdoc
     */
    public function defaultOptions()
    {
        return [
            'minLength' => 2,
            'maxLength' => 10
        ];
    }

    /**
     * @interitdoc
     */
    public function mandatoryOptions()
    {
        return [
            'callback'
        ];
    }
}
