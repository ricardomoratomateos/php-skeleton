# How to execute it

```bash
$ composer install
$ docker-compose up #docker-compose -up --build
$ docker-compose exec mysql sh /conf/mysql-setup.sh
```

And go to ` http://localhost:8080`

# Notes

* As the MySQL docker is the latest version (8.x), it can't connect by user and password, so the `mysql-setup.sh` change the way to do so to user and password again.
* The DBAL file config is in `/conf`
* Uses composer
* Uses Slim v3 and DBAL v2.9

# TODO

* Not connect with root user.
* Use Slim v4
* In PROD environment, remove the volumes of the docker.
* In PROD environment, install composer and execute it inside the docker.

# References

See [Docker Skeleton](https://github.com/ricardomoratomateos/nginx-php-mysql-docker)