```php
    AppBar::begin([
        'brandLabel'=>'Logo + Brand',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'app-bar fixed-top green',
        ],
    ]);
    //something
    //menu or search
    AppBar::end();
```
