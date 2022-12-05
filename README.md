<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## Instalar el proyecto

<p>Una vez descargado y descomprimido el proyecto, es necesario abrir el proyecto en Visual Studio Code y mediante la terminal que nos brinda dicha herramienta, es necesario ingresar los siguientes comandos:</p>

<p>1.	composer install</p>
<p>2.	cp .env.example .env</p>
<p>3.	php artisan key:generate</p>
<p>Es momento de crear la base de datos por lo que ingresaremos a nuestro localhost y en phpmyadmin crearemos la bd con el nombre de “plataforma” (sin comillas). Una vez creada la base de datos ingresaremos el próximo comando que sirve para crear las migraciones necesarias para su funcionamiento.</p>
<p>Actualmente existe un pequeño error en las rutas de las imágenes que no las reconoce el comando al migrar por lo que es necesario ingresar el siguiente comando para poder ejecutar el proyecto</p>
<p>4.	php artisan storage:link</p>
<p>Y después el siguiente comando. En este momento se crearán las migraciones ya especificadas. </p>
<p>5.	php artisan migrate:fresh --seed</p>
<p>Y para finalizar es momento de inicializar el servidor con el siguiente comando:</p>
<p>6.	php artisan serve</p>


<h2>Usuario en proyecto</h2>
<p>Para poder entrar al proyecto se requiere de un usuario y para facilitar las cosas se creo uno que es el "master", por lo que es necesario entrar con este usuario: 
cmirandavaltierra@gmail.com</p>
<p>Y la contraseña es: 12345678</p>
<p>Una vez accediendo podra ver contenidos de todos los roles existentes</p>
<p>Si en caso requiera crear un usuario nuevo tendra que registrarse y con el usuario "master", dar permisos al nuevo usuario creado</p>
<p>Es necesario dirigirse a la sección de Administrador, en el apartado Usuarios y ahi buscar el usuario creado y otorgar los permisos segun requiera.</p>
