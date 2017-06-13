#!/bin/bash

composer install
sudo chmod -R 777 var/cache
sudo chmod -R 777 var/logs
sudo chmod -R 777 var
sudo chmod 777 app/config/parameters.yml
sudo chmod -R 777 vendor
bower install
sudo chmod -R 777 web/assets
sudo -u www-data php bin/console assets:install
sudo chmod -R 777 web
sudo -u www-data php bin/console assetic:dump --env=prod --no-debug
sudo -u www-data php bin/console doctrine:migrations:migrate
sudo -u www-data php bin/console fos:user:create adminuser --super-admin