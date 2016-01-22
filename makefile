server:
	php -S localhost:8888 -t public

fe:
	gulp

migrate_recreate:
	php artisan migrate:reset 
	php artisan migrate

seed:
	php artisan db:seed

