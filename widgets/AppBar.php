<?php
/**
 * @link http://www.yiiassets.com
 * 5/26/2016 AD 4:39 PM
 * @copyright Copyright (c) 2016 served
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @license BSD-3-Clause
 */
namespace prawee\metroui\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class AppBar extends Widget{
    public $brandLabel=false;
    public $brandUrl=false;
    public $options=[];
    public $renderInnerContainer=true;
    public $innerContainerOptions=[];

    /**
     * Initialize the widgets
     */
    public function init()
    {
        parent::init();
        if(empty($this->options['class'])){
            Html::addCssClass($this->options,['app-bar']);
        }
        if(empty($this->options['data-role'])){
            $this->options['data-role']='appbar';
        }
        $options=$this->options;
        $tag=ArrayHelper::remove($options,'tag','header');
        echo Html::beginTag($tag,$options);
        if($this->renderInnerContainer){
            if(!isset($this->innerContainerOptions['class'])){
                Html::addCssClass($this->innerContainerOptions,['container']);
            }
            echo Html::beginTag('div',$this->innerContainerOptions);
        }
        if($this->brandLabel){
            echo Html::a($this->brandLabel,$this->brandUrl,['class'=>'app-bar-element branding']);
        }
    }

    /**
     * renders the widgets
     */
    public function run(){
        if($this->renderInnerContainer){
            echo Html::endTag('div');
        }
        $tag=ArrayHelper::remove($this->options,'tag','header');
        echo Html::endTag($tag);
    }
}
