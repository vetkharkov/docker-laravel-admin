docker-up:
	docker-compose up -d

docker-down:
	docker-compose down

docker-build: pm
	docker-compose up --build -d

perm:
	sudo chgrp -R www-data storage bootstrap/cache
	sudo chmod -R ug+rwx storage bootstrap/cache

pm:
	sudo chmod 777 -R storage && sudo chmod 777 -R bootstrap/cache
	sudo chmod 777 -R app
