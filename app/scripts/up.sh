#!/bin/bash

sudo chmod -R 777 var/cache
composer install
php bin/console doctrine:migrations:migrate
php bin/console assets:install
php bin/console assetic:dump --env=prod --no-debug