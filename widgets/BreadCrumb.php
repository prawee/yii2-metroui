<?php
/**
 * @link http://www.yiiassets.com
 * 6/1/2016 AD 11:33 PM
 * @copyright Copyright (c) 2016 served
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @license BSD-3-Clause
 */
namespace prawee\metroui\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class BreadCrumb extends Widget{
    public $links;
    public $options;
    public function init()
    {
        parent::init();
        $home=Html::tag('span',null,['class'=>'icon mif-home']);
        array_unshift($this->links,$home);
        if(empty($this->options)){
            Html::addCssClass($this->options,['breadcrumbs']);
        }
    }
    public function run()
    {
        parent::run();
        $items=[];
        foreach($this->links as $item){
            if(is_string($item)){
                $link=Html::a($item,'#');
            }else{
                $link=Html::a($item['label'],$item['url']);
            }
            array_push($items,Html::tag('li',$link));
        }
        return Html::tag('ul',implode("\n",$items),$this->options);
    }
}
