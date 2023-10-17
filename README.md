### Aplicação para estudo do conteúdo do concurso do MPAC

![Screenshot](screenshot.png)

### Informações do Sistema

#### Versão da imagem do Nginx
    1.25.1

#### Versão do Laravel
    10.0

#### Versão do PHP
    8.2.7

#### Extensões do PHP
    php8.2-fpm
    php8.2-mbstring
    php8.2-soap
    php8.2-gd
    php8.2-xml
    php8.2-intl
    php8.2-dev
    php8.2-curl
    php8.2-zip
    php8.2-imagick
    php8.2-gmp
    php8.2-ldap
    php8.2-bcmath
    php8.2-bz2
    php8.2-phar
    php8.2-mysql
    php8.2-sqlite3
    php8.2-sqlsrv
    php8.2-pdo_sqlsrv

#### Pasta Raiz
    /laravel

### Rodando a aplicação

#### Acesse a pasta do projeto
    $ cd estudo-concurso-mpac

#### Crie uma nova rede do docker chamada proxy
    $ docker network create proxy

#### Faça uma cópia do dev.example.yml com o nome dev.yml
    $ cp dev.example.yml dev.yml

#### Use a stack dev.yml para iniciar um traefik como proxy reverso, um webserver e um sql server
    $ docker-compose -f dev.yml up -d

#### Acesse o container do webserver
    $ docker exec -it app-estudo

#### Faça uma cópia do arquivo .env.example com o nome .env e gere uma nova chave da aplicação 
    # cp .env.example .env
    # php artisan key:generate

#### Instale as dependências do composer e npm
    # composer install
    # npm install

#### Faça o ajuste nas permissões de algumas pastas
    # chgrp -R www-data storage bootstrap/cache
    # chmod -R ug+rwx storage bootstrap/cache

#### Edite o arquivo .env com as informações do seu banco de dados

#### Saia do container
    # exit

#### Deixe rodando o _npm run dev_ no seu container
    $ docker exec -itd app-estudo npm run dev
