# Cuatro en Linea

## Tabla de contenidos
- [About](#about)
- [Requisitos](#requisitos)
- [Instalacion](#instalacion)

## About <a name = "about"></a>

Este es un juego llamado Cuatro en Linea el cual esta hecho en PHP con el framework Laravel. Aqui, hay una guia de como llevar a levantar el proyecto para poder jugarlo y editar lo necesario del codigo. Es importante hacer una correcta instalacion de los requisitos que pongo a continuacion ya que sin esto, es complicado que funcione el proyecto. Por lo tanto, tendran que instalar estos programas.

## Requisitos <a name = "requisitos"></a>

Los requisitos siguientes son necesarios para hacer un deployment corecto

- Docker(https://www.docker.com/get-started/)
- DDEV(https://ddev.readthedocs.io/en/stable/)

DDEV es una herramienta open source que nos va a permitir tener a disposicion ciertas herramientas que nos ayudaran al momento de desarrollar proyectos con entornos en PHP en pocos minutos sin necesidad de mucha complejidad. Para ello a la vez haremos uso de un sistema de virtualizacion a nivel de sistema operativo entregandonos softwares en paquetes en lo que son llamados containers. Esta herramienta se llama Docker.

### Instalacion <a name = "instalacion"></a>

Lo primero que tendras que hacer es copiar el link para poder clonar el repositorio. Asi que una vez copiado el link vas a hacer lo siguiente:

```shell

#1
git clone https://github.com/fakenlol/cuatroenlinea.git

#2
cd cuatroenlinea/

#3
ddev config

#4
ddev composer install

#5
cp .env.example .env

#6
ddev php artisan key:generate

#7
ddev start
```

En la linea #1 lo que hacemos es el clonado del repositorio para tenerlo en nuestras computadoras. Luego en la linea nro. #2 entramos a la carpeta del repositorio para empezar a ejecutar los comandos. Una vez dentro ejecutaremos la linea #3 que nos saldra un output como el siguiente:

```shell
Project name (cuatroenlinea):

You may leave this value blank if your site files are in the project root 
Docroot Location (public):

Project Type [backdrop, drupal10, drupal6, drupal7, drupal8, drupal9, laravel, magento, magento2, php, shopware6, typo3, wordpress] (laravel):
```

En la primera linea nos pide como queremos llamar a la aplicacion. En mi caso puse enter para dejarlo el predeterminado que es "cuatroenlinea" porque no deseo cambiarselo. Pero podriamos hacerlo en caso de quererlo. En la linea siguiente nos consulta sobre cual sera la ruta root de nuestro proyecto. En nuestro caso presionaremos enter para establecer la ruta actual como la raiz del poryecto. Por ultimo nos consultara de que tipo de proyecto se trata para preparar el entorno adecuado para nuestra aplicacion. Aqui tambien presionaremos enter sin mas ya que nuestro proyecto es de laravel como bien indica el default.

Pasando luego a la linea de codigo nro. #4 nos topamos con un comando el cual nos instalara las dependencias necearias para correr el proyecto. Para ello haremos uso de la herramienta composer que trae DDEV para hacernos esta tarea mas sencilla. Esto lo que hara es leer nuestro composer.json y saber que librerias tiene que descargar. Por lo tanto a no asustarse si al presionar enter salen unas cuantas lineas de dependencias que estan siendo descargadas para ser usadas en la posteridad.

Siguiento con la configuracion,la linea #5 copiara y establecera unas configuraciones con variables de entorno necesarias para el ambiente de desarrollo. Estos valores cambian dependiendo si se esta corriendo en localhost o en production.

En la ante ultima linea, la linea #6 nos encontramos con un comando que servira para establecer una key llamada APP_KEY en el .env. Esta es una llave que se genera y solo conoce tu aplicacion para poder desencriptar data que solo es posible desencriptar por la llave que conoce tu aplicaion.

Por ultimo iniciaremos la aplicacion en con el comando ddev start. Que a lo ultimo nos dira en que url se encuentra nuestra aplicacion.

Para poder ver algo tendremos que hacerle una modificacion a nuestra url. Tendria que quedar asi https://cuatroenlinea.ddev.site/jugar/1. Sin embargo, el 1 ese puede variar y ser cualquier numero. Ya que ese numero representa las diferentes combinaciones de jugadas. Provisoriamente el codigo solamente puede poner fichas e iniciarse de esta manera. Pero lo ideal seria mejorarlo para que se pueda ganar y hacer otras funcionalidades.
