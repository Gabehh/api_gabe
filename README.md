![img](https://avatars1.githubusercontent.com/u/5365410?s=75) Usuarios y Resultados REST API
======================================

[![MIT license](http://img.shields.io/badge/license-MIT-brightgreen.svg)](http://opensource.org/licenses/MIT)
[![Minimum PHP Version](https://img.shields.io/badge/php-%5E7.1-blue.svg)](http://php.net/)
> Implementación de una API REST con el framework Symfony para la gestión de usuarios y resultados.

Esta aplicación implementa una interfaz de programación [REST][rest] desarrollada como ejemplo de
utilización del framework [Symfony][symfony]. La aplicación proporciona las operaciones
habituales para la gestión de usuarios y cuestiones. Este proyecto
utiliza varios componentes del Framework Symfony, [JWT][jwt] (JSON Web Tokens), el _logger_ [Monolog][monolog]
y el [ORM Doctrine][doctrine].

Adicionalmente -para hacer más sencilla la gestión de los datos- se ha utilizado
el ORM [Doctrine][doctrine]. Doctrine 2 es un Object-Relational Mapper que proporciona
persistencia transparente para objetos PHP. Utiliza el patrón [Data Mapper][dataMapper]
con el objetivo de obtener un desacoplamiento completo entre la lógica de negocio y la
persistencia de los datos en un SGBD.

Por otra parte se incluye parcialmente la especificación de la API (OpenAPI 3.0) . Esta
especificación se ha elaborado empleando el editor [Swagger][swagger]. Adicionalmente se
incluye la interfaz de usuario (SwaggerUI) de esta fenomenal herramienta que permite
realizar pruebas interactivas de manera completa y elegante.


## Instalación de la aplicación

El primer paso consiste en generar un esquema de base de datos vacío y un usuario/contraseña
con privilegios completos sobre dicho esquema.

A continuación se deberá crear una copia del fichero `./.env` y renombrarla
como `./.env.local`. Después se debe editar dicho fichero y modificar la variable `DATABASE_URL`
con los siguientes parámetros:

* Nombre y contraseña del usuario generado anteriormente
* Nombre del esquema de bases de datos

Una vez editado el anterior fichero y desde el directorio raíz del proyecto se deben ejecutar los comandos:
```
$ composer install
$ bin/console doctrine:schema:update --dump-sql --force
```
El proyecto base entregado incluye el componente [lexik/jwt-authentication-bundle][lexik] para
la generación de los tókens JWT. Siguiendo las instrucciones indicadas en la [documentación][1] de
dicho componente se generarán las claves SSH necesarias con los comandos:
```
$ mkdir -p config/jwt
$ openssl genpkey -out config/jwt/private.pem -aes256 -algorithm rsa -pkeyopt rsa_keygen_bits:4096
$ openssl pkey -in config/jwt/private.pem -out config/jwt/public.pem -pubout
```
> En la instalación de XAMPP el programa *openssl* se encuentra en el directorio `XAMPP\apache\bin`. El
> resto de la configuración ya se ha realizado en este proyecto. Como *pass phrase* se empleará la
> especificada en la variable `JWT_PASSPHRASE` en el fichero `.env`.

Para facilitar la inserción de usuarios en el sistema, se ha generado un comando accesible a través de la
consola. Así, para añadir un nuevo usuario administrador, se ejecutará por ejemplo:
```
$ bin/console miw:create-user "admin@example.com" "MyPassW0rd" true
```

Para lanzar el servidor con la aplicación en desarrollo, desde la raíz del proyecto se debe ejecutar el comando: 
```
$ symfony serve
```
Después ya se puede realizar una petición con el navegador a la dirección [http://localhost:8000/][lh]

## Estructura del proyecto:

El contenido y estructura del proyecto es:

* Directorio raíz del proyecto `.`:
    - `.env`: variables de entorno 
    - `phpunit.xml.dist` configuración por defecto de la suite de pruebas
    - `README.md`: este fichero
* Directorio `bin`:
    - Ejecutables (*console* y *phpunit*)
* Directorio `config`:
    - Ficheros de configuración de la aplicación y sus componentes
* Directorio `src`:
    - Contiene el código fuente de la aplicación
    - Subdirectorio `src/Entity`: entidades PHP (incluyen anotaciones de mapeo del ORM)
* Directorio `var`:
    - Ficheros de log y caché (diferenciando entornos).
* Directorio `public`:
    - `index.php` es el controlador frontal de la aplicación. Inicializa y lanza 
      el núcleo de la aplicación.
    - Subdirectorio `api-docs`: cliente [Swagger UI][swagger] y especificación de la API.
* Directorio `vendor`:
    - Componentes desarrollados por terceros (Symfony, Doctrine, JWT, Monolog, Dotenv, etc.)
* Directorio `tests`:
    - Conjunto de scripts para la ejecución de test con PHPUnit.

## Ejecución de pruebas

La aplicación incorpora un conjunto de herramientas para la ejecución de pruebas 
unitarias y de integración con [PHPUnit][phpunit]. Empleando este conjunto de herramientas
es posible comprobar de manera automática el correcto funcionamiento de la API completa
sin la necesidad de herramientas adicionales.

Para configurar el entorno de pruebas se debe crear un nuevo esquema de bases de datos vacío,
y una copia del fichero `./phpunit.xml.dist` y renombrarla como `./phpunit.xml`. De igual
forma se deberá crear una copia del fichero `./.env.test` y renombrarla como
`./.env.test.local`. Después se debe editar este último fichero para asignar los
siguientes parámetros:
                                                                            
* Configuración del acceso a la nueva base de datos (variable `DATABASE_URL`)
* Nombre y contraseña de los usuarios que se van a emplear para realizar las pruebas (no
es necesario insertarlos, lo hace automáticamente el método `setUpBeforeClass()`
de la clase `BaseTestCase`)

Para lanzar la suite de pruebas completa se debe ejecutar:
```
$ ./bin/phpunit [--testdox]
```

[dataMapper]: http://martinfowler.com/eaaCatalog/dataMapper.html
[doctrine]: http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/
[jwt]: https://jwt.io/
[lh]: https://localhost:8000/
[monolog]: https://github.com/Seldaek/monolog
[openapi]: https://www.openapis.org/
[phpunit]: http://phpunit.de/manual/current/en/index.html
[rest]: http://www.restapitutorial.com/
[symfony]: https://symfony.com/
[swagger]: http://swagger.io/
[yaml]: https://yaml.org/
[lexik]: https://github.com/lexik/LexikJWTAuthenticationBundle
[1]: https://github.com/lexik/LexikJWTAuthenticationBundle/blob/master/Resources/doc/index.md#generate-the-ssh-keys