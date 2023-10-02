#! /bin/bash
openapi-generator generate -i ./open-api.yml -g php -c generator-config.yml -o ./OpenApi/ --package-name "upmind/enhance-sdk"
cp -r ./OpenApi/lib/* ./src/
cp -r OpenApi/.openapi-generator ./
cp -r ./OpenApi/docs ./
cp -r ./OpenApi/test ./
cp ./OpenApi/.php-cs-fixer.dist.php ./
cp ./OpenApi/.travis.yml ./
cp ./OpenApi/phpunit.xml.dist ./
rm -r ./OpenApi/lib
rm -r ./OpenApi/test
