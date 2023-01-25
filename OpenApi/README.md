# upmind/enhance-sdk

orchd API docs


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/upmind/enhance-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$new_website_app = new \Upmind\EnhanceSdk\Model\NewWebsiteApp(); // \Upmind\EnhanceSdk\Model\NewWebsiteApp

try {
    $result = $apiInstance->createWebsiteApp($org_id, $website_id, $new_website_app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->createWebsiteApp: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AppsApi* | [**createWebsiteApp**](docs/Api/AppsApi.md#createwebsiteapp) | **POST** /orgs/{org_id}/websites/{website_id}/apps | Create website applications
*AppsApi* | [**deleteWebsiteApp**](docs/Api/AppsApi.md#deletewebsiteapp) | **DELETE** /orgs/{org_id}/websites/{website_id}/apps/{app_id} | Delete website app
*AppsApi* | [**getGlobalInstallableApps**](docs/Api/AppsApi.md#getglobalinstallableapps) | **GET** /utils/installable-apps | Get all installable applications
*AppsApi* | [**getInstallableApps**](docs/Api/AppsApi.md#getinstallableapps) | **GET** /orgs/{org_id}/subscriptions/{subscription_id}/installable-apps | Get installable website applications
*AppsApi* | [**getWebsiteApps**](docs/Api/AppsApi.md#getwebsiteapps) | **GET** /orgs/{org_id}/websites/{website_id}/apps | Get website applications
*BackupsApi* | [**backupWebsite**](docs/Api/BackupsApi.md#backupwebsite) | **POST** /orgs/{org_id}/websites/{website_id}/backups | Create a website backup
*BackupsApi* | [**deleteWebsiteBackup**](docs/Api/BackupsApi.md#deletewebsitebackup) | **DELETE** /orgs/{org_id}/websites/{website_id}/backups/{backup_id} | Delete a backup
*BackupsApi* | [**getWebsiteBackup**](docs/Api/BackupsApi.md#getwebsitebackup) | **GET** /orgs/{org_id}/websites/{website_id}/backups/{backup_id} | Get detailed metadata of the website backup
*BackupsApi* | [**getWebsiteBackups**](docs/Api/BackupsApi.md#getwebsitebackups) | **GET** /orgs/{org_id}/websites/{website_id}/backups | Get all website backups metadata
*BackupsApi* | [**restoreWebsite**](docs/Api/BackupsApi.md#restorewebsite) | **PUT** /orgs/{org_id}/websites/{website_id}/backups/{backup_id} | Restore website from a backup
*BrandingApi* | [**createBrandingSettings**](docs/Api/BrandingApi.md#createbrandingsettings) | **POST** /orgs/{org_id}/branding/settings | Create branding settings
*BrandingApi* | [**createNameServerDomain**](docs/Api/BrandingApi.md#createnameserverdomain) | **POST** /orgs/{org_id}/name-servers | Create reseller name server domain
*BrandingApi* | [**deleteBrandFavicon**](docs/Api/BrandingApi.md#deletebrandfavicon) | **DELETE** /orgs/{org_id}/branding/favicon | Delete brand favicon
*BrandingApi* | [**deleteBrandLoginImage**](docs/Api/BrandingApi.md#deletebrandloginimage) | **DELETE** /orgs/{org_id}/branding/login-image | Delete brand login image
*BrandingApi* | [**deleteBrandLogo**](docs/Api/BrandingApi.md#deletebrandlogo) | **DELETE** /orgs/{org_id}/branding/logo | Delete brand logo
*BrandingApi* | [**deleteBrandingSetting**](docs/Api/BrandingApi.md#deletebrandingsetting) | **DELETE** /orgs/{org_id}/branding/settings/{name} | Remove the specified setting
*BrandingApi* | [**deleteInverseBrandLogo**](docs/Api/BrandingApi.md#deleteinversebrandlogo) | **DELETE** /orgs/{org_id}/branding/inverse-logo | Delete brand inverse logo
*BrandingApi* | [**getBranding**](docs/Api/BrandingApi.md#getbranding) | **GET** /branding | Get default branding
*BrandingApi* | [**getBrandingSetting**](docs/Api/BrandingApi.md#getbrandingsetting) | **GET** /orgs/{org_id}/branding/settings/{name} | Get the specified setting
*BrandingApi* | [**getBrandingSettings**](docs/Api/BrandingApi.md#getbrandingsettings) | **GET** /orgs/{org_id}/branding/settings | Get all current settings
*BrandingApi* | [**getStagingDomain**](docs/Api/BrandingApi.md#getstagingdomain) | **GET** /orgs/{org_id}/staging-domain | Fetches the staging domain which is currently set
*BrandingApi* | [**setBrandFavicon**](docs/Api/BrandingApi.md#setbrandfavicon) | **PUT** /orgs/{org_id}/branding/favicon | Set brand favicon
*BrandingApi* | [**setBrandInverseLogo**](docs/Api/BrandingApi.md#setbrandinverselogo) | **PUT** /orgs/{org_id}/branding/inverse-logo | Set brand inverse logo
*BrandingApi* | [**setBrandLoginImage**](docs/Api/BrandingApi.md#setbrandloginimage) | **PUT** /orgs/{org_id}/branding/login-image | Set brand login image
*BrandingApi* | [**setBrandLogo**](docs/Api/BrandingApi.md#setbrandlogo) | **PUT** /orgs/{org_id}/branding/logo | Set brand logo
*BrandingApi* | [**setStagingDomain**](docs/Api/BrandingApi.md#setstagingdomain) | **POST** /orgs/{org_id}/staging-domain | Set or update domain suffix for staging websites created by customers
*BrandingApi* | [**updateBrandingSetting**](docs/Api/BrandingApi.md#updatebrandingsetting) | **PUT** /orgs/{org_id}/branding/settings/{name} | Create or update the specified setting
*BrandingApi* | [**updateNameServerDomain**](docs/Api/BrandingApi.md#updatenameserverdomain) | **PATCH** /orgs/{org_id}/name-servers/{domain} | Update reseller name server domain name
*CustomersApi* | [**createCustomer**](docs/Api/CustomersApi.md#createcustomer) | **POST** /orgs/{org_id}/customers | Create a customer organization
*CustomersApi* | [**createCustomerSubscription**](docs/Api/CustomersApi.md#createcustomersubscription) | **POST** /orgs/{org_id}/customers/{customer_org_id}/subscriptions | Create a subscriptions for a customer
*CustomersApi* | [**getCustomerSubscriptions**](docs/Api/CustomersApi.md#getcustomersubscriptions) | **GET** /orgs/{org_id}/customers/{customer_org_id}/subscriptions | Get customer subscriptions
*CustomersApi* | [**getOrgCustomers**](docs/Api/CustomersApi.md#getorgcustomers) | **GET** /orgs/{org_id}/customers | Get organization customers
*DnsApi* | [**createDnsThirdPartyProvider**](docs/Api/DnsApi.md#creatednsthirdpartyprovider) | **POST** /dns/third-party-providers | Create new third party provider.
*DnsApi* | [**createWebsiteDomainDnsZoneRecord**](docs/Api/DnsApi.md#createwebsitedomaindnszonerecord) | **POST** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-zone/records | Create a new dns record for website domain
*DnsApi* | [**deleteDnsThirdPartyProvider**](docs/Api/DnsApi.md#deletednsthirdpartyprovider) | **DELETE** /dns/third-party-providers/{provider_id} | Deletes a third party dns provider.
*DnsApi* | [**deleteWebsiteDomainDnsZoneRecord**](docs/Api/DnsApi.md#deletewebsitedomaindnszonerecord) | **DELETE** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-zone/records/{record_id} | Delete dns zone record
*DnsApi* | [**getDnsThirdPartyProviders**](docs/Api/DnsApi.md#getdnsthirdpartyproviders) | **GET** /dns/third-party-providers | Lists all third party providers.
*DnsApi* | [**getWebsiteDomainDnsZone**](docs/Api/DnsApi.md#getwebsitedomaindnszone) | **GET** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-zone | Get a dns zone for given domain
*DnsApi* | [**updateWebsiteDomainDnsZone**](docs/Api/DnsApi.md#updatewebsitedomaindnszone) | **PATCH** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-zone | Updates a dns zone SOA for website domain
*DnsApi* | [**updateWebsiteDomainDnsZoneRecord**](docs/Api/DnsApi.md#updatewebsitedomaindnszonerecord) | **PATCH** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-zone/records/{record_id} | Updates a dns record for given domain
*DomainApi* | [**enableWebsiteSslCert**](docs/Api/DomainApi.md#enablewebsitesslcert) | **PUT** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id}/domains/{domain_id} | Enables already stored certificate for a given domain
*DomainsApi* | [**checkDomain**](docs/Api/DomainsApi.md#checkdomain) | **POST** /orgs/{org_id}/domains/check | Check if a domain can be created
*DomainsApi* | [**createDomain**](docs/Api/DomainsApi.md#createdomain) | **POST** /orgs/{org_id}/domains | Create domain
*DomainsApi* | [**createWebsiteDomainAlias**](docs/Api/DomainsApi.md#createwebsitedomainalias) | **POST** /orgs/{org_id}/websites/{website_id}/domains | Create website domain alias
*DomainsApi* | [**createWebsiteDomainLetsencryptCerts**](docs/Api/DomainsApi.md#createwebsitedomainletsencryptcerts) | **POST** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/letsencrypt | Generate and setup letsencrypt ssl certificates for website&#39;s domain
*DomainsApi* | [**deleteDomain**](docs/Api/DomainsApi.md#deletedomain) | **DELETE** /orgs/{org_id}/domains/{domain_id} | Delete domain
*DomainsApi* | [**deleteWebsiteDomainMapping**](docs/Api/DomainsApi.md#deletewebsitedomainmapping) | **DELETE** /orgs/{org_id}/websites/{website_id}/domains/{domain_id} | Delete website domain mapping
*DomainsApi* | [**getDomains**](docs/Api/DomainsApi.md#getdomains) | **GET** /orgs/{org_id}/domains | Get domains
*DomainsApi* | [**getWebsiteDomainDnsQuery**](docs/Api/DomainsApi.md#getwebsitedomaindnsquery) | **GET** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-query | Recursively query Dns servers for given domain
*DomainsApi* | [**getWebsiteDomainMapping**](docs/Api/DomainsApi.md#getwebsitedomainmapping) | **GET** /orgs/{org_id}/websites/{website_id}/domains/{domain_id} | Returns website domain mapping
*DomainsApi* | [**getWebsiteDomainMappingDnsStatus**](docs/Api/DomainsApi.md#getwebsitedomainmappingdnsstatus) | **GET** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-status | Returns website domain mapping DNS status
*DomainsApi* | [**getWebsiteDomainMappings**](docs/Api/DomainsApi.md#getwebsitedomainmappings) | **GET** /orgs/{org_id}/websites/{website_id}/domains | Get website&#39;s mapped domains
*DomainsApi* | [**updateWebsiteDomainMapping**](docs/Api/DomainsApi.md#updatewebsitedomainmapping) | **PATCH** /orgs/{org_id}/websites/{website_id}/domains/{domain_id} | Update website domain mapping
*DomainsApi* | [**updateWebsitePrimaryDomain**](docs/Api/DomainsApi.md#updatewebsiteprimarydomain) | **PUT** /orgs/{org_id}/websites/{website_id}/domains/primary | Update primary domain mapping
*EmailClientApi* | [**createEmailAutoresponder**](docs/Api/EmailClientApi.md#createemailautoresponder) | **POST** /email-client/autoresponders | Create new email autoresponder
*EmailClientApi* | [**deleteEmailAutoresponder**](docs/Api/EmailClientApi.md#deleteemailautoresponder) | **DELETE** /email-client/autoresponders/{autoresponder_id} | Delete email autoresponder
*EmailClientApi* | [**getEmailAutoresponders**](docs/Api/EmailClientApi.md#getemailautoresponders) | **GET** /email-client/autoresponders | Get email account autoresponders
*EmailClientApi* | [**getEmailForwarders**](docs/Api/EmailClientApi.md#getemailforwarders) | **GET** /email-client/forwarders | Returns email account&#39;s forwarders
*EmailClientApi* | [**getEmailPublicIp**](docs/Api/EmailClientApi.md#getemailpublicip) | **GET** /email-client/public-ip | Returns public Ip Address of the email server
*EmailClientApi* | [**updateEmailAutoresponder**](docs/Api/EmailClientApi.md#updateemailautoresponder) | **PUT** /email-client/autoresponders/{autoresponder_id} | Update email autoresponder
*EmailClientApi* | [**updateEmailForwarders**](docs/Api/EmailClientApi.md#updateemailforwarders) | **PUT** /email-client/forwarders | Updates email account&#39;s forwarders
*EmailClientApi* | [**updateEmailPassword**](docs/Api/EmailClientApi.md#updateemailpassword) | **PUT** /email-client/password | Updates email account&#39;s password
*EmailsApi* | [**createWebsiteEmail**](docs/Api/EmailsApi.md#createwebsiteemail) | **POST** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/emails | Create an email under website&#39;s domain
*EmailsApi* | [**createWebsiteEmailAutoresponder**](docs/Api/EmailsApi.md#createwebsiteemailautoresponder) | **POST** /orgs/{org_id}/websites/{website_id}/emails/{email_id}/autoresponders | Create new website email autoresponder
*EmailsApi* | [**deleteWebsiteEmail**](docs/Api/EmailsApi.md#deletewebsiteemail) | **DELETE** /orgs/{org_id}/websites/{website_id}/emails/{email_id} | Delete website email
*EmailsApi* | [**deleteWebsiteEmailAutoresponder**](docs/Api/EmailsApi.md#deletewebsiteemailautoresponder) | **DELETE** /orgs/{org_id}/websites/{website_id}/emails/{email_id}/autoresponders/{autoresponder_id} | Delete website email autoresponder
*EmailsApi* | [**getDomainEmailAuth**](docs/Api/EmailsApi.md#getdomainemailauth) | **GET** /orgs/{org_id}/domains/{domain_id}/email-auth | Get email authentication preferences
*EmailsApi* | [**getDomainLocalRemote**](docs/Api/EmailsApi.md#getdomainlocalremote) | **GET** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/local_remote | Get the current local/remote status
*EmailsApi* | [**getEmails**](docs/Api/EmailsApi.md#getemails) | **GET** /orgs/{org_id}/emails | Get org emails
*EmailsApi* | [**getWebsiteEmail**](docs/Api/EmailsApi.md#getwebsiteemail) | **GET** /orgs/{org_id}/websites/{website_id}/emails/{email_id} | Get website email
*EmailsApi* | [**getWebsiteEmailAutoresponders**](docs/Api/EmailsApi.md#getwebsiteemailautoresponders) | **GET** /orgs/{org_id}/websites/{website_id}/emails/{email_id}/autoresponders | Get website email autoresponders
*EmailsApi* | [**getWebsiteEmailClientConf**](docs/Api/EmailsApi.md#getwebsiteemailclientconf) | **GET** /orgs/{org_id}/websites/{website_id}/emails/{email_id}/client-conf | Get website email client configuration
*EmailsApi* | [**getWebsiteEmails**](docs/Api/EmailsApi.md#getwebsiteemails) | **GET** /orgs/{org_id}/websites/{website_id}/emails | Get website emails
*EmailsApi* | [**setDomainLocalRemote**](docs/Api/EmailsApi.md#setdomainlocalremote) | **PUT** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/local_remote | Update email local/remote status
*EmailsApi* | [**updateDomainEmailAuth**](docs/Api/EmailsApi.md#updatedomainemailauth) | **PUT** /orgs/{org_id}/domains/{domain_id}/email-auth | Update email authentication preferences
*EmailsApi* | [**updateWebsiteEmail**](docs/Api/EmailsApi.md#updatewebsiteemail) | **PATCH** /orgs/{org_id}/websites/{website_id}/emails/{email_id} | Update website email
*EmailsApi* | [**updateWebsiteEmailAutoresponder**](docs/Api/EmailsApi.md#updatewebsiteemailautoresponder) | **PATCH** /orgs/{org_id}/websites/{website_id}/emails/{email_id}/autoresponders/{autoresponder_id} | Update website email autoresponder
*FtpApi* | [**createFtpUser**](docs/Api/FtpApi.md#createftpuser) | **POST** /orgs/{org_id}/websites/{website_id}/ftp/users | Creates a new FTP user for a given website
*FtpApi* | [**deleteFtpUser**](docs/Api/FtpApi.md#deleteftpuser) | **DELETE** /orgs/{org_id}/websites/{website_id}/ftp/users/{user_id} | Deletes given FTP user
*FtpApi* | [**getFtpUsers**](docs/Api/FtpApi.md#getftpusers) | **GET** /orgs/{org_id}/websites/{website_id}/ftp/users | Returns all ftp users data for a given website
*FtpApi* | [**updateFtpUser**](docs/Api/FtpApi.md#updateftpuser) | **PATCH** /orgs/{org_id}/websites/{website_id}/ftp/users/{user_id} | Update given FTP user
*InstallApi* | [**controldVersion**](docs/Api/InstallApi.md#controldversion) | **GET** /install/compatible_versions/controld | Get the compatible controld version
*InstallApi* | [**getServiceKindLatestVersion**](docs/Api/InstallApi.md#getservicekindlatestversion) | **GET** /install/latest_available_version/{service_kind} | Get the latest available version of a given service kind
*InstallApi* | [**install**](docs/Api/InstallApi.md#install) | **POST** /install | Create the master organization owner
*InstallApi* | [**orchdStatus**](docs/Api/InstallApi.md#orchdstatus) | **GET** /status | Get the readiness status of the orchd service
*InstallApi* | [**orchdVersion**](docs/Api/InstallApi.md#orchdversion) | **GET** /version | Get the SemVer of the API service
*InstallApi* | [**updateEnhance**](docs/Api/InstallApi.md#updateenhance) | **POST** /install/update | Updates all services in the cluster.
*InstallApi* | [**validateInstallation**](docs/Api/InstallApi.md#validateinstallation) | **POST** /install/validate | Used to validate that the control panel has been initialized.
*InvitesApi* | [**acceptInvite**](docs/Api/InvitesApi.md#acceptinvite) | **POST** /invites/{invite_id} | Accept invite
*InvitesApi* | [**createInvite**](docs/Api/InvitesApi.md#createinvite) | **POST** /orgs/{org_id}/invites | Create invite
*InvitesApi* | [**validateInvite**](docs/Api/InvitesApi.md#validateinvite) | **POST** /invites/{invite_id}/validate | Validate invite
*LetsencryptApi* | [**createWebsiteDomainLetsencryptCerts**](docs/Api/LetsencryptApi.md#createwebsitedomainletsencryptcerts) | **POST** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/letsencrypt | Generate and setup letsencrypt ssl certificates for website&#39;s domain
*LicenceApi* | [**getLicenceInfo**](docs/Api/LicenceApi.md#getlicenceinfo) | **GET** /licence | Get current licence status
*LicenceApi* | [**refreshLicence**](docs/Api/LicenceApi.md#refreshlicence) | **PUT** /licence | Updates licence key if provided, and refresh licence status by calling home servers. NOTE: calling without any licence_key body, only refreshes the current licence status
*LoginsApi* | [**createLogin**](docs/Api/LoginsApi.md#createlogin) | **POST** /logins | Create a new login
*LoginsApi* | [**createOtpSession**](docs/Api/LoginsApi.md#createotpsession) | **GET** /login/sessions/sso | Create a new session for login with a one-time-password
*LoginsApi* | [**createSession**](docs/Api/LoginsApi.md#createsession) | **POST** /login/sessions | Create a new session for login
*LoginsApi* | [**deleteCurrentSession**](docs/Api/LoginsApi.md#deletecurrentsession) | **DELETE** /login/sessions/current | Delete current session
*LoginsApi* | [**deleteLoginAvatar**](docs/Api/LoginsApi.md#deleteloginavatar) | **DELETE** /login/avatar | Remove login avatar
*LoginsApi* | [**deleteSession**](docs/Api/LoginsApi.md#deletesession) | **DELETE** /login/sessions/{session_id} | Delete current session
*LoginsApi* | [**deleteSessions**](docs/Api/LoginsApi.md#deletesessions) | **DELETE** /login/sessions | Delete sessions
*LoginsApi* | [**finishPasswordRecovery**](docs/Api/LoginsApi.md#finishpasswordrecovery) | **POST** /login/password-recovery | Finish a password recovery
*LoginsApi* | [**getLogin**](docs/Api/LoginsApi.md#getlogin) | **GET** /login | Get login info
*LoginsApi* | [**getLoginMemberships**](docs/Api/LoginsApi.md#getloginmemberships) | **GET** /login/memberships | Get login memberships
*LoginsApi* | [**getLogins**](docs/Api/LoginsApi.md#getlogins) | **GET** /logins | Query all logins
*LoginsApi* | [**getOrgLogins**](docs/Api/LoginsApi.md#getorglogins) | **GET** /orgs/{org_id}/logins | Query logins belonging to organization
*LoginsApi* | [**getSessions**](docs/Api/LoginsApi.md#getsessions) | **GET** /login/sessions | Get all login sessions
*LoginsApi* | [**resendPin**](docs/Api/LoginsApi.md#resendpin) | **POST** /login/2fa/resend-pin | Resends 2FA sign-in code.
*LoginsApi* | [**setLoginAvatar**](docs/Api/LoginsApi.md#setloginavatar) | **PUT** /login/avatar | Set login avatar
*LoginsApi* | [**startPasswordRecovery**](docs/Api/LoginsApi.md#startpasswordrecovery) | **PUT** /login/password-recovery | Start a new password recovery for login
*LoginsApi* | [**updateLoginInfo**](docs/Api/LoginsApi.md#updatelogininfo) | **PATCH** /login | Update login info
*LoginsApi* | [**validatePasswordRecovery**](docs/Api/LoginsApi.md#validatepasswordrecovery) | **POST** /login/password-recovery/validate | Validate a password recovery secret
*LoginsApi* | [**verify2FA**](docs/Api/LoginsApi.md#verify2fa) | **POST** /login/2fa | Verifies 2FA sign-in code.
*MembersApi* | [**createAccessToken**](docs/Api/MembersApi.md#createaccesstoken) | **POST** /orgs/{org_id}/access_tokens | Create organisation access token
*MembersApi* | [**createMember**](docs/Api/MembersApi.md#createmember) | **POST** /orgs/{org_id}/members | Create organization member
*MembersApi* | [**deleteAccessToken**](docs/Api/MembersApi.md#deleteaccesstoken) | **DELETE** /orgs/{org_id}/access_tokens/{token_id} | Delete access token member
*MembersApi* | [**deleteMember**](docs/Api/MembersApi.md#deletemember) | **DELETE** /orgs/{org_id}/members/{member_id} | Delete organization member
*MembersApi* | [**deleteOwner**](docs/Api/MembersApi.md#deleteowner) | **DELETE** /orgs/{org_id}/owner | Delete organization owner
*MembersApi* | [**getAccessTokens**](docs/Api/MembersApi.md#getaccesstokens) | **GET** /orgs/{org_id}/access_tokens | Get access token members
*MembersApi* | [**getMember**](docs/Api/MembersApi.md#getmember) | **GET** /orgs/{org_id}/members/{member_id} | Get organization member
*MembersApi* | [**getMembers**](docs/Api/MembersApi.md#getmembers) | **GET** /orgs/{org_id}/members | Get organization members
*MembersApi* | [**getOrgMemberLogin**](docs/Api/MembersApi.md#getorgmemberlogin) | **GET** /orgs/{org_id}/members/{member_id}/sso | Get a One-Time-Password link for the member
*MembersApi* | [**updateMember**](docs/Api/MembersApi.md#updatemember) | **PUT** /orgs/{org_id}/members/{member_id} | Overwrite organization member settings
*MembersApi* | [**updateOwner**](docs/Api/MembersApi.md#updateowner) | **PUT** /orgs/{org_id}/owner | Update organization owner
*MetricsApi* | [**getWebsiteMetrics**](docs/Api/MetricsApi.md#getwebsitemetrics) | **GET** /orgs/{org_id}/websites/{website_id}/metrics | Get website metrics
*MigrationsApi* | [**createMigration**](docs/Api/MigrationsApi.md#createmigration) | **POST** /migrations | Create website role migration
*MigrationsApi* | [**getMigration**](docs/Api/MigrationsApi.md#getmigration) | **GET** /migrations/{migrationId} | Get a single migration
*MigrationsApi* | [**getMigrationLog**](docs/Api/MigrationsApi.md#getmigrationlog) | **GET** /migrations/{migrationId}/log | Get the log for a migration
*MigrationsApi* | [**getMigrations**](docs/Api/MigrationsApi.md#getmigrations) | **GET** /migrations | Get website role migrations
*MysqlApi* | [**createOrRestoreWebsiteMySQLDBBackup**](docs/Api/MysqlApi.md#createorrestorewebsitemysqldbbackup) | **POST** /orgs/{org_id}/websites/{website_id}/mysql-dbs/{db_id}/backups | Create or restore website MySQL database backup
*MysqlApi* | [**createWebsiteMySQLDB**](docs/Api/MysqlApi.md#createwebsitemysqldb) | **POST** /orgs/{org_id}/websites/{website_id}/mysql-dbs | Create a MySQL database for website
*MysqlApi* | [**createWebsiteMySQLUser**](docs/Api/MysqlApi.md#createwebsitemysqluser) | **POST** /orgs/{org_id}/websites/{website_id}/mysql-users | Create website MySQL database user
*MysqlApi* | [**createWebsiteMySQLUserAccessHosts**](docs/Api/MysqlApi.md#createwebsitemysqluseraccesshosts) | **POST** /orgs/{org_id}/websites/{website_id}/mysql-users/{user_id}/access-hosts | Create website MySQL database user access hosts
*MysqlApi* | [**createWebsiteMySQLUserPrivileges**](docs/Api/MysqlApi.md#createwebsitemysqluserprivileges) | **POST** /orgs/{org_id}/websites/{website_id}/mysql-users/{user_id}/privileges | Create website MySQL database user privileges
*MysqlApi* | [**deleteWebsiteMySQLDB**](docs/Api/MysqlApi.md#deletewebsitemysqldb) | **DELETE** /orgs/{org_id}/websites/{website_id}/mysql-dbs/{db_id} | Delete website MySQL database
*MysqlApi* | [**deleteWebsiteMySQLUser**](docs/Api/MysqlApi.md#deletewebsitemysqluser) | **DELETE** /orgs/{org_id}/websites/{website_id}/mysql-users/{user_id} | Delete website MySQL database user
*MysqlApi* | [**deleteWebsiteMySQLUserAccessHosts**](docs/Api/MysqlApi.md#deletewebsitemysqluseraccesshosts) | **DELETE** /orgs/{org_id}/websites/{website_id}/mysql-users/{user_id}/access-hosts | Delete website MySQL database user access hosts
*MysqlApi* | [**deleteWebsiteMySQLUserPrivileges**](docs/Api/MysqlApi.md#deletewebsitemysqluserprivileges) | **DELETE** /orgs/{org_id}/websites/{website_id}/mysql-users/{user_id}/privileges | Delete website MySQL database user privileges
*MysqlApi* | [**downloadSql**](docs/Api/MysqlApi.md#downloadsql) | **GET** /orgs/{org_id}/websites/{website_id}/mysql-dbs/{db_id}/sql | Takes a backup of given database and returns it gziped
*MysqlApi* | [**getOrgMySQLDBs**](docs/Api/MysqlApi.md#getorgmysqldbs) | **GET** /orgs/{org_id}/mysql-dbs | Get org&#39;s MySQL databases
*MysqlApi* | [**getPhpMyAdminSSOUrl**](docs/Api/MysqlApi.md#getphpmyadminssourl) | **GET** /orgs/{org_id}/websites/{website_id}/mysql-dbs/{db_id}/sso | Get phpMyAdmin SSO URL
*MysqlApi* | [**getWebsiteMySQLDBs**](docs/Api/MysqlApi.md#getwebsitemysqldbs) | **GET** /orgs/{org_id}/websites/{website_id}/mysql-dbs | Get website MySQL databases
*MysqlApi* | [**getWebsiteMySQLUsers**](docs/Api/MysqlApi.md#getwebsitemysqlusers) | **GET** /orgs/{org_id}/websites/{website_id}/mysql-users | Get website MySQL database users
*MysqlApi* | [**updateWebsiteMySQLUser**](docs/Api/MysqlApi.md#updatewebsitemysqluser) | **PUT** /orgs/{org_id}/websites/{website_id}/mysql-users/{user_id} | Update website MySQL database user
*MysqlApi* | [**uploadSql**](docs/Api/MysqlApi.md#uploadsql) | **POST** /orgs/{org_id}/websites/{website_id}/mysql-dbs/{db_id}/sql | Uploads sql file and executes it against db
*OrgsApi* | [**createAccessToken**](docs/Api/OrgsApi.md#createaccesstoken) | **POST** /orgs/{org_id}/access_tokens | Create organisation access token
*OrgsApi* | [**createCustomer**](docs/Api/OrgsApi.md#createcustomer) | **POST** /orgs/{org_id}/customers | Create a customer organization
*OrgsApi* | [**createMember**](docs/Api/OrgsApi.md#createmember) | **POST** /orgs/{org_id}/members | Create organization member
*OrgsApi* | [**createPlan**](docs/Api/OrgsApi.md#createplan) | **POST** /orgs/{org_id}/plans | Create plan
*OrgsApi* | [**createPlanAllowances**](docs/Api/OrgsApi.md#createplanallowances) | **POST** /orgs/{org_id}/plans/{plan_id}/allowances | Create plan allowances
*OrgsApi* | [**createPlanResources**](docs/Api/OrgsApi.md#createplanresources) | **POST** /orgs/{org_id}/plans/{plan_id}/resources | Create plan resources
*OrgsApi* | [**createPlanSelections**](docs/Api/OrgsApi.md#createplanselections) | **POST** /orgs/{org_id}/plans/{plan_id}/selections | Create plan selections
*OrgsApi* | [**createTag**](docs/Api/OrgsApi.md#createtag) | **POST** /orgs/{org_id}/tags | Create tag
*OrgsApi* | [**createWebsiteDomainLetsencryptCerts**](docs/Api/OrgsApi.md#createwebsitedomainletsencryptcerts) | **POST** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/letsencrypt | Generate and setup letsencrypt ssl certificates for website&#39;s domain
*OrgsApi* | [**deleteMember**](docs/Api/OrgsApi.md#deletemember) | **DELETE** /orgs/{org_id}/members/{member_id} | Delete organization member
*OrgsApi* | [**deleteOrg**](docs/Api/OrgsApi.md#deleteorg) | **DELETE** /orgs/{org_id} | Delete organization
*OrgsApi* | [**deleteOrgAvatar**](docs/Api/OrgsApi.md#deleteorgavatar) | **DELETE** /orgs/{org_id}/avatar | Remove org avatar
*OrgsApi* | [**deleteOwner**](docs/Api/OrgsApi.md#deleteowner) | **DELETE** /orgs/{org_id}/owner | Delete organization owner
*OrgsApi* | [**deletePlan**](docs/Api/OrgsApi.md#deleteplan) | **DELETE** /orgs/{org_id}/plans/{plan_id} | Delete plan
*OrgsApi* | [**deletePlanAllowance**](docs/Api/OrgsApi.md#deleteplanallowance) | **DELETE** /orgs/{org_id}/plans/{plan_id}/allowances/{name} | Delete plan allowance
*OrgsApi* | [**deleteWebsiteMySQLUserAccessHosts**](docs/Api/OrgsApi.md#deletewebsitemysqluseraccesshosts) | **DELETE** /orgs/{org_id}/websites/{website_id}/mysql-users/{user_id}/access-hosts | Delete website MySQL database user access hosts
*OrgsApi* | [**deleteWebsiteSslCert**](docs/Api/OrgsApi.md#deletewebsitesslcert) | **DELETE** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id} | Deletes given ssl certificate
*OrgsApi* | [**enableWebsiteSslCert**](docs/Api/OrgsApi.md#enablewebsitesslcert) | **PUT** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id}/domains/{domain_id} | Enables already stored certificate for a given domain
*OrgsApi* | [**getCustomersAdded**](docs/Api/OrgsApi.md#getcustomersadded) | **GET** /orgs/{org_id}/stats/customers/added | Get customers added over a given time period
*OrgsApi* | [**getEmails**](docs/Api/OrgsApi.md#getemails) | **GET** /orgs/{org_id}/emails | Get org emails
*OrgsApi* | [**getMember**](docs/Api/OrgsApi.md#getmember) | **GET** /orgs/{org_id}/members/{member_id} | Get organization member
*OrgsApi* | [**getMembers**](docs/Api/OrgsApi.md#getmembers) | **GET** /orgs/{org_id}/members | Get organization members
*OrgsApi* | [**getOrg**](docs/Api/OrgsApi.md#getorg) | **GET** /orgs/{org_id} | Get organization info
*OrgsApi* | [**getOrgMemberLogin**](docs/Api/OrgsApi.md#getorgmemberlogin) | **GET** /orgs/{org_id}/members/{member_id}/sso | Get a One-Time-Password link for the member
*OrgsApi* | [**getPlan**](docs/Api/OrgsApi.md#getplan) | **GET** /orgs/{org_id}/plans/{plan_id} | Get plan
*OrgsApi* | [**getPlans**](docs/Api/OrgsApi.md#getplans) | **GET** /orgs/{org_id}/plans | Get plans
*OrgsApi* | [**getTags**](docs/Api/OrgsApi.md#gettags) | **GET** /orgs/{org_id}/tags | Get tags
*OrgsApi* | [**getWebsiteSslCert**](docs/Api/OrgsApi.md#getwebsitesslcert) | **GET** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id} | Fetches a single SSL cert
*OrgsApi* | [**getWebsiteSslCerts**](docs/Api/OrgsApi.md#getwebsitesslcerts) | **GET** /orgs/{org_id}/websites/{website_id}/ssl | Returns all certificates data with domain mappings for a given website
*OrgsApi* | [**getWebsitesAdded**](docs/Api/OrgsApi.md#getwebsitesadded) | **GET** /orgs/{org_id}/stats/websites/added | Get websites added over a given time period
*OrgsApi* | [**setOrgAvatar**](docs/Api/OrgsApi.md#setorgavatar) | **PUT** /orgs/{org_id}/avatar | Set org avatar
*OrgsApi* | [**updateMember**](docs/Api/OrgsApi.md#updatemember) | **PUT** /orgs/{org_id}/members/{member_id} | Overwrite organization member settings
*OrgsApi* | [**updateOrg**](docs/Api/OrgsApi.md#updateorg) | **PATCH** /orgs/{org_id} | Update organization
*OrgsApi* | [**updateOwner**](docs/Api/OrgsApi.md#updateowner) | **PUT** /orgs/{org_id}/owner | Update organization owner
*OrgsApi* | [**updatePlan**](docs/Api/OrgsApi.md#updateplan) | **PATCH** /orgs/{org_id}/plans/{plan_id} | Update plan name
*OrgsApi* | [**updatePlanAllowance**](docs/Api/OrgsApi.md#updateplanallowance) | **PUT** /orgs/{org_id}/plans/{plan_id}/allowances/{name} | Update plan allowance
*OrgsApi* | [**updatePlanResource**](docs/Api/OrgsApi.md#updateplanresource) | **PUT** /orgs/{org_id}/plans/{plan_id}/resources/{name} | Update plan resource
*OrgsApi* | [**updatePlanSelection**](docs/Api/OrgsApi.md#updateplanselection) | **PUT** /orgs/{org_id}/plans/{plan_id}/selections/{name} | Update plan selection
*OrgsApi* | [**uploadWebsiteSslCerts**](docs/Api/OrgsApi.md#uploadwebsitesslcerts) | **POST** /orgs/{org_id}/websites/{website_id}/ssl | Upload custom ssl certificate, key and optional fullchain for a given website
*OwnerApi* | [**deleteOwner**](docs/Api/OwnerApi.md#deleteowner) | **DELETE** /orgs/{org_id}/owner | Delete organization owner
*OwnerApi* | [**updateOwner**](docs/Api/OwnerApi.md#updateowner) | **PUT** /orgs/{org_id}/owner | Update organization owner
*PlansApi* | [**createPlan**](docs/Api/PlansApi.md#createplan) | **POST** /orgs/{org_id}/plans | Create plan
*PlansApi* | [**createPlanAllowances**](docs/Api/PlansApi.md#createplanallowances) | **POST** /orgs/{org_id}/plans/{plan_id}/allowances | Create plan allowances
*PlansApi* | [**createPlanResources**](docs/Api/PlansApi.md#createplanresources) | **POST** /orgs/{org_id}/plans/{plan_id}/resources | Create plan resources
*PlansApi* | [**createPlanSelections**](docs/Api/PlansApi.md#createplanselections) | **POST** /orgs/{org_id}/plans/{plan_id}/selections | Create plan selections
*PlansApi* | [**deletePlan**](docs/Api/PlansApi.md#deleteplan) | **DELETE** /orgs/{org_id}/plans/{plan_id} | Delete plan
*PlansApi* | [**deletePlanAllowance**](docs/Api/PlansApi.md#deleteplanallowance) | **DELETE** /orgs/{org_id}/plans/{plan_id}/allowances/{name} | Delete plan allowance
*PlansApi* | [**getPlan**](docs/Api/PlansApi.md#getplan) | **GET** /orgs/{org_id}/plans/{plan_id} | Get plan
*PlansApi* | [**getPlans**](docs/Api/PlansApi.md#getplans) | **GET** /orgs/{org_id}/plans | Get plans
*PlansApi* | [**updatePlan**](docs/Api/PlansApi.md#updateplan) | **PATCH** /orgs/{org_id}/plans/{plan_id} | Update plan name
*PlansApi* | [**updatePlanAllowance**](docs/Api/PlansApi.md#updateplanallowance) | **PUT** /orgs/{org_id}/plans/{plan_id}/allowances/{name} | Update plan allowance
*PlansApi* | [**updatePlanResource**](docs/Api/PlansApi.md#updateplanresource) | **PUT** /orgs/{org_id}/plans/{plan_id}/resources/{name} | Update plan resource
*PlansApi* | [**updatePlanSelection**](docs/Api/PlansApi.md#updateplanselection) | **PUT** /orgs/{org_id}/plans/{plan_id}/selections/{name} | Update plan selection
*ServersApi* | [**configureServer**](docs/Api/ServersApi.md#configureserver) | **PATCH** /servers/{server_id} | Configure a server
*ServersApi* | [**createServerDomain**](docs/Api/ServersApi.md#createserverdomain) | **POST** /servers/{server_id}/domains | Create a domain which is mapped to a server
*ServersApi* | [**createServerGroup**](docs/Api/ServersApi.md#createservergroup) | **POST** /servers/groups | Creates a new server group
*ServersApi* | [**createServerNetworkInterfaceIp**](docs/Api/ServersApi.md#createservernetworkinterfaceip) | **POST** /servers/{server_id}/interfaces/{interface}/ips | Create server network interface secondary IP
*ServersApi* | [**createServerSniMapping**](docs/Api/ServersApi.md#createserversnimapping) | **POST** /servers/{server_id}/sni | Create SNI mapping
*ServersApi* | [**createSlave**](docs/Api/ServersApi.md#createslave) | **POST** /servers/slaves | Create a slave node
*ServersApi* | [**deleteServerDomain**](docs/Api/ServersApi.md#deleteserverdomain) | **DELETE** /servers/{server_id}/domains/{domain_id} | Delete a mapped server domain
*ServersApi* | [**deleteServerFromGroup**](docs/Api/ServersApi.md#deleteserverfromgroup) | **DELETE** /servers/{server_id}/group | Delete server from group
*ServersApi* | [**deleteServerGroup**](docs/Api/ServersApi.md#deleteservergroup) | **DELETE** /servers/groups/{group_id} | Deletes an existing server group
*ServersApi* | [**deleteServerNetworkInterfaceIp**](docs/Api/ServersApi.md#deleteservernetworkinterfaceip) | **DELETE** /servers/{server_id}/interfaces/{interface}/ips/{ip} | Delete server network interface secondary IP
*ServersApi* | [**deleteServerSniMapping**](docs/Api/ServersApi.md#deleteserversnimapping) | **DELETE** /servers/{server_id}/sni/{cert_id}/{domain} | Delete a certificate SNI mapping
*ServersApi* | [**deleteServerSslCert**](docs/Api/ServersApi.md#deleteserversslcert) | **DELETE** /servers/ssl/{cert_id} | Delete ssl certificate
*ServersApi* | [**deleteServiceSetting**](docs/Api/ServersApi.md#deleteservicesetting) | **DELETE** /servers/{server_id}/settings/{setting_kind}/{setting_key} | Delete a single override setting
*ServersApi* | [**deleteSlave**](docs/Api/ServersApi.md#deleteslave) | **DELETE** /servers/{server_id} | Delete a (slave) server
*ServersApi* | [**getAppcdVersion**](docs/Api/ServersApi.md#getappcdversion) | **GET** /servers/{server_id}/appcd/version | Get the version of the running appcd
*ServersApi* | [**getClientIp**](docs/Api/ServersApi.md#getclientip) | **GET** /client_ip | Reflect back the IP of the API consumer
*ServersApi* | [**getControlPanelRoleInfo**](docs/Api/ServersApi.md#getcontrolpanelroleinfo) | **GET** /servers/master/roles/control | Get master server control panel role info
*ServersApi* | [**getHttpdStatus**](docs/Api/ServersApi.md#gethttpdstatus) | **GET** /servers/{server_id}/roles/{role}/httpd_status | Get status of a running httpd server.
*ServersApi* | [**getInstallCmd**](docs/Api/ServersApi.md#getinstallcmd) | **GET** /servers/install-cmd | Get slave installation command
*ServersApi* | [**getRegistrationKey**](docs/Api/ServersApi.md#getregistrationkey) | **GET** /servers/registration-key | Get slave registration key
*ServersApi* | [**getServerDiskUsage**](docs/Api/ServersApi.md#getserverdiskusage) | **GET** /servers/{server_id}/disk-usage | Get server disk usage
*ServersApi* | [**getServerDomains**](docs/Api/ServersApi.md#getserverdomains) | **GET** /servers/{server_id}/domains | Get domains which are mapped to a server
*ServersApi* | [**getServerFpmSettings**](docs/Api/ServersApi.md#getserverfpmsettings) | **GET** /servers/{server_id}/php/fpm | Get php-fpm config for all the websites on a server
*ServersApi* | [**getServerGroups**](docs/Api/ServersApi.md#getservergroups) | **GET** /servers/groups | Returns all server groups
*ServersApi* | [**getServerInfo**](docs/Api/ServersApi.md#getserverinfo) | **GET** /servers/{server_id} | Get server info
*ServersApi* | [**getServerIowait**](docs/Api/ServersApi.md#getserveriowait) | **GET** /servers/{server_id}/iowait | Get server iowait
*ServersApi* | [**getServerLoad**](docs/Api/ServersApi.md#getserverload) | **GET** /servers/{server_id}/load | Get server system load
*ServersApi* | [**getServerMemoryUsage**](docs/Api/ServersApi.md#getservermemoryusage) | **GET** /servers/{server_id}/memory-usage | Get server memory usage
*ServersApi* | [**getServerNetworkInterfaces**](docs/Api/ServersApi.md#getservernetworkinterfaces) | **GET** /servers/{server_id}/interfaces | Get server network interfaces
*ServersApi* | [**getServerNetworkStats**](docs/Api/ServersApi.md#getservernetworkstats) | **GET** /servers/{server_id}/network-stats | Get server network stats
*ServersApi* | [**getServerRole**](docs/Api/ServersApi.md#getserverrole) | **GET** /servers/{server_id}/roles/{role} | Get server role info
*ServersApi* | [**getServerRoles**](docs/Api/ServersApi.md#getserverroles) | **GET** /servers/{server_id}/roles | Get server roles info
*ServersApi* | [**getServerSniMappings**](docs/Api/ServersApi.md#getserversnimappings) | **GET** /servers/{server_id}/sni | Get SNI mappings
*ServersApi* | [**getServerSslCert**](docs/Api/ServersApi.md#getserversslcert) | **GET** /servers/ssl/{cert_id} | Fetch a single SSL certificate
*ServersApi* | [**getServerSslCerts**](docs/Api/ServersApi.md#getserversslcerts) | **GET** /servers/ssl | Returns service SSL certificates data for MO
*ServersApi* | [**getServerStats**](docs/Api/ServersApi.md#getserverstats) | **GET** /servers/{server_id}/historic-stats | Get Server stats
*ServersApi* | [**getServerStatus**](docs/Api/ServersApi.md#getserverstatus) | **GET** /servers/{server_id}/status | Get server status
*ServersApi* | [**getServerUptime**](docs/Api/ServersApi.md#getserveruptime) | **GET** /servers/{server_id}/uptime | Get server uptime in seconds
*ServersApi* | [**getServers**](docs/Api/ServersApi.md#getservers) | **GET** /servers | Get installed servers
*ServersApi* | [**getServiceSetting**](docs/Api/ServersApi.md#getservicesetting) | **GET** /servers/{server_id}/settings/{setting_kind} | Get the value for a particular setting
*ServersApi* | [**getSystemPackageUpdateInfo**](docs/Api/ServersApi.md#getsystempackageupdateinfo) | **GET** /servers/{server_id}/packages/update | Returns a map of upgradable packages.
*ServersApi* | [**getWebserverKind**](docs/Api/ServersApi.md#getwebserverkind) | **GET** /servers/{server_id}/webserver | Get web server
*ServersApi* | [**getWebsiteFpmSettings**](docs/Api/ServersApi.md#getwebsitefpmsettings) | **GET** /servers/{server_id}/php/fpm/{website_id} | Get php-fpm config for the specified website
*ServersApi* | [**initAllServers**](docs/Api/ServersApi.md#initallservers) | **POST** /servers/init | Attempts to initialize all roles
*ServersApi* | [**installServerRole**](docs/Api/ServersApi.md#installserverrole) | **PUT** /servers/{server_id}/roles/{role} | Install server role
*ServersApi* | [**setServerStatus**](docs/Api/ServersApi.md#setserverstatus) | **POST** /servers/{server_id}/status | Set the status of one server.
*ServersApi* | [**setServiceSetting**](docs/Api/ServersApi.md#setservicesetting) | **PUT** /servers/{server_id}/settings/{setting_kind}/{setting_key} | Set a single service setting
*ServersApi* | [**setServiceStatus**](docs/Api/ServersApi.md#setservicestatus) | **POST** /servers/{server_id}/services/{service_id}/status | Set the status of one service installed in the server specified.
*ServersApi* | [**setWebserverKind**](docs/Api/ServersApi.md#setwebserverkind) | **PUT** /servers/{server_id}/webserver | Set the web server kind for one server.
*ServersApi* | [**uninstallServerRole**](docs/Api/ServersApi.md#uninstallserverrole) | **DELETE** /servers/{server_id}/roles/{role} | Uninstall a server role
*ServersApi* | [**updateServerGroup**](docs/Api/ServersApi.md#updateservergroup) | **PUT** /servers/groups/{group_id} | Updates an existing server group&#39;s name
*ServersApi* | [**updateServerPrimaryIp**](docs/Api/ServersApi.md#updateserverprimaryip) | **PUT** /servers/{server_id}/primary-ip | Updates the primary IP of the server in the database and in-memory metadata. This operation will not affect the IP used for service communication until the next restart of orchd. The new IP will be used for creation of new resources such as websites on this server but existing websites will not have their IP changed.
*ServersApi* | [**updateServerRole**](docs/Api/ServersApi.md#updateserverrole) | **PATCH** /servers/{server_id}/roles/{role} | Update server role
*ServersApi* | [**updateService**](docs/Api/ServersApi.md#updateservice) | **PUT** /servers/{server_id}/services/{service_id}/update | Special endpoint to update a particular stopped service to its latest version.
*ServersApi* | [**updateSystemPackage**](docs/Api/ServersApi.md#updatesystempackage) | **PUT** /servers/{server_id}/packages/update | Updates a system package to its latest version.
*ServersApi* | [**uploadServerSslCert**](docs/Api/ServersApi.md#uploadserversslcert) | **POST** /servers/ssl | Upload SSL certificate for server/service use
*ServersApi* | [**validateRegistrationKey**](docs/Api/ServersApi.md#validateregistrationkey) | **POST** /servers/registration-key/validate | Validate slave registration key
*SettingsApi* | [**createSettings**](docs/Api/SettingsApi.md#createsettings) | **POST** /settings | Create settings
*SettingsApi* | [**deleteGlobalServiceSetting**](docs/Api/SettingsApi.md#deleteglobalservicesetting) | **DELETE** /settings/service/{setting_kind}/{setting_key} | Delete a single global service setting
*SettingsApi* | [**deleteOrchdLoginPolicyEmailBlacklist**](docs/Api/SettingsApi.md#deleteorchdloginpolicyemailblacklist) | **DELETE** /settings/orchd/login-policy/email-blacklist | Delete an orchd login policy email blacklist
*SettingsApi* | [**deleteOrchdLoginPolicyEmailWhitelist**](docs/Api/SettingsApi.md#deleteorchdloginpolicyemailwhitelist) | **DELETE** /settings/orchd/login-policy/email-whitelist | Delete an orchd login policy email whitelist
*SettingsApi* | [**deleteOrchdLoginPolicyIpBlacklist**](docs/Api/SettingsApi.md#deleteorchdloginpolicyipblacklist) | **DELETE** /settings/orchd/login-policy/ip-blacklist | Delete an orchd login policy ip blacklist
*SettingsApi* | [**deleteOrchdLoginPolicyIpWhitelist**](docs/Api/SettingsApi.md#deleteorchdloginpolicyipwhitelist) | **DELETE** /settings/orchd/login-policy/ip-whitelist | Delete an orchd login policy ip whitelist
*SettingsApi* | [**deleteOrchdLoginPolicyTemporaryEmailBlacklist**](docs/Api/SettingsApi.md#deleteorchdloginpolicytemporaryemailblacklist) | **DELETE** /settings/orchd/login-policy/temporary/email-blacklist | Delete an orchd login policy temporary email blacklist
*SettingsApi* | [**deleteOrchdLoginPolicyTemporaryEmailWhitelist**](docs/Api/SettingsApi.md#deleteorchdloginpolicytemporaryemailwhitelist) | **DELETE** /settings/orchd/login-policy/temporary/email-whitelist | Delete an orchd login policy temporary email whitelist
*SettingsApi* | [**deleteOrchdLoginPolicyTemporaryIpBlacklist**](docs/Api/SettingsApi.md#deleteorchdloginpolicytemporaryipblacklist) | **DELETE** /settings/orchd/login-policy/temporary/ip-blacklist | Delete an orchd login policy temporary ip blacklist
*SettingsApi* | [**deleteOrchdLoginPolicyTemporaryIpWhitelist**](docs/Api/SettingsApi.md#deleteorchdloginpolicytemporaryipwhitelist) | **DELETE** /settings/orchd/login-policy/temporary/ip-whitelist | Delete an orchd login policy temporary ip whitelist
*SettingsApi* | [**deleteSetting**](docs/Api/SettingsApi.md#deletesetting) | **DELETE** /settings/{name} | Remove the specified setting
*SettingsApi* | [**getDockerRegistry**](docs/Api/SettingsApi.md#getdockerregistry) | **GET** /settings/registry | Gets the Docker registry credentials.
*SettingsApi* | [**getGlobalServiceSetting**](docs/Api/SettingsApi.md#getglobalservicesetting) | **GET** /settings/service/{setting_kind} | Get the value for a particular global service setting
*SettingsApi* | [**getOrchdLogSettings**](docs/Api/SettingsApi.md#getorchdlogsettings) | **GET** /settings/orchd/logs | Get the orchd log settings
*SettingsApi* | [**getOrchdLoginPolicyEmailBlacklist**](docs/Api/SettingsApi.md#getorchdloginpolicyemailblacklist) | **GET** /settings/orchd/login-policy/email-blacklist | Get the orchd login policy email blacklist
*SettingsApi* | [**getOrchdLoginPolicyEmailWhitelist**](docs/Api/SettingsApi.md#getorchdloginpolicyemailwhitelist) | **GET** /settings/orchd/login-policy/email-whitelist | Get the orchd login policy email whitelist
*SettingsApi* | [**getOrchdLoginPolicyIpBlacklist**](docs/Api/SettingsApi.md#getorchdloginpolicyipblacklist) | **GET** /settings/orchd/login-policy/ip-blacklist | Get the orchd login policy ip blacklist
*SettingsApi* | [**getOrchdLoginPolicyIpWhitelist**](docs/Api/SettingsApi.md#getorchdloginpolicyipwhitelist) | **GET** /settings/orchd/login-policy/ip-whitelist | Get the orchd login policy ip whitelist
*SettingsApi* | [**getOrchdLoginPolicySettings**](docs/Api/SettingsApi.md#getorchdloginpolicysettings) | **GET** /settings/orchd/login-policy/settings | Get the orchd login policy settings
*SettingsApi* | [**getOrchdLoginPolicyTemporaryEmailBlacklist**](docs/Api/SettingsApi.md#getorchdloginpolicytemporaryemailblacklist) | **GET** /settings/orchd/login-policy/temporary/email-blacklist | Get the orchd login policy temporary email blacklist
*SettingsApi* | [**getOrchdLoginPolicyTemporaryEmailWhitelist**](docs/Api/SettingsApi.md#getorchdloginpolicytemporaryemailwhitelist) | **GET** /settings/orchd/login-policy/temporary/email-whitelist | Get the orchd login policy temporary email whitelist
*SettingsApi* | [**getOrchdLoginPolicyTemporaryIpBlacklist**](docs/Api/SettingsApi.md#getorchdloginpolicytemporaryipblacklist) | **GET** /settings/orchd/login-policy/temporary/ip-blacklist | Get the orchd login policy temporary ip blacklist
*SettingsApi* | [**getOrchdLoginPolicyTemporaryIpWhitelist**](docs/Api/SettingsApi.md#getorchdloginpolicytemporaryipwhitelist) | **GET** /settings/orchd/login-policy/temporary/ip-whitelist | Get the orchd login policy temporary ip whitelist
*SettingsApi* | [**getSetting**](docs/Api/SettingsApi.md#getsetting) | **GET** /settings/{name} | Get the specified setting
*SettingsApi* | [**getSettings**](docs/Api/SettingsApi.md#getsettings) | **GET** /settings | Get all current settings
*SettingsApi* | [**setDockerRegistry**](docs/Api/SettingsApi.md#setdockerregistry) | **PUT** /settings/registry | Updates the Docker registry credentials.
*SettingsApi* | [**setGlobalServiceSetting**](docs/Api/SettingsApi.md#setglobalservicesetting) | **PUT** /settings/service/{setting_kind}/{setting_key} | Set a single global service setting
*SettingsApi* | [**setOrchdLogSettings**](docs/Api/SettingsApi.md#setorchdlogsettings) | **PUT** /settings/orchd/logs | Set the orchd log settings
*SettingsApi* | [**setOrchdLoginPolicyEmailBlacklist**](docs/Api/SettingsApi.md#setorchdloginpolicyemailblacklist) | **PUT** /settings/orchd/login-policy/email-blacklist | Set the orchd login policy email blacklist as a whole
*SettingsApi* | [**setOrchdLoginPolicyEmailWhitelist**](docs/Api/SettingsApi.md#setorchdloginpolicyemailwhitelist) | **PUT** /settings/orchd/login-policy/email-whitelist | Set the orchd login policy email whitelist as a whole
*SettingsApi* | [**setOrchdLoginPolicyIpBlacklist**](docs/Api/SettingsApi.md#setorchdloginpolicyipblacklist) | **PUT** /settings/orchd/login-policy/ip-blacklist | Set the orchd login policy ip blacklist as a whole
*SettingsApi* | [**setOrchdLoginPolicyIpWhitelist**](docs/Api/SettingsApi.md#setorchdloginpolicyipwhitelist) | **PUT** /settings/orchd/login-policy/ip-whitelist | Set the orchd login policy ip whitelist as a whole
*SettingsApi* | [**setOrchdLoginPolicySettings**](docs/Api/SettingsApi.md#setorchdloginpolicysettings) | **PUT** /settings/orchd/login-policy/settings | Set a single orchd login policy setting
*SettingsApi* | [**setOrchdLoginPolicyTemporaryEmailBlacklist**](docs/Api/SettingsApi.md#setorchdloginpolicytemporaryemailblacklist) | **PUT** /settings/orchd/login-policy/temporary/email-blacklist | Set the orchd login policy temporary whitelist as a whole
*SettingsApi* | [**setOrchdLoginPolicyTemporaryEmailWhitelist**](docs/Api/SettingsApi.md#setorchdloginpolicytemporaryemailwhitelist) | **PUT** /settings/orchd/login-policy/temporary/email-whitelist | Set the orchd login policy temporary email whitelist as a whole
*SettingsApi* | [**setOrchdLoginPolicyTemporaryIpBlacklist**](docs/Api/SettingsApi.md#setorchdloginpolicytemporaryipblacklist) | **PUT** /settings/orchd/login-policy/temporary/ip-blacklist | Set the orchd login policy temporary ip blacklist as a whole
*SettingsApi* | [**setOrchdLoginPolicyTemporaryIpWhitelist**](docs/Api/SettingsApi.md#setorchdloginpolicytemporaryipwhitelist) | **PUT** /settings/orchd/login-policy/temporary/ip-whitelist | Set the orchd login policy temporary ip whitelist as a whole
*SettingsApi* | [**updateSetting**](docs/Api/SettingsApi.md#updatesetting) | **PUT** /settings/{name} | Create or update the specified setting
*SslApi* | [**deleteServerSslCert**](docs/Api/SslApi.md#deleteserversslcert) | **DELETE** /servers/ssl/{cert_id} | Delete ssl certificate
*SslApi* | [**deleteWebsiteSslCert**](docs/Api/SslApi.md#deletewebsitesslcert) | **DELETE** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id} | Deletes given ssl certificate
*SslApi* | [**enableWebsiteSslCert**](docs/Api/SslApi.md#enablewebsitesslcert) | **PUT** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id}/domains/{domain_id} | Enables already stored certificate for a given domain
*SslApi* | [**getServerSslCert**](docs/Api/SslApi.md#getserversslcert) | **GET** /servers/ssl/{cert_id} | Fetch a single SSL certificate
*SslApi* | [**getServerSslCerts**](docs/Api/SslApi.md#getserversslcerts) | **GET** /servers/ssl | Returns service SSL certificates data for MO
*SslApi* | [**getWebsiteSslCert**](docs/Api/SslApi.md#getwebsitesslcert) | **GET** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id} | Fetches a single SSL cert
*SslApi* | [**getWebsiteSslCerts**](docs/Api/SslApi.md#getwebsitesslcerts) | **GET** /orgs/{org_id}/websites/{website_id}/ssl | Returns all certificates data with domain mappings for a given website
*SslApi* | [**uploadServerSslCert**](docs/Api/SslApi.md#uploadserversslcert) | **POST** /servers/ssl | Upload SSL certificate for server/service use
*SslApi* | [**uploadWebsiteSslCerts**](docs/Api/SslApi.md#uploadwebsitesslcerts) | **POST** /orgs/{org_id}/websites/{website_id}/ssl | Upload custom ssl certificate, key and optional fullchain for a given website
*SubscriptionsApi* | [**calculateResourceUsage**](docs/Api/SubscriptionsApi.md#calculateresourceusage) | **PUT** /orgs/{org_id}/subscriptions/{subscription_id}/calculate-resource-usage | Re-Calculates all subscription resources
*SubscriptionsApi* | [**createCustomerSubscription**](docs/Api/SubscriptionsApi.md#createcustomersubscription) | **POST** /orgs/{org_id}/customers/{customer_org_id}/subscriptions | Create a subscriptions for a customer
*SubscriptionsApi* | [**deleteSubscription**](docs/Api/SubscriptionsApi.md#deletesubscription) | **DELETE** /orgs/{org_id}/subscriptions/{subscription_id} | Delete subscription
*SubscriptionsApi* | [**getCustomerSubscriptions**](docs/Api/SubscriptionsApi.md#getcustomersubscriptions) | **GET** /orgs/{org_id}/customers/{customer_org_id}/subscriptions | Get customer subscriptions
*SubscriptionsApi* | [**getSubscription**](docs/Api/SubscriptionsApi.md#getsubscription) | **GET** /orgs/{org_id}/subscriptions/{subscription_id} | Get subscription
*SubscriptionsApi* | [**getSubscriptionsToParent**](docs/Api/SubscriptionsApi.md#getsubscriptionstoparent) | **GET** /orgs/{org_id}/subscriptions | Get subscriptions to parent
*SubscriptionsApi* | [**updateSubscription**](docs/Api/SubscriptionsApi.md#updatesubscription) | **PATCH** /orgs/{org_id}/subscriptions/{subscription_id} | Update subscription
*TagsApi* | [**createTag**](docs/Api/TagsApi.md#createtag) | **POST** /orgs/{org_id}/tags | Create tag
*TagsApi* | [**getTags**](docs/Api/TagsApi.md#gettags) | **GET** /orgs/{org_id}/tags | Get tags
*WebsitesApi* | [**authorizeWebsiteSshKey**](docs/Api/WebsitesApi.md#authorizewebsitesshkey) | **POST** /orgs/{org_id}/websites/{website_id}/ssh/keys | Authorize a new SSH key.
*WebsitesApi* | [**authorizeWebsiteSshPassword**](docs/Api/WebsitesApi.md#authorizewebsitesshpassword) | **POST** /orgs/{org_id}/websites/{website_id}/ssh/password | Authorize a new SSH password for website.
*WebsitesApi* | [**createFtpUser**](docs/Api/WebsitesApi.md#createftpuser) | **POST** /orgs/{org_id}/websites/{website_id}/ftp/users | Creates a new FTP user for a given website
*WebsitesApi* | [**createPreviewDomain**](docs/Api/WebsitesApi.md#createpreviewdomain) | **POST** /orgs/{org_id}/websites/{website_id}/preview | Create a preview domain
*WebsitesApi* | [**createWebsite**](docs/Api/WebsitesApi.md#createwebsite) | **POST** /orgs/{org_id}/websites | Create a new website or clone an existing one.
*WebsitesApi* | [**createWebsiteDomainAlias**](docs/Api/WebsitesApi.md#createwebsitedomainalias) | **POST** /orgs/{org_id}/websites/{website_id}/domains | Create website domain alias
*WebsitesApi* | [**createWebsiteDomainLetsencryptCerts**](docs/Api/WebsitesApi.md#createwebsitedomainletsencryptcerts) | **POST** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/letsencrypt | Generate and setup letsencrypt ssl certificates for website&#39;s domain
*WebsitesApi* | [**createWebsiteMySQLDB**](docs/Api/WebsitesApi.md#createwebsitemysqldb) | **POST** /orgs/{org_id}/websites/{website_id}/mysql-dbs | Create a MySQL database for website
*WebsitesApi* | [**deleteFtpUser**](docs/Api/WebsitesApi.md#deleteftpuser) | **DELETE** /orgs/{org_id}/websites/{website_id}/ftp/users/{user_id} | Deletes given FTP user
*WebsitesApi* | [**deleteUserCrontab**](docs/Api/WebsitesApi.md#deleteusercrontab) | **DELETE** /orgs/{org_id}/websites/{website_id}/crontab | Delete user&#39;s crontab
*WebsitesApi* | [**deleteWebsite**](docs/Api/WebsitesApi.md#deletewebsite) | **DELETE** /orgs/{org_id}/websites/{website_id} | Delete website
*WebsitesApi* | [**deleteWebsiteDomainMapping**](docs/Api/WebsitesApi.md#deletewebsitedomainmapping) | **DELETE** /orgs/{org_id}/websites/{website_id}/domains/{domain_id} | Delete website domain mapping
*WebsitesApi* | [**deleteWebsiteSetting**](docs/Api/WebsitesApi.md#deletewebsitesetting) | **DELETE** /orgs/{org_id}/websites/{website_id}/settings/{setting_kind}/{setting_key} | Delete a single override setting
*WebsitesApi* | [**deleteWebsiteSslCert**](docs/Api/WebsitesApi.md#deletewebsitesslcert) | **DELETE** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id} | Deletes given ssl certificate
*WebsitesApi* | [**deleteWebsites**](docs/Api/WebsitesApi.md#deletewebsites) | **DELETE** /orgs/{org_id}/websites | Delete websites
*WebsitesApi* | [**enableWebsiteSslCert**](docs/Api/WebsitesApi.md#enablewebsitesslcert) | **PUT** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id}/domains/{domain_id} | Enables already stored certificate for a given domain
*WebsitesApi* | [**getFtpUsers**](docs/Api/WebsitesApi.md#getftpusers) | **GET** /orgs/{org_id}/websites/{website_id}/ftp/users | Returns all ftp users data for a given website
*WebsitesApi* | [**getScreenshotTimestamp**](docs/Api/WebsitesApi.md#getscreenshottimestamp) | **GET** /orgs/{org_id}/websites/{website_id}/screenshot/timestamp | Get last screeshot file&#39;s Timestamp
*WebsitesApi* | [**getSiteAccessToken**](docs/Api/WebsitesApi.md#getsiteaccesstoken) | **POST** /orgs/{org_id}/websites/{website_id}/access-tokens | Get an access token for the given website
*WebsitesApi* | [**getUserCrontab**](docs/Api/WebsitesApi.md#getusercrontab) | **GET** /orgs/{org_id}/websites/{website_id}/crontab | Get user&#39;s crontab
*WebsitesApi* | [**getWebsite**](docs/Api/WebsitesApi.md#getwebsite) | **GET** /orgs/{org_id}/websites/{website_id} | Get website
*WebsitesApi* | [**getWebsiteBackupStatus**](docs/Api/WebsitesApi.md#getwebsitebackupstatus) | **GET** /orgs/{org_id}/websites/{website_id}/status/backup | Get the status of an ongoing website backup operation
*WebsitesApi* | [**getWebsiteCgroupLimits**](docs/Api/WebsitesApi.md#getwebsitecgrouplimits) | **GET** /orgs/{org_id}/websites/{website_id}/cgroup_limits | Get the active cgroup limits for a website
*WebsitesApi* | [**getWebsiteClonesStatus**](docs/Api/WebsitesApi.md#getwebsiteclonesstatus) | **GET** /orgs/{org_id}/websites/{website_id}/status/clones/{domain} | Get the status of the clone operation of a given website
*WebsitesApi* | [**getWebsiteDomainDnsQuery**](docs/Api/WebsitesApi.md#getwebsitedomaindnsquery) | **GET** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-query | Recursively query Dns servers for given domain
*WebsitesApi* | [**getWebsiteDomainMapping**](docs/Api/WebsitesApi.md#getwebsitedomainmapping) | **GET** /orgs/{org_id}/websites/{website_id}/domains/{domain_id} | Returns website domain mapping
*WebsitesApi* | [**getWebsiteDomainMappingDnsStatus**](docs/Api/WebsitesApi.md#getwebsitedomainmappingdnsstatus) | **GET** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-status | Returns website domain mapping DNS status
*WebsitesApi* | [**getWebsiteDomainMappings**](docs/Api/WebsitesApi.md#getwebsitedomainmappings) | **GET** /orgs/{org_id}/websites/{website_id}/domains | Get website&#39;s mapped domains
*WebsitesApi* | [**getWebsiteHtaccessIpsRule**](docs/Api/WebsitesApi.md#getwebsitehtaccessipsrule) | **GET** /orgs/{org_id}/websites/{website_id}/htaccess/ips | Returns current rules of blocked/whitelisted IPs
*WebsitesApi* | [**getWebsiteHtaccessRewrites**](docs/Api/WebsitesApi.md#getwebsitehtaccessrewrites) | **GET** /orgs/{org_id}/websites/{website_id}/htaccess | Reads chains of rewrite rules
*WebsitesApi* | [**getWebsiteMetrics**](docs/Api/WebsitesApi.md#getwebsitemetrics) | **GET** /orgs/{org_id}/websites/{website_id}/metrics | Get website metrics
*WebsitesApi* | [**getWebsiteMySQLDBs**](docs/Api/WebsitesApi.md#getwebsitemysqldbs) | **GET** /orgs/{org_id}/websites/{website_id}/mysql-dbs | Get website MySQL databases
*WebsitesApi* | [**getWebsiteServerDomains**](docs/Api/WebsitesApi.md#getwebsiteserverdomains) | **GET** /orgs/{org_id}/websites/{website_id}/server_domains | Fetch website server domains
*WebsitesApi* | [**getWebsiteSetting**](docs/Api/WebsitesApi.md#getwebsitesetting) | **GET** /orgs/{org_id}/websites/{website_id}/settings/{setting_kind} | Get the value for a particular setting
*WebsitesApi* | [**getWebsiteSshKeys**](docs/Api/WebsitesApi.md#getwebsitesshkeys) | **GET** /orgs/{org_id}/websites/{website_id}/ssh/keys | Get website&#39;s authorized SSH keys
*WebsitesApi* | [**getWebsiteSslCert**](docs/Api/WebsitesApi.md#getwebsitesslcert) | **GET** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id} | Fetches a single SSL cert
*WebsitesApi* | [**getWebsiteSslCerts**](docs/Api/WebsitesApi.md#getwebsitesslcerts) | **GET** /orgs/{org_id}/websites/{website_id}/ssl | Returns all certificates data with domain mappings for a given website
*WebsitesApi* | [**getWebsites**](docs/Api/WebsitesApi.md#getwebsites) | **GET** /orgs/{org_id}/websites | Get websites
*WebsitesApi* | [**pushWebsiteLive**](docs/Api/WebsitesApi.md#pushwebsitelive) | **POST** /orgs/{org_id}/websites/{website_id}/push-live | Making a staging website live
*WebsitesApi* | [**setWebsiteCgroupLimits**](docs/Api/WebsitesApi.md#setwebsitecgrouplimits) | **PUT** /orgs/{org_id}/websites/{website_id}/cgroup_limits | Set the active cgroup limits for a website (Master org only)
*WebsitesApi* | [**setWebsiteSetting**](docs/Api/WebsitesApi.md#setwebsitesetting) | **PUT** /orgs/{org_id}/websites/{website_id}/settings/{setting_kind}/{setting_key} | Set a single override setting
*WebsitesApi* | [**takeScreenshot**](docs/Api/WebsitesApi.md#takescreenshot) | **POST** /orgs/{org_id}/websites/{website_id}/screenshot/take | Sends command to take website screenshot
*WebsitesApi* | [**unauthorizeWebsiteSshKey**](docs/Api/WebsitesApi.md#unauthorizewebsitesshkey) | **DELETE** /orgs/{org_id}/websites/{website_id}/ssh/keys/{key_id} | Unauthorize the public SSH key with the given ID.
*WebsitesApi* | [**updateFtpUser**](docs/Api/WebsitesApi.md#updateftpuser) | **PATCH** /orgs/{org_id}/websites/{website_id}/ftp/users/{user_id} | Update given FTP user
*WebsitesApi* | [**updateUserCrontab**](docs/Api/WebsitesApi.md#updateusercrontab) | **PATCH** /orgs/{org_id}/websites/{website_id}/crontab | Update user&#39;s crontab
*WebsitesApi* | [**updateWebsite**](docs/Api/WebsitesApi.md#updatewebsite) | **PATCH** /orgs/{org_id}/websites/{website_id} | Update website
*WebsitesApi* | [**updateWebsiteDomainMapping**](docs/Api/WebsitesApi.md#updatewebsitedomainmapping) | **PATCH** /orgs/{org_id}/websites/{website_id}/domains/{domain_id} | Update website domain mapping
*WebsitesApi* | [**updateWebsiteHtaccessIpsRule**](docs/Api/WebsitesApi.md#updatewebsitehtaccessipsrule) | **PUT** /orgs/{org_id}/websites/{website_id}/htaccess/ips | Sets a rule over provided ips - either block or allow
*WebsitesApi* | [**updateWebsiteHtaccessRewrites**](docs/Api/WebsitesApi.md#updatewebsitehtaccessrewrites) | **PATCH** /orgs/{org_id}/websites/{website_id}/htaccess | Updates rewrite rules
*WebsitesApi* | [**updateWebsitePrimaryDomain**](docs/Api/WebsitesApi.md#updatewebsiteprimarydomain) | **PUT** /orgs/{org_id}/websites/{website_id}/domains/primary | Update primary domain mapping
*WebsitesApi* | [**updateWebsiteSshKey**](docs/Api/WebsitesApi.md#updatewebsitesshkey) | **PATCH** /orgs/{org_id}/websites/{website_id}/ssh/keys/{key_id} | Update an existing website public SSH key.
*WebsitesApi* | [**uploadWebsiteSslCerts**](docs/Api/WebsitesApi.md#uploadwebsitesslcerts) | **POST** /orgs/{org_id}/websites/{website_id}/ssl | Upload custom ssl certificate, key and optional fullchain for a given website
*WebsitesApi* | [**validateWebsiteOperation**](docs/Api/WebsitesApi.md#validatewebsiteoperation) | **POST** /orgs/{org_id}/websites/{website_id}/validate-operation | Validate whether a website operation is allowed
*WordpressApi* | [**createWordpressUser**](docs/Api/WordpressApi.md#createwordpressuser) | **POST** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users | Create website WordPress user
*WordpressApi* | [**deleteWordpressPlugin**](docs/Api/WordpressApi.md#deletewordpressplugin) | **DELETE** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/plugins/{plugin} | Delete website WordPress plugin
*WordpressApi* | [**deleteWordpressUser**](docs/Api/WordpressApi.md#deletewordpressuser) | **DELETE** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users/{user_id} | Delete WordPress user
*WordpressApi* | [**getDefaultWpSsoUser**](docs/Api/WordpressApi.md#getdefaultwpssouser) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users/default | 
*WordpressApi* | [**getWordpressAppVersion**](docs/Api/WordpressApi.md#getwordpressappversion) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/version | Get WordPress version
*WordpressApi* | [**getWordpressInstallations**](docs/Api/WordpressApi.md#getwordpressinstallations) | **GET** /orgs/{org_id}/websites/{website_id}/apps/wordpress | Trigger discovery of WP installations
*WordpressApi* | [**getWordpressLatestVersion**](docs/Api/WordpressApi.md#getwordpresslatestversion) | **GET** /utils/wordpress/latest | Get WordPress latest available version
*WordpressApi* | [**getWordpressPlugins**](docs/Api/WordpressApi.md#getwordpressplugins) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/plugins | Get website WordPress plugins
*WordpressApi* | [**getWordpressSettings**](docs/Api/WordpressApi.md#getwordpresssettings) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress | Get Wordpress application settings
*WordpressApi* | [**getWordpressThemes**](docs/Api/WordpressApi.md#getwordpressthemes) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/themes | Get website WordPress themes
*WordpressApi* | [**getWordpressUserSsoUrl**](docs/Api/WordpressApi.md#getwordpressuserssourl) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users/{user_id}/sso | Get SSO URL for a WP user
*WordpressApi* | [**getWordpressUsers**](docs/Api/WordpressApi.md#getwordpressusers) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users | 
*WordpressApi* | [**installWordpressPlugin**](docs/Api/WordpressApi.md#installwordpressplugin) | **POST** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/plugins | Install a plugin
*WordpressApi* | [**setDefaultWpSsoUser**](docs/Api/WordpressApi.md#setdefaultwpssouser) | **PUT** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users/default | Set WP user as the default SSO user for that website.
*WordpressApi* | [**updateWordpressAppVersion**](docs/Api/WordpressApi.md#updatewordpressappversion) | **PATCH** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/version | Update website WP app to specific version or latest
*WordpressApi* | [**updateWordpressPluginSettings**](docs/Api/WordpressApi.md#updatewordpresspluginsettings) | **PATCH** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/plugins/{plugin} | Updates website WordPress plugin settings
*WordpressApi* | [**updateWordpressPluginToLatest**](docs/Api/WordpressApi.md#updatewordpressplugintolatest) | **PATCH** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/plugins/{plugin}/version | Updates website WordPress plugin to latest version
*WordpressApi* | [**updateWordpressSettings**](docs/Api/WordpressApi.md#updatewordpresssettings) | **PATCH** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress | Update Wordpress app settings
*WordpressApi* | [**updateWordpressUser**](docs/Api/WordpressApi.md#updatewordpressuser) | **PATCH** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users/{user_id} | Update WordPress user

## Models

- [AcceptInviteBody](docs/Model/AcceptInviteBody.md)
- [Allowance](docs/Model/Allowance.md)
- [ApplicationRoleInfo](docs/Model/ApplicationRoleInfo.md)
- [AuthNs](docs/Model/AuthNs.md)
- [Autoresponder](docs/Model/Autoresponder.md)
- [AutorespondersFullListing](docs/Model/AutorespondersFullListing.md)
- [Backup](docs/Model/Backup.md)
- [BackupAction](docs/Model/BackupAction.md)
- [BackupDetailed](docs/Model/BackupDetailed.md)
- [BackupKind](docs/Model/BackupKind.md)
- [BackupOptions](docs/Model/BackupOptions.md)
- [BackupRestoreOptions](docs/Model/BackupRestoreOptions.md)
- [BackupRoleInfo](docs/Model/BackupRoleInfo.md)
- [BackupStatus](docs/Model/BackupStatus.md)
- [BackupsFullListing](docs/Model/BackupsFullListing.md)
- [BaseSslCert](docs/Model/BaseSslCert.md)
- [Branding](docs/Model/Branding.md)
- [CPLocale](docs/Model/CPLocale.md)
- [CanonicalRedirect](docs/Model/CanonicalRedirect.md)
- [CgroupLimits](docs/Model/CgroupLimits.md)
- [ChangeSubscriptionParams](docs/Model/ChangeSubscriptionParams.md)
- [ChangeSubscriptionParamsSubscriptionId](docs/Model/ChangeSubscriptionParamsSubscriptionId.md)
- [CloneStatus](docs/Model/CloneStatus.md)
- [ControlRoleInfo](docs/Model/ControlRoleInfo.md)
- [CoreServiceInfo](docs/Model/CoreServiceInfo.md)
- [CrontabFullListing](docs/Model/CrontabFullListing.md)
- [CrontabValue](docs/Model/CrontabValue.md)
- [CrontabValueCmd](docs/Model/CrontabValueCmd.md)
- [CrontabValueCmdCronCmd](docs/Model/CrontabValueCmdCronCmd.md)
- [CrontabValueVariable](docs/Model/CrontabValueVariable.md)
- [CrontabValueVariableVariable](docs/Model/CrontabValueVariableVariable.md)
- [CustomersListing](docs/Model/CustomersListing.md)
- [DaemonKind](docs/Model/DaemonKind.md)
- [DatabaseRoleInfo](docs/Model/DatabaseRoleInfo.md)
- [DedicatedSubscriptionInfo](docs/Model/DedicatedSubscriptionInfo.md)
- [DeviceKind](docs/Model/DeviceKind.md)
- [Disk](docs/Model/Disk.md)
- [DnsQueryOutcome](docs/Model/DnsQueryOutcome.md)
- [DnsRecord](docs/Model/DnsRecord.md)
- [DnsRecordKind](docs/Model/DnsRecordKind.md)
- [DnsRoleInfo](docs/Model/DnsRoleInfo.md)
- [DnsSoa](docs/Model/DnsSoa.md)
- [DnsStatus](docs/Model/DnsStatus.md)
- [DnsThirdPartyProvider](docs/Model/DnsThirdPartyProvider.md)
- [DnsZone](docs/Model/DnsZone.md)
- [DockerRegistry](docs/Model/DockerRegistry.md)
- [Domain](docs/Model/Domain.md)
- [DomainInUseStatus](docs/Model/DomainInUseStatus.md)
- [DomainIp](docs/Model/DomainIp.md)
- [DomainMapping](docs/Model/DomainMapping.md)
- [DomainMappingKind](docs/Model/DomainMappingKind.md)
- [DomainMappingUpdate](docs/Model/DomainMappingUpdate.md)
- [DomainMappingsFullListing](docs/Model/DomainMappingsFullListing.md)
- [DomainSslCert](docs/Model/DomainSslCert.md)
- [DomainsListing](docs/Model/DomainsListing.md)
- [Email](docs/Model/Email.md)
- [EmailAddress](docs/Model/EmailAddress.md)
- [EmailAuth](docs/Model/EmailAuth.md)
- [EmailAuthUpdate](docs/Model/EmailAuthUpdate.md)
- [EmailDetailed](docs/Model/EmailDetailed.md)
- [EmailForwardersUpdate](docs/Model/EmailForwardersUpdate.md)
- [EmailPasswordUpdate](docs/Model/EmailPasswordUpdate.md)
- [EmailPublicIp](docs/Model/EmailPublicIp.md)
- [EmailRoleInfo](docs/Model/EmailRoleInfo.md)
- [EmailStatus](docs/Model/EmailStatus.md)
- [EmailsListing](docs/Model/EmailsListing.md)
- [ForwardersFullListing](docs/Model/ForwardersFullListing.md)
- [FtpUser](docs/Model/FtpUser.md)
- [FtpUserUpdate](docs/Model/FtpUserUpdate.md)
- [FtpUsersFullListing](docs/Model/FtpUsersFullListing.md)
- [GetServerRole200Response](docs/Model/GetServerRole200Response.md)
- [GetWordpressAppVersion200Response](docs/Model/GetWordpressAppVersion200Response.md)
- [HttpdStatus](docs/Model/HttpdStatus.md)
- [IniSetting](docs/Model/IniSetting.md)
- [Install](docs/Model/Install.md)
- [InstallCmd](docs/Model/InstallCmd.md)
- [InstallWpPlugin](docs/Model/InstallWpPlugin.md)
- [InstallableWebsiteApp](docs/Model/InstallableWebsiteApp.md)
- [InstallableWebsiteAppsFullListing](docs/Model/InstallableWebsiteAppsFullListing.md)
- [InterfaceIp](docs/Model/InterfaceIp.md)
- [InviteValidation](docs/Model/InviteValidation.md)
- [LicenceInfo](docs/Model/LicenceInfo.md)
- [LicenceKey](docs/Model/LicenceKey.md)
- [LicenceStatus](docs/Model/LicenceStatus.md)
- [LocalRemote](docs/Model/LocalRemote.md)
- [LocalRemoteBody](docs/Model/LocalRemoteBody.md)
- [LogGreetingsMessageMetadata](docs/Model/LogGreetingsMessageMetadata.md)
- [LogHttpMetadata](docs/Model/LogHttpMetadata.md)
- [LogLevelLimit](docs/Model/LogLevelLimit.md)
- [LogTimeMetadata](docs/Model/LogTimeMetadata.md)
- [Login](docs/Model/Login.md)
- [Login2FA](docs/Model/Login2FA.md)
- [Login2FARememberMe](docs/Model/Login2FARememberMe.md)
- [LoginCreds](docs/Model/LoginCreds.md)
- [LoginInfo](docs/Model/LoginInfo.md)
- [LoginMembership](docs/Model/LoginMembership.md)
- [LoginMemberships](docs/Model/LoginMemberships.md)
- [LoginsListing](docs/Model/LoginsListing.md)
- [Member](docs/Model/Member.md)
- [MembersListing](docs/Model/MembersListing.md)
- [MetricsEntry](docs/Model/MetricsEntry.md)
- [MigrationDetails](docs/Model/MigrationDetails.md)
- [MigrationLog](docs/Model/MigrationLog.md)
- [MigrationStatus](docs/Model/MigrationStatus.md)
- [MigrationsListing](docs/Model/MigrationsListing.md)
- [ModelUnset](docs/Model/ModelUnset.md)
- [MySQLAuthPlugin](docs/Model/MySQLAuthPlugin.md)
- [MySQLDB](docs/Model/MySQLDB.md)
- [MySQLDBsFullListing](docs/Model/MySQLDBsFullListing.md)
- [MySQLDBsListing](docs/Model/MySQLDBsListing.md)
- [MySQLUser](docs/Model/MySQLUser.md)
- [MySQLUserAccessHosts](docs/Model/MySQLUserAccessHosts.md)
- [MySQLUserGrants](docs/Model/MySQLUserGrants.md)
- [MySQLUserUpdate](docs/Model/MySQLUserUpdate.md)
- [MySQLUsersFullListing](docs/Model/MySQLUsersFullListing.md)
- [NetworkInterface](docs/Model/NetworkInterface.md)
- [NetworkStatus](docs/Model/NetworkStatus.md)
- [NewAccessToken](docs/Model/NewAccessToken.md)
- [NewAccessTokenResponse](docs/Model/NewAccessTokenResponse.md)
- [NewAutoresponder](docs/Model/NewAutoresponder.md)
- [NewBackupRole](docs/Model/NewBackupRole.md)
- [NewCustomer](docs/Model/NewCustomer.md)
- [NewDnsRecord](docs/Model/NewDnsRecord.md)
- [NewDnsThirdPartyProvider](docs/Model/NewDnsThirdPartyProvider.md)
- [NewDomain](docs/Model/NewDomain.md)
- [NewDomainAlias](docs/Model/NewDomainAlias.md)
- [NewEmail](docs/Model/NewEmail.md)
- [NewFtpUser](docs/Model/NewFtpUser.md)
- [NewInvite](docs/Model/NewInvite.md)
- [NewMember](docs/Model/NewMember.md)
- [NewMigrationDetails](docs/Model/NewMigrationDetails.md)
- [NewMySQLDB](docs/Model/NewMySQLDB.md)
- [NewMySQLUser](docs/Model/NewMySQLUser.md)
- [NewPassword](docs/Model/NewPassword.md)
- [NewPlan](docs/Model/NewPlan.md)
- [NewPrimaryDomainMapping](docs/Model/NewPrimaryDomainMapping.md)
- [NewResourceId](docs/Model/NewResourceId.md)
- [NewResourceUuid](docs/Model/NewResourceUuid.md)
- [NewServerGroup](docs/Model/NewServerGroup.md)
- [NewServerIp](docs/Model/NewServerIp.md)
- [NewSshKey](docs/Model/NewSshKey.md)
- [NewSshKeyId](docs/Model/NewSshKeyId.md)
- [NewSslCert](docs/Model/NewSslCert.md)
- [NewSubscription](docs/Model/NewSubscription.md)
- [NewTag](docs/Model/NewTag.md)
- [NewWebsite](docs/Model/NewWebsite.md)
- [NewWebsiteApp](docs/Model/NewWebsiteApp.md)
- [NewWpUser](docs/Model/NewWpUser.md)
- [OperationStatus](docs/Model/OperationStatus.md)
- [OrchdLogSettings](docs/Model/OrchdLogSettings.md)
- [OrchdLoginPolicyEmailList](docs/Model/OrchdLoginPolicyEmailList.md)
- [OrchdLoginPolicyIpList](docs/Model/OrchdLoginPolicyIpList.md)
- [OrchdLoginPolicySettings](docs/Model/OrchdLoginPolicySettings.md)
- [OrchdLoginPolicyTemporaryEmailList](docs/Model/OrchdLoginPolicyTemporaryEmailList.md)
- [OrchdLoginPolicyTemporaryEmailListEmailListInner](docs/Model/OrchdLoginPolicyTemporaryEmailListEmailListInner.md)
- [OrchdLoginPolicyTemporaryIpList](docs/Model/OrchdLoginPolicyTemporaryIpList.md)
- [OrchdLoginPolicyTemporaryIpListIpListInner](docs/Model/OrchdLoginPolicyTemporaryIpListIpListInner.md)
- [Org](docs/Model/Org.md)
- [OrgAccessToken](docs/Model/OrgAccessToken.md)
- [OrgOwnerUpdate](docs/Model/OrgOwnerUpdate.md)
- [OrgUpdate](docs/Model/OrgUpdate.md)
- [Outcome](docs/Model/Outcome.md)
- [PhpIni](docs/Model/PhpIni.md)
- [PhpVersion](docs/Model/PhpVersion.md)
- [Plan](docs/Model/Plan.md)
- [PlanType](docs/Model/PlanType.md)
- [PlansListing](docs/Model/PlansListing.md)
- [ProcessInfo](docs/Model/ProcessInfo.md)
- [Quota](docs/Model/Quota.md)
- [Recursion](docs/Model/Recursion.md)
- [RequireIpsRule](docs/Model/RequireIpsRule.md)
- [RequireIpsRuleKind](docs/Model/RequireIpsRuleKind.md)
- [ResendPin](docs/Model/ResendPin.md)
- [Resource](docs/Model/Resource.md)
- [ResourceCountByInterval](docs/Model/ResourceCountByInterval.md)
- [ResourceName](docs/Model/ResourceName.md)
- [RewriteChain](docs/Model/RewriteChain.md)
- [RewriteChainCondsInner](docs/Model/RewriteChainCondsInner.md)
- [RewriteChainFullListing](docs/Model/RewriteChainFullListing.md)
- [RewriteChainRule](docs/Model/RewriteChainRule.md)
- [Role](docs/Model/Role.md)
- [RoleInstallationState](docs/Model/RoleInstallationState.md)
- [RoleInstalledStatusSummary](docs/Model/RoleInstalledStatusSummary.md)
- [RoleState](docs/Model/RoleState.md)
- [RoleSummary](docs/Model/RoleSummary.md)
- [RolesInfo](docs/Model/RolesInfo.md)
- [RolesSummary](docs/Model/RolesSummary.md)
- [Selection](docs/Model/Selection.md)
- [ServerConf](docs/Model/ServerConf.md)
- [ServerDiskUsage](docs/Model/ServerDiskUsage.md)
- [ServerDomain](docs/Model/ServerDomain.md)
- [ServerGroup](docs/Model/ServerGroup.md)
- [ServerGroupUpdate](docs/Model/ServerGroupUpdate.md)
- [ServerGroups](docs/Model/ServerGroups.md)
- [ServerInfo](docs/Model/ServerInfo.md)
- [ServerInfoBrief](docs/Model/ServerInfoBrief.md)
- [ServerIowait](docs/Model/ServerIowait.md)
- [ServerIp](docs/Model/ServerIp.md)
- [ServerLoad](docs/Model/ServerLoad.md)
- [ServerMemoryUsage](docs/Model/ServerMemoryUsage.md)
- [ServerNetworkInterfaces](docs/Model/ServerNetworkInterfaces.md)
- [ServerNetworkStats](docs/Model/ServerNetworkStats.md)
- [ServerRole](docs/Model/ServerRole.md)
- [ServerRoleState](docs/Model/ServerRoleState.md)
- [ServerSniMapping](docs/Model/ServerSniMapping.md)
- [ServerSniMappingBody](docs/Model/ServerSniMappingBody.md)
- [ServerStatEntry](docs/Model/ServerStatEntry.md)
- [ServerStatsFullListing](docs/Model/ServerStatsFullListing.md)
- [ServerStatus](docs/Model/ServerStatus.md)
- [ServerStatusAction](docs/Model/ServerStatusAction.md)
- [ServerUptime](docs/Model/ServerUptime.md)
- [ServersListing](docs/Model/ServersListing.md)
- [ServiceInfo](docs/Model/ServiceInfo.md)
- [ServiceKind](docs/Model/ServiceKind.md)
- [ServiceLog](docs/Model/ServiceLog.md)
- [ServiceLogMetadata](docs/Model/ServiceLogMetadata.md)
- [ServiceLogStatus](docs/Model/ServiceLogStatus.md)
- [ServiceLogsFullListing](docs/Model/ServiceLogsFullListing.md)
- [ServiceSettingValue](docs/Model/ServiceSettingValue.md)
- [ServiceSslCert](docs/Model/ServiceSslCert.md)
- [ServiceSslCertMapping](docs/Model/ServiceSslCertMapping.md)
- [ServiceSslCertMappings](docs/Model/ServiceSslCertMappings.md)
- [ServiceSslCertWithData](docs/Model/ServiceSslCertWithData.md)
- [ServiceSslCertsFullListing](docs/Model/ServiceSslCertsFullListing.md)
- [ServiceStatusAction](docs/Model/ServiceStatusAction.md)
- [Session](docs/Model/Session.md)
- [SessionResult](docs/Model/SessionResult.md)
- [SessionsFullListing](docs/Model/SessionsFullListing.md)
- [SetServerStatus](docs/Model/SetServerStatus.md)
- [SetServiceStatus](docs/Model/SetServiceStatus.md)
- [SetWebserverKind](docs/Model/SetWebserverKind.md)
- [Setting](docs/Model/Setting.md)
- [SettingKind](docs/Model/SettingKind.md)
- [SettingsFullListing](docs/Model/SettingsFullListing.md)
- [SetupResult](docs/Model/SetupResult.md)
- [SiteAccessMember](docs/Model/SiteAccessMember.md)
- [SlaveRegistration](docs/Model/SlaveRegistration.md)
- [SmartHostSettings](docs/Model/SmartHostSettings.md)
- [SmartHostSettingsCreds](docs/Model/SmartHostSettingsCreds.md)
- [SmartHostSettingsHost](docs/Model/SmartHostSettingsHost.md)
- [SpaceUsage](docs/Model/SpaceUsage.md)
- [SshKey](docs/Model/SshKey.md)
- [SshKeyFullListing](docs/Model/SshKeyFullListing.md)
- [SshKeyUpdate](docs/Model/SshKeyUpdate.md)
- [SslCertData](docs/Model/SslCertData.md)
- [SslCertMapping](docs/Model/SslCertMapping.md)
- [SslCertMappings](docs/Model/SslCertMappings.md)
- [SslCertWithData](docs/Model/SslCertWithData.md)
- [SslCerts](docs/Model/SslCerts.md)
- [SslCertsFullListing](docs/Model/SslCertsFullListing.md)
- [StagingDomain](docs/Model/StagingDomain.md)
- [Status](docs/Model/Status.md)
- [Subscription](docs/Model/Subscription.md)
- [SubscriptionDedicatedServer](docs/Model/SubscriptionDedicatedServer.md)
- [SubscriptionDedicatedServers](docs/Model/SubscriptionDedicatedServers.md)
- [SubscriptionDedicatedServersInfo](docs/Model/SubscriptionDedicatedServersInfo.md)
- [SubscriptionsListing](docs/Model/SubscriptionsListing.md)
- [SystemPackage](docs/Model/SystemPackage.md)
- [SystemPackageName](docs/Model/SystemPackageName.md)
- [Tag](docs/Model/Tag.md)
- [TagsFullListing](docs/Model/TagsFullListing.md)
- [TldNs](docs/Model/TldNs.md)
- [UnixTimestamp](docs/Model/UnixTimestamp.md)
- [UpdateApplicationRole](docs/Model/UpdateApplicationRole.md)
- [UpdateAutoresponder](docs/Model/UpdateAutoresponder.md)
- [UpdateBackupRole](docs/Model/UpdateBackupRole.md)
- [UpdateCrontabFullListing](docs/Model/UpdateCrontabFullListing.md)
- [UpdateCrontabValue](docs/Model/UpdateCrontabValue.md)
- [UpdateCrontabValueCmd](docs/Model/UpdateCrontabValueCmd.md)
- [UpdateCrontabValueCmdCronCmd](docs/Model/UpdateCrontabValueCmdCronCmd.md)
- [UpdateCrontabValueVariable](docs/Model/UpdateCrontabValueVariable.md)
- [UpdateCrontabValueVariableVariable](docs/Model/UpdateCrontabValueVariableVariable.md)
- [UpdateDatabaseRole](docs/Model/UpdateDatabaseRole.md)
- [UpdateDnsRecord](docs/Model/UpdateDnsRecord.md)
- [UpdateDnsRole](docs/Model/UpdateDnsRole.md)
- [UpdateDnsZone](docs/Model/UpdateDnsZone.md)
- [UpdateEmail](docs/Model/UpdateEmail.md)
- [UpdateEmailRole](docs/Model/UpdateEmailRole.md)
- [UpdateLogin](docs/Model/UpdateLogin.md)
- [UpdateLoginResult](docs/Model/UpdateLoginResult.md)
- [UpdateMember](docs/Model/UpdateMember.md)
- [UpdatePlan](docs/Model/UpdatePlan.md)
- [UpdateRewriteChain](docs/Model/UpdateRewriteChain.md)
- [UpdateRewriteChainFullListing](docs/Model/UpdateRewriteChainFullListing.md)
- [UpdateServerRoleRequest](docs/Model/UpdateServerRoleRequest.md)
- [UpdateSettingRequest](docs/Model/UpdateSettingRequest.md)
- [UpdateSubscription](docs/Model/UpdateSubscription.md)
- [UpdateWebsite](docs/Model/UpdateWebsite.md)
- [UpdateWebsiteSubscriptionId](docs/Model/UpdateWebsiteSubscriptionId.md)
- [UpdateWpAppToVersion](docs/Model/UpdateWpAppToVersion.md)
- [UpdateWpPlugin](docs/Model/UpdateWpPlugin.md)
- [UpdateWpSettings](docs/Model/UpdateWpSettings.md)
- [UpdateWpUser](docs/Model/UpdateWpUser.md)
- [UpgradableSystemPackage](docs/Model/UpgradableSystemPackage.md)
- [UsedResource](docs/Model/UsedResource.md)
- [UsedResourcesFullListing](docs/Model/UsedResourcesFullListing.md)
- [UuidListing](docs/Model/UuidListing.md)
- [ValidatedPasswordRecovery](docs/Model/ValidatedPasswordRecovery.md)
- [ValidationResult](docs/Model/ValidationResult.md)
- [WPAutoUpdateCore](docs/Model/WPAutoUpdateCore.md)
- [WPPluginAutoUpdateStatus](docs/Model/WPPluginAutoUpdateStatus.md)
- [WPPluginStatus](docs/Model/WPPluginStatus.md)
- [WPPluginUpdateAvailable](docs/Model/WPPluginUpdateAvailable.md)
- [WebserverKind](docs/Model/WebserverKind.md)
- [Website](docs/Model/Website.md)
- [WebsiteApp](docs/Model/WebsiteApp.md)
- [WebsiteAppKind](docs/Model/WebsiteAppKind.md)
- [WebsiteAppsFullListing](docs/Model/WebsiteAppsFullListing.md)
- [WebsiteCloneStatus](docs/Model/WebsiteCloneStatus.md)
- [WebsiteDomain](docs/Model/WebsiteDomain.md)
- [WebsiteKind](docs/Model/WebsiteKind.md)
- [WebsiteLog](docs/Model/WebsiteLog.md)
- [WebsiteLogMetadata](docs/Model/WebsiteLogMetadata.md)
- [WebsiteLogStatus](docs/Model/WebsiteLogStatus.md)
- [WebsiteLogsFullListing](docs/Model/WebsiteLogsFullListing.md)
- [WebsiteMetricsFullListing](docs/Model/WebsiteMetricsFullListing.md)
- [WebsiteOperation](docs/Model/WebsiteOperation.md)
- [WebsiteOperationValidation](docs/Model/WebsiteOperationValidation.md)
- [WebsitePhpSettings](docs/Model/WebsitePhpSettings.md)
- [WebsiteServerDomains](docs/Model/WebsiteServerDomains.md)
- [WebsiteStatus](docs/Model/WebsiteStatus.md)
- [WebsitesListing](docs/Model/WebsitesListing.md)
- [WpInstallation](docs/Model/WpInstallation.md)
- [WpLatestVersion](docs/Model/WpLatestVersion.md)
- [WpPlugin](docs/Model/WpPlugin.md)
- [WpPluginsFullListing](docs/Model/WpPluginsFullListing.md)
- [WpSettings](docs/Model/WpSettings.md)
- [WpTheme](docs/Model/WpTheme.md)
- [WpThemesFullListing](docs/Model/WpThemesFullListing.md)
- [WpUser](docs/Model/WpUser.md)
- [WpUserRole](docs/Model/WpUserRole.md)
- [WpUsersFullListing](docs/Model/WpUsersFullListing.md)

## Authorization

### bearerAuth

- **Type**: Bearer authentication


### sessionCookie

- **Type**: API key
- **API key parameter name**: id0
- **Location**: 


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `9.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
