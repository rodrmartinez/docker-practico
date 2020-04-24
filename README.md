docker-compose                    
================

Practico
---------

El objetivo del practico es generar un archivo docker-compose.yml para publicar
dos contenedores,  uno con un API REST en Flask y otro con un servidor WEP APACHE.

Esctrucura de Archivos Final
---------

Al finalizar el practico, debemos obtener la siguiente estructura de archivos:

practico/
├── docker-compose.yml
├── observatorio/
│   ├── api.py
│   ├── Dockerfile
│   └── requirements.txt
├── website/
│   └── index.php

FLASK API
---------

Generar dentro de la carpeta correspondiente a la api (observatorio) un Dockerfile con la siguiente configuracion:

    * Utilizar la imagen python:3-onbuild  
    * copiar el contenido de la carpeta (.) al directorio /usr/src/app dentro del contenedor
    * ejecutar el comando ["python", "api.py"]


ARCHIVO COMPOSE
---------

General el archivo Compose para iniciar los dos servicios necesarios.La red observario-net se debe crear y utilizar en ambos contendores.

  
  * observatorio-service:
       - Indicar que la imagen a utilizar se generara desde el Dockerfile dentro de la carpeta observatorio
       - Exponer el puerto 80 del contenedor en el puerto 5001 del host
  *  website-service:
       - Utilizar la imagen php:apache 
       - montar el directorio website en /var/www/html den contenedor
       - Exponer el puerto 80 del contenedor en el puerto 5000 del host
       - Utiliar depends_on para indicar que requiere que observatory-service este funcionando
