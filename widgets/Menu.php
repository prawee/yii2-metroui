<?php
/**
 * @link http://www.yiiassets.com
 * 5/26/2016 AD 6:43 PM
 * @copyright Copyright (c) 2016 served
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @license BSD-3-Clause
 */
namespace prawee\metroui\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class Menu extends Widget{
    public $options=[];
    public $items=[];
    public function init()
    {
        parent::init();
        if(empty($this->options)){
            Html::addCssClass($this->options,['horizontal-menu']);
        }
    }
    public function run()
    {
        return $this->renderItems();
    }
    public function renderItems(){
        $items=[];
        foreach($this->items as $item){
            $items[]=$this->renderItem($item);
        }
        return Html::tag('ul',implode("\n",$items),$this->options);
    }
    public function renderItem($data){
        $items=[];
        if(isset($data['items'])){
            $output=Html::a($data['label'],$data['url'],['class'=>'dropdown-toggle']);
            foreach ($data['items'] as $item) {
                $items[]=$this->renderInnerItem($item);
            }
            $output.=Html::tag('ul',implode("\n",$items),[
                'class'=>'d-menu',
                'data-role'=>'dropdown',
                'data-no-close'=>'true'
            ]);
            return Html::tag('li',$output);
        }else{
            return Html::tag('li',Html::a($data['label'],$data['url']));
        }
    }
    public function renderInnerItem($data){
        return Html::tag('li',Html::a($data['label'],$data['url']));
    }
}
