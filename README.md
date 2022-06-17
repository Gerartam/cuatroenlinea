# Iniciar cuatro en linea

Acá veremos como poder iniciar y jugar al clásico juego, el cuatro en linea!

## Antes de comenzar

Deberemos tener estas 3 aplicaciones antes de comenzar con el proceso. \
- [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- [DDEV](https://ddev.readthedocs.io/en/stable/)
- [Composer](https://getcomposer.org/download/)

## Crear repositorio

Lo que haremos será copiar el link de nuestro repositorio y pegarlo en la carpeta que queramos usar. En la carpeta abriremos la terminal y usaremos el comando ```git clone https://github.com/Gerartam/cuatroenlinea.git```. Luego nos moveremos a la carpeta creada con el comando ```cd cuatroenlinea```. De acá podremos seguir con la configuración de DDEV.

## Configuración

Lo primero que haremos será usar el comando ``` ddev config ```
1) Esto es para poner el nombre del proyecto, en caso de que el nombre del proyecto sea igual que la carpeta entonces dejaremos esta opción en blanco.

2) Esto es para configurar la ruta del proyecto, en casi de que la ruta sea la misma que la del directorio, dejaremos esta copción en blanco.

3) Esto es para elegir el tipo del proyecto, acá escribiremos ```laravel``` 

4) Necesitaremos usar el composer por lo que tendremos que escribir el siguiente comando en caso de no ternerlo `ddev composer install`.

5) Para crear la key tendremos que usar el siguiente comando en la consola `ddev php artisan key:generate`.

6) Por último, antes de ya iniciar el proyecto deberemos usar `cp .env.example .env` para crear el archivo de ambiente.

## Iniciar el proyecto y jugar!

En esta etapa usaremos el comando `ddev start` y luego `ddev launch` para abrirlo. En este punto ya estaría abierta la página, a continuación deberemos agregarle al link `/jugar/` de manera que queda `https://cuatroenlinea.ddev.site/jugar/1`. Para jugar habrá que poner un número del 1 al 7 luego de la última barra del link.

## Cerrar el juego

Para cerrar deberemos usar el comando `ddev poweroff` y el proyecto estará apagado.