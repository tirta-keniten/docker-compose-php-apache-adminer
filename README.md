# docker-compose - php - apache - adminer

Originally from: https://github.com/johnnywang1994/docker-php7-lamp

I changed PHPMyAdmin with Adminer because it's light-weight database managing tool.

## In the box

* PHP 7.3 & Apache
* MySQL
* Adminer

## Usage

1. Clone this repo to folder ``my_app``
2. Go to folder ``my_app``
3. Run & build

```
git clone git@github.com:tirta-keniten/docker-php7-lamp.git my_app/

cd my_app

docker-compose up
```

## URL

1. Web Server: http://localhost:8081/
2. Adminer: http://localhost:18081/

## Next features

* Apache virtual host