# docker 
estrutura em docker que Contempla container 
laravel 
vuejs 
mysql 

### clone do repostorio em questão 
```
git clone https://github.com/joseConejoMadureira/DOCKER.git
```
### diretorio  do projeto
```
cd  DOCKER
```
### diretorio  do projeto laravue
```
cd  laraVue
```

### cria e inicia os containers 
```
docker-compose up
```
### instalçao das dependencias php 
```
docker-compose exec web composer install
```
### instalçao das migrates 
```
docker-compose exec web php artisan migrate
```

### instalçao das dependencias vuejs (frontend) 
```
docker-compose exec web npm install
```

### build do frontend(vuejs) 
```
docker-compose exec web npm run build
```
