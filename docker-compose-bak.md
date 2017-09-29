version: "2"
services:
  nginx:
      build:
          context: ./nginx
      ports:
          - "8080:80"
      volumes:
          - ./app/blog:/var/app
  fpm:
      build:
          context: ./fpm
      volumes:
          - ./app/blog:/var/app
      expose:
          - "9000"
      environment:
          - "DB_HOST=mysql"
          - "DB_DATABASE=laravel"
  mysql:
      image: mariadb
      environment:
          - MYSQL_ROOT_PASSWORD=root
          - MYSQL_DATABASE=laravel
      ports:
          - 3306:3306
      volumes:
          - ./database:/var/lib/mysql
  phpmyadmin:
    image: phpmyadmin/phpmyadmin
    restart: always
    links:
      - mysql
    ports:
      - 8081:80
    environment:
      MYSQL_USERNAME: root
      MYSQL_ROOT_PASSWORD: root
      PMA_ARBITRARY: 1