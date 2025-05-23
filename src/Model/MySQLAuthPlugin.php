<?php
/**
 * MySQLAuthPlugin
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
 * MySQLAuthPlugin Class Doc Comment
 *
 * @category Class
 * @description See https://dev.mysql.com/doc/refman/8.0/en/authentication-plugins.html for list of plugins which MySQL supports. If not provided, the user will use whatever defaults the mysql server it&#39;s being created uses.
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MySQLAuthPlugin
{
    /**
     * Possible values of this enum
     */
    public const CACHING_SHA2_PASSWORD = 'caching_sha2_password';

    public const MYSQL_NATIVE_PASSWORD = 'mysql_native_password';

    public const UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CACHING_SHA2_PASSWORD,
            self::MYSQL_NATIVE_PASSWORD,
            self::UNKNOWN_DEFAULT_OPEN_API
        ];
    }
}


