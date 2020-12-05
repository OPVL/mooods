#!/bin/bash
version=$1;
echo 'Changing php version to '$1;

### Change version in env file 
sed -i '.bak' "s/PHP_VERSION=.../PHP_VERSION=$1/g" '.env'

### Build fpm and cli for new version
docker-compose build php-fpm
docker-compose build workspace

### Restart Containers to use the new version of php
docker-compose restart php-fpm workspace
