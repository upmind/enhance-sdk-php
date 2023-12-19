# # Website

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**domain** | [**\Upmind\EnhanceSdk\Model\WebsiteDomain**](WebsiteDomain.md) |  |
**aliases** | [**\Upmind\EnhanceSdk\Model\WebsiteDomain[]**](WebsiteDomain.md) |  |
**subdomains** | **mixed[]** |  |
**subscription_id** | **float** |  | [optional]
**plan_id** | **float** |  | [optional]
**plan** | **string** |  | [optional]
**status** | [**\Upmind\EnhanceSdk\Model\WebsiteStatus**](WebsiteStatus.md) |  |
**suspended_by** | **string** |  | [optional]
**color_code** | **string** |  |
**tags** | [**\Upmind\EnhanceSdk\Model\Tag[]**](Tag.md) |  | [optional]
**size** | **int** |  |
**org_id** | **string** |  |
**org** | **string** |  | [optional]
**kind** | [**\Upmind\EnhanceSdk\Model\WebsiteKind**](WebsiteKind.md) |  |
**pending_backup** | [**\Upmind\EnhanceSdk\Model\BackupAction**](BackupAction.md) |  | [optional]
**parent** | **string** |  | [optional]
**parent_id** | **string** |  | [optional]
**app_server_id** | **string** | The id of the server on which this website is located. This is only returned when websites are queried recursively by an MO member, as the MO is in charge of servers and thus this information only concerns them. | [optional]
**backup_server_id** | **string** | The id of the server on which the backups of this website are located. This is only returned when websites are queried recursively by an MO member, as the MO is in charge of servers and thus this information only concerns them. | [optional]
**db_server_id** | **string** | The id of the server on which the databases of this website are located. This is only returned when websites are queried recursively by an MO member, as the MO is in charge of servers and thus this information only concerns them. | [optional]
**email_server_id** | **string** | The id of the server on which the emails of this website are located. This is only returned when websites are queried recursively by an MO member, as the MO is in charge of servers and thus this information only concerns them. | [optional]
**unix_user** | **string** | The unix user assigned to this website, used for ssh shells, prefixing website databases and databse users, etc. | [optional]
**site_access_members** | [**\Upmind\EnhanceSdk\Model\SiteAccessMember[]**](SiteAccessMember.md) |  | [optional]
**server_ips** | [**\Upmind\EnhanceSdk\Model\ServerIp[]**](ServerIp.md) | The addresses of the the server on which this website is located. | [optional]
**backup_server_ips** | [**\Upmind\EnhanceSdk\Model\ServerIp[]**](ServerIp.md) | The addresses of the the server on which this website&#39;s backups are located. | [optional]
**db_server_ips** | [**\Upmind\EnhanceSdk\Model\ServerIp[]**](ServerIp.md) | The addresses of the the server on which this website&#39;s databases are located. | [optional]
**email_server_ips** | [**\Upmind\EnhanceSdk\Model\ServerIp[]**](ServerIp.md) | The addresses of the the server on which this website&#39;s emails are located. | [optional]
**filerd_address** | **string** | The path relative to the control panel domain where filerd can be accessed. | [optional]
**php_version** | [**\Upmind\EnhanceSdk\Model\PhpVersion**](PhpVersion.md) |  | [optional]
**created_at** | **string** | The date the site was first added |
**app_server_name** | **string** |  | [optional]
**db_server_name** | **string** |  | [optional]
**email_server_name** | **string** |  | [optional]
**backup_server_name** | **string** |  | [optional]
**can_use** | [**\Upmind\EnhanceSdk\Model\CanUse**](CanUse.md) |  | [optional]
**app_server_ipv6** | **string** |  | [optional]
**db_server_ipv6** | **string** |  | [optional]
**email_server_ipv6** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
