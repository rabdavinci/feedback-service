build:
	docker-compose build
	docker-compose run --rm feedback-service bash -c "composer install"
run:
	docker-compose up
migrate:
	docker-compose run --rm feedback-service bash -c "php yii migrate --interactive=0"
