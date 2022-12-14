# docker 
docker xxxx

##  comandos docker 
### cria um container com uma image
```
docker run <image>
```
### baixar image no docker images
```
docker pull <image>
```
### criar uma nova camada de container
```
docker create
```

### listar container criados 
```
docker ps
```

### executar um comando dentro de um container que já esta em execução 
```
Docker exec
```
### gerenciar todas as imagens do container 
```
docker images 
```

### cria uma image através de arquivo chamado Dockerfile
```
docker build 
```
### informações do contoneir em execucação (cpu,mem, etc)
```
docker stats <container>
```
### detalhes da image ou container 
```
Docker inspect <image ou container>
```
### deletar imagem
```
Docker rmi <image>
```

### entrar dentro do container_image pastas e arquivos
```
docker attach <container_image>
```
### iniciar um container
```
docke start  <container>
```

### pausar um container
```
docke stop <container>
```

### Cria o grupo docker
```
sudo usermod -aG docker $USER
```
### Adicione seu usuário ao grupo docker
```
sudo usermod -aG docker $USER
```

### Exclui todas  containers  não utilizado
```
docker system prune
```
## Exclui todas imagens containers volumes não utilizado
```
docker system prune -a
```
### Exclui todos volumes não utilizado
```
docker volume prune
```

### Exclui todas redes  não utilizado 
```
docker network prune
```
### pausa todos os container
```
docker stop $(docker ps -a -q)
```
### exclui todos os containers 
```
docker rm $(docker ps -a -q)    
```

##  comandos docker-compose

### cria e inicia os containers 
```
docker-compose up
```

### realiza apenas a etapa de build das imagens que serão utilizadas
```
docker-compose build
```

### visualiza os logs do container 
```
docker-compose logs
```

### reinicia os containers 
```
docker-compose restart 
```

### permite aumentar o número de réplicas de um contêiner
```
docker-compose scale
```

### inicia os contêineres
```
docker-compose start
```

### paralisa os contêineres
```
docker-compose stop
```

### paralisa e remove todos os contêineres e seus componentes como rede, imagem e volume
```
docker-compose down
```

