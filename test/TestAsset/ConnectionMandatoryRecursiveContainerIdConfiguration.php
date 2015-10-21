<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/interop-config for the canonical source repository
 * @copyright Copyright (c) 2014 - 2015 Sandro Keil
 * @license   http://github.com/sandrokeil/interop-config/blob/master/LICENSE.txt New BSD License
 */

namespace InteropTest\Config\TestAsset;

use Interop\Config\ConfigurationTrait;
use Interop\Config\RequiresContainerId;
use Interop\Config\RequiresMandatoryOptions;

class ConnectionMandatoryRecursiveContainerIdConfiguration implements
    RequiresContainerId,
    RequiresMandatoryOptions
{
    use ConfigurationTrait;

    public function vendorName()
    {
        return 'doctrine';
    }

    public function packageName()
    {
        return 'connection';
    }

    public function containerId()
    {
        return 'orm_default';
    }

    public function mandatoryOptions()
    {
        return ['params' => ['user', 'dbname'], 'driverClass'];
    }
}
