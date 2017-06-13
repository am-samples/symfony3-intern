#!/bin/bash

composer install
php bin/console doctrine:migrations:migrate
php bin/console fos:user:create adminuser --super-admin
bower install
php bin/console assets:install
php bin/console assetic:dump --env=prod --no-debug