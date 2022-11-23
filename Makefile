setup:
	docker-compose run composer install

test:
	docker-compose run php ./vendor/bin/phpunit tests
