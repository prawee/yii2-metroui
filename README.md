Metro UI  for Yii 2
===================
Metro UI for  Yii 2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist prawee/yii2-metroui "*"
```

or add

```
"prawee/yii2-metroui": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Layouts
```php
'components'=>[
    ...
    'view' => [
        'theme' => [
            'pathMap' => [
                '@app/views' => '@vendor/prawee/yii2-metroui/views'
            ],
        ],
    ],
],
```
