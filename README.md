# Simple Nette Web Project

Made from Snow Project created by [Milan Felix Šulc](https://github.com/f3l1x).

Provided for even better use and as much simple implementation as possible.

## Contains 

### Backend
 
Whole project is based on [Contributte](https://contributte.org/) packages.

- `contributte/application`
- `contributte/bootstrap`
- `contributte/di`
- `contributte/forms`
- `contributte/http`
- `contributte/mail`
- `contributte/utils`
- `contributte/latte`
- `contributte/tracy`
- `nette/robot-loader`

We use [RobotLoader](https://doc.nette.org/cs/2.4/robotloader) for autoloading .

### Frontend

There are also some assets included via `cdn`.

- [jQuery 3.4.1](https://jquery.com/)
- [Bootsrap 4.3.1](https://getbootstrap.com/)
- [Select2 4.0.10](https://select2.org/)

## Installation

You will need `PHP >= 7.2` and [Composer](https://getcomposer.org/). Be sure you are on proper version.

Now build you project using composer. 

```
composer create-project tr1st/simple-nette-web-project@dev path/to/install
```

Application is now installed, fell free to run it and test as you want to.

### Sipe Web Server

The easiest way is to use php built-in web server. Just type in your console:

```
php -S 0.0.0.0:8000 -t www
```

Then visit [http://localhost:8000](http://localhost:8000) in your browser.

Done.
