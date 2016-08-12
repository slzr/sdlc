# SDLC Web
----------
Proyecto para Sistema de la calidad

## Desarrollo
Desde consola, teniendo instalado nodejs con npm y composer ejecutas:

- Dependencias Globales:
```
$ npm install -g bower gulp-cli stylus
```

- Instalar dependencias del proyecto:
```
$ composer install
$ npm install 
$ bower install
```
> Copiar `.env.example`, renombrarlo a `.env` y ejecutar:
```
$ php artisan key:generate
```

## Gulp Tasks

- Servidor LiveReload
> Compila Stylus, Lint js, minifica dependencias y abre Explorador Web
```
$ gulp
$ php artisan serve
```