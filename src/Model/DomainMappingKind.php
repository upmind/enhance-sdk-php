<?php
/**
 * DomainMappingKind
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * orchd
 *
 * orchd API docs
 *
 * The version of the OpenAPI document: 12.3.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Upmind\EnhanceSdk\Model;
use \Upmind\EnhanceSdk\ObjectSerializer;

/**
 * DomainMappingKind Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DomainMappingKind
{
    /**
     * Possible values of this enum
     */
    public const PRIMARY = 'primary';

    public const PREVIEW = 'preview';

    public const ADDON = 'addon';

    public const ALIAS = 'alias';

    public const SUBDOMAIN = 'subdomain';

    public const UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PRIMARY,
            self::PREVIEW,
            self::ADDON,
            self::ALIAS,
            self::SUBDOMAIN,
            self::UNKNOWN_DEFAULT_OPEN_API
        ];
    }
}


