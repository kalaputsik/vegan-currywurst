<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\DocumentationGeneratorRestApi;

use Spryker\Zed\DocumentationGeneratorRestApi\DocumentationGeneratorRestApiConfig as SprykerDocumentationGeneratorRestApiConfig;

class DocumentationGeneratorRestApiConfig extends SprykerDocumentationGeneratorRestApiConfig
{
    /**
     * Specification:
     * - Set this to the value you want to be the prefix of the version in the URL (if any)
     * - In the default setting, it will not exist, but if it is set to "v" then all versionable resources will have
     * - a "v" as a prefix to their version in the URL. e.g. /v1/resource
     *
     * @uses \Spryker\Glue\GlueApplication\GlueApplicationConfig::getPathVersionPrefix()
     *
     * @api
     *
     * @return string
     */
    public function getPathVersionPrefix() : string
    {
        return 'v';
    }

    /**
     * Specification:
     * - Overwrite this to true if API version resolving should happen to all endpoints via the first part of the path
     * - e.g /1/resource1 or /v1/resource2 instead of header value
     *
     * @uses \Spryker\Glue\GlueApplication\GlueApplicationConfig::getPathVersionResolving
     *
     * @api
     *
     * @return bool
     */
    public function getPathVersionResolving() : bool
    {
        return true;
    }
}