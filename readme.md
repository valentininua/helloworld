# Hello World Package for PHP Composer #

 
## Usage ##

```bash
$ composer require valentininua/helloworld dev-master
$ touch helloWorld.php
```

```php
<?php
require_once "vendor/autoload.php";

$hello = new Valentininua\Demo\Hello();
echo $hello->hello();
```

```bash
$ php helloWorld.php
```

It will print "Hello World!" then exit.
