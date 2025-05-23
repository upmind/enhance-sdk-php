<?php
/**
 * SettingKind
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
 * SettingKind Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SettingKind
{
    /**
     * Possible values of this enum
     */
    public const PHP_INI = 'phpIni';

    public const PHP_FPM = 'phpFpm';

    public const APACHE = 'apache';

    public const POSTFIX = 'postfix';

    public const SGED = 'sged';

    public const RSPAMD = 'rspamd';

    public const DOVECOT = 'dovecot';

    public const WEBSITE_BACKUP = 'websiteBackup';

    public const SCREENSHOTD = 'screenshotd';

    public const HARD_DELETE_GC = 'hardDeleteGC';

    public const LETSENCRYPT = 'letsencrypt';

    public const UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PHP_INI,
            self::PHP_FPM,
            self::APACHE,
            self::POSTFIX,
            self::SGED,
            self::RSPAMD,
            self::DOVECOT,
            self::WEBSITE_BACKUP,
            self::SCREENSHOTD,
            self::HARD_DELETE_GC,
            self::LETSENCRYPT,
            self::UNKNOWN_DEFAULT_OPEN_API
        ];
    }
}


