<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Service\Barcode;

use Spryker\Service\Barcode\BarcodeDependencyProvider as SprykerDependencyProvider;

class BarcodeDependencyProvider extends SprykerDependencyProvider
{
    /**
     * @return \Spryker\Service\BarcodeExtension\Dependency\Plugin\BarcodeGeneratorPluginInterface[]
     */
    protected function getBarcodeGeneratorPlugins(): array
    {
        return [
        ];
    }
}
