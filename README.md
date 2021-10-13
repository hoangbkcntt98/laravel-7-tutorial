+ Config docker :
 - You should use linux container ( with window user let install wsl )
 - Sharing your drive ( important)
    - Create an account in Control Panel\System and Security\Administrative Tools\Computer Manager\System tools 
    - Add the account to docker-user group
    - Docker Destop/Setting/Shared Devices/Apply 
    - Login with the account 
    - If you want run npm inside app container please do the following step
    - Importance!!! You need add full-controll permission for docker user which just have been created 
    - Click Righ -> Sercurity -> add user and choice full-controll 
+ Step 1 :Create composer container
  - Create a localcomposer for creating a laravel app with composer
  - run in cmd :
    docker build -t localcomposer -f ./composer/composer.dockerfile ./composer
  - run image which are just created
    - Linux :docker run -it --name localcomposer -d -v $(pwd):/var/www/html localcomposer:latest
    - Windows :docker run -it --name localcomposer -d -v ${pwd}:/var/www/html localcomposer:latest
   
  - then, use composer for creating laravel app ( with name is "app")
    - exec to app and use composer for creating app 
      - docker run -it -v $(pwd):/var/www/html localcomposer bash
      - cd /var/www/html
      - if you download from github -> cd app compose install 
      - composer create-project --prefer-dist laravel/laravel={version of laravel which you need} app
  - Now, our directory structure are
    + --app
    + --composer
    + -----composer.dockerfile
    + --config ( includes all config for services )
+ Step 2 : 
  - 3 services :
    - app : for execute php artisan 
    - db: mysql db
    - webserver: nginx  
  
    - localhost:8098
+ Step 3 : docker-compose up -d
- create file .env 
+ Step 4 : run laravel mix( css node js)
    - config in webpack.mix.js
    - docker-compose exec app bash
    - npm install
    - npm run dev
    - npm run watch-poll ( auto update while change file react)
+ Step 5:   
    - add a user 'root'@'..network' in services db (if error)
+ References : 
  + https://www.digitalocean.com/community/tutorials/how-to-set-up-laravel-nginx-and-mysql-with-docker-compose
  + https://kipalog.com/posts/Cai-dat-moi-truong-Docker-cho-Laravel-2019
