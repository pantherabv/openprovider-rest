docker run --rm -v "${PWD}:/local" openapitools/openapi-generator-cli generate  -i https://docs.openprovider.com/swagger.json -g php -o /local/output


docker run --rm -v "${PWD}:/local" openapitools/openapi-generator-cli generate  -i https://docs.openprovider.com/swagger.json -g php -o /local/output --additional-properties=invokerPackage=Panthera\Openprovider,packageName=openprovider-rest





https://docs.openprovider.com/doc/all
https://docs.openprovider.com/swagger.json

https://github.com/openapitools/openapi-generator
https://openapi-generator.tech/docs/generators/php/
https://openapi-generator.tech/docs/configuration/
