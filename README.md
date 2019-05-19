#Skeleton kata php docker
Configuración básica para realizar alguna kata en PHP.




##Comandos para la configuración
```
$ docker-compose up -d
$ docker exec -it exercism bash
$ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
$ php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
$ php composer-setup.php
$ php -r "unlink('composer-setup.php');"
$ php composer.phar install --prefer-source --no-interaction
```

##Enunciado
Para ejecutar el test, dentro del contenedor
``` 
$ ./vendor/bin/phpunit hello-world/hello-world_test.php 
```



##Submit 
``` 
exercism submit /path/to/file [/path/to/file2 ...]
```

## Documentación


- [PHPUnit](https://phpunit.de/manual/current/en/writing-tests-for-phpunit.html)
- [Prophecy](https://github.com/phpspec/prophecy) 
- [TDD](http://librosweb.es/libro/tdd/) 
- [Git](https://git-scm.com/)

