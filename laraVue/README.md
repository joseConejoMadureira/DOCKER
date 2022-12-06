em desenvolvimento
docker-compose  up -d
docker-compose exec web composer install
docker-compose exec web php artisan migrate
docker-compose exec web npm install
docker-compose exec web npm run build
