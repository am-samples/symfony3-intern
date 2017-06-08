#!/bin/bash

composer install
sudo chmod -R 777 var/cache
php bin/console doctrine:migrations:migrate
bower install
php bin/console assets:install
php bin/console assetic:dump --env=prod --no-debug