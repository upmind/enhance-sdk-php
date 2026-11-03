# Changelog

All notable changes to the package will be documented in this file.

## Unreleased

- Allow `guzzlehttp/guzzle` ^8.0 and `guzzlehttp/psr7` ^3.0; require `psr/http-client` ^1.0
- Replace `GuzzleHttp\Utils::jsonEncode()` (removed in Guzzle 8) with `json_encode()` and `JSON_THROW_ON_ERROR`
- Catch `Psr\Http\Client\NetworkExceptionInterface` instead of `ConnectException`, so Guzzle 8 network timeouts throw `ApiException`
- Read the error response only from exceptions that have one (Guzzle 8 removed `RequestException::getResponse()`)
- Add `templates/api.mustache` with these changes, so re-generation keeps them
- Fix implicitly nullable parameters in files the generator no longer produces (deprecated in PHP 8.4)
- Test PHP 8.4 and 8.5 in CI

## v12.26.3 - 2026-10-26

- Update open-api.yml to Enhance v12.26.3 OpenAPI spec
- Re-generate SDK
- Update README.md docs

## v12.25.2 - 2026-07-31

- Update open-api.yml to Enhance v12.25.2 OpenAPI spec
- Re-generate SDK
- Update README.md docs

## v12.22.1 - 2026-05-27

- Remove InvalidArgumentException throws when encountering unexpected enum values

## v12.22.0 - 2026-05-27

- Update open-api.yml to Enhance v12.22.0 OpenAPI spec
- Re-generate SDK
- Update README.md docs

## v12.13.0 - 2025-12-02

- Update open-api.yml to Enhance v12.13.0 OpenAPI spec
- Re-generate SDK
- Update README.md docs

## v12.9.3 - 2025-08-12

- Update open-api.yml to Enhance v12.9.3 OpenAPI spec
- Re-generate SDK
- Update README.md docs

## v12.3.0 - 2025-05-08

- Update generator.sh to use openapi-generator-cli v7.12.0
- Update open-api.yml to Enhance v12.3.0 OpenAPI spec
- Re-generate SDK
- Update README.md docs

## v12.0.0 - 2025-02-19

- Update open-api.yml to Enhance v12.0.0 OpenAPI spec
- Re-generate SDK
- Update README.md docs

## v10.0.0 - 2023-12-19

- Update open-api.yml to Enhance v10.0.0 OpenAPI spec
- Re-generate SDK
- Update README.md docs

## v9.9.1 - 2023-10-02

- Update generate.sh to use a config file
- Re-generate SDK with enumUnknownDefaultCase: true

## v9.9.0 - 2023-10-02

- Update open-api.yml to Enhance v9.9.0 OpenAPI spec
- Re-generate SDK
- Update README.md docs

## v9.4.0 - 2023-06-29

- Update open-api.yml to Enhance v9.4.0 OpenAPI spec
- Re-generate SDK
- Update README.md docs

## v9.1.1 - 2023-05-02

- Update open-api.yml to Enhance v9.1.1 OpenAPI spec
- Re-generate SDK
- Update README.md docs

## v9.0.0 - 2023-01-25

- Update open-api.yml to Enhance v9.0.0 OpenAPI spec
- Re-generate SDK
- Update README.md docs

## v8.1.0 - 2022-12-05

- Update open-api.yml to Enhance v8.1.0 OpenAPI spec
- Re-generate SDK
- Update README.md docs

## v8.0.0 - 2022-11-09

- Update open-api.yml to Enhance v8.0.0 OpenAPI spec
- Fix generate.sh
- Re-generate SDK
- Update README.md docs

## v7.3.0 - 2022-11-09

- Update SDK versioning to follow Enhance OpenAPI spec version

## v1.0.0 - 2022-10-18

Initial release
