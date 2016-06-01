```php
<?=BreadCrumb::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    'options'=>[
        'class'=>'breadcrumbs2'
    ]
])?>
<?=$content?>
````
