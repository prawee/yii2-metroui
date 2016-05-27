```php
AppBar::begin([
        'brandLabel'=>'Logo + Brand',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'app-bar fixed-top green',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        [
            'label' => 'Course', 'url'=>'#',
            'items'=>[
                ['label'=>'Yii2','url'=>['/course/yii2']],
                ['label'=>'PHP','url'=>['/course/php']],
                ['label'=>'Java','url'=>['/course/java']]
            ]
        ],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    echo Menu::widget([
        'options'=>[
            'class'=>'app-bar-menu small-dropdown place-right',
        ],
        'items'=>$menuItems
    ]);
    AppBar::end();
```
