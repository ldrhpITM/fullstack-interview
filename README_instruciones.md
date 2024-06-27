Instruciones para ejecutar el proyecto
1.- validamos  que  las  extensiones de PHP (extension=sqlite3, extension=pdo_sqlite), esta configuracion se debe de realizar en el archivo php.ini.

2.- Abrimos  una terminal y nos movemos  hacia el path del proyecto  con:
    cd  ruta/fullstack-interview, la ruta cambia dependiendo donde  hayas  descargado el proyecto

3 .-Una vez que  estemos ubicado dentro del Proyecto desde la tyerminal ejecutamos el siguiente comando:
    composer  install 
    esto para bajar las depencias  que  necesita el proyecto.

4.- Ejecutamos el comando:
    npm install
    para instalar los paquetes  necesarios  que ocupa  el proyecto 

5.- Creamos  una  copia del archivo .env.example,  y le ponemos el  nombre de .env

6.- Vamos  a generar la APP_KEY que necesita el archivo .env, para lo cual desde la  ruta de  nuestro  proyecto vamos a ejeutar el siguiente comando:
    php artisan  key:generate

7.-  En la  ruta de  nuestro proyecto en la  carpeta databases (ruta/fullstack-interview/database) vamos a crear  un archivo que se  llame database.sqlite

8.-  ejecutamos las  migraciones y los seeders con el siguiente  comando para lo cual en la  terminal  nos ubicamos en la ruta de  nuestro proyecto.
    php artisan migrate --seed


9.- abrimos dos  terminales  y nos  ubicamos en la ruta de  nuestros  proyecto  en una  ejecutamos  el siguiente comando 

php artisan serve  

npm run dev

10 .- en un navegador  colocamos la  url  que nos  da el comado php artisan serve que es  http://localhost:8000
