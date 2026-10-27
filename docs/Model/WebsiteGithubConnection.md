# # WebsiteGithubConnection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**repo_owner** | **string** |  |
**repo_name** | **string** |  |
**branch_or_tag_name** | **string** |  |
**build_command** | **string** |  | [optional]
**publish_directory** | **string** | If the build command produces static assets, enter the directory relative to the build directory where those assets are built, and the document root will be set to that directory. | [optional]
**auto_deploy** | **bool** | :&gt; Enhance will automatically deploy the latest commit the selected branch or tag when a request is received from Github to the webhook URL |
**ref_kind** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
