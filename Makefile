install:
	composer install
	php bin/console d:d:c
	php bin/console d:m:m

update:
	composer update
	php bin/console d:m:m

entity:
	php bin/console make:entity

database:
	php bin/console doctrine:database:drop --force
	php bin/console d:d:c
	php bin/console d:m:d
	php bin/console d:f:l
	php bin/console d:m:m