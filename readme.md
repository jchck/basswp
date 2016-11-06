# basswp
A Composer powered WordPress Multisite setup

## features
* install and manage all dependencies via [Composer](https://getcomposer.org/). That's themes, plugins, and even the WordPress core
* use vagrant to setup a development enviroment

## reqirements
* [composer](https://getcomposer.org)

## use
1. clone this repo `$git clone https://github.com/jchck/basswp.git && cd basswp && rm -rf .git`
2. add necassary themes/plugins to the `require { }` array in [composer.json](basswp/composer.json)
3. `$composer install`

## suggested reading
* [using composer with wordpress](https://roots.io/using-composer-with-wordpress)
* [wordpress plugins with composer](https://roots.io/wordpress-plugins-with-composer)
* [wordpress packagist](https://wpackagist.org)

## license
MIT

## yay
 